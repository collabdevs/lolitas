<?php

require_once "Spyc.php";
$dados = Spyc::YAMLLoad('Store.yml');
//$dados = Spyc::YAMLLoad('attach.yml');
//$dados = Spyc::YAMLLoad('car.yml');


function camelize($input, $separator = '_'){
    return str_replace($separator, '', ucwords($input, $separator));
}


function decamelize($string) {
	return strtolower(preg_replace(['/([a-z\d])([A-Z])/', '/([^_])([A-Z][a-z])/'], '$1_$2', $string));
}

function endsWith($haystack, $needle)
{
    return $needle === '' || substr_compare($haystack, $needle, -strlen($needle)) === 0;
}

$nome_belongs = '';
foreach ($dados as $nome => $value) {
	$belongs = '';
	$belongs_count = 0;
	$entidade = $nome;
	echo PHP_EOL.'criando form para '.$entidade.PHP_EOL;
	echo 'campos : [ ';
	$campos ='<span ng-controller="formCtrl"><input type="hidden" ng-model="loaded_entity.id">';
	
	foreach ($value['fields'] as $k => $campo) {
		$nome_campo = '';
		$nome_campo = $k;
		echo '"'.$nome_campo.'" ';

		if($campo['schema'] == 'string'){	
			$campos .='<div class="form-group"><label class="col-sm-2 control-label">'.strtoupper($nome_campo).'</label>
	            <div class="col-sm-10"><input type="text" class="form-control" ng-model="loaded_entity.'.$nome_campo.'" name="'.$nome_campo.'"></div>
	        </div>
	        <div class="hr-line-dashed"></div>';
		}elseif($campo['schema'] == 'dateTime'){	
			$campos .='<div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">'.camelize($nome_campo).' (2017-01-01 00:00:00)</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input  type="datetime" placeholder="2017-01-01 00:00:00" class="form-control" ng-model="loaded_entity.'.$nome_campo.'" >
                                </div>
                            </div>
	        <div class="hr-line-dashed"></div>';
		}elseif($campo['schema'] == 'text nullable'){	
			$campos .='<div class="form-group"><label class="col-sm-2 control-label">'.strtoupper($nome_campo).'</label>
			<div class="col-sm-10">
                                    <div summernote class="summernote" ng-model="loaded_entity.'.$nome_campo.'" ></div>
                                    </div>
                                </div>
	        <div class="hr-line-dashed"></div>';
		}elseif($campo['schema'] == 'text nullable'){	
			$campos .='<div class="form-group"><label class="col-sm-2 control-label">'.strtoupper($nome_campo).'</label>
			<div class="col-sm-10">
                                    <div summernote class="summernote" ng-model="loaded_entity.'.$nome_campo.'" ></div>
                                    </div>
                                </div>
	        <div class="hr-line-dashed"></div>';
		}elseif($campo['schema'] == 'integer'){	


			if(endsWith($nome_campo , '_id')){
				$nome_belongs = substr($nome_campo, 0, -3);
				$belongs .= $nome_belongs.',';

				$campos .='<div class="form-group">
				<label class="col-sm-2 control-label">'.camelize($nome_belongs).':</label>
				    <div class="col-sm-10">
				    <select class="form-control m-b" name="'.$nome_campo.'" ng-model="loaded_entity.'.$nome_campo.'">
				        <option ng-repeat="relation in bt['.$belongs_count.']" value="{{relation.id}}">{{relation.name}}</option>
				    </select>
				    </div>
				</div>';

				$belongs_count++;
			}else{
				$campos .='<div class="form-group"><label class="col-sm-2 control-label">'.strtoupper($nome_campo).'</label>
	            <div class="col-sm-10"><input type="text" class="form-control" ng-model="loaded_entity.'.$nome_campo.'" name="'.$nome_campo.'"></div>
	        </div>
	        <div class="hr-line-dashed"></div>';
			}

			
		}else{
			$campos .='<div class="form-group"><label class="col-sm-2 control-label">'.strtoupper($nome_campo).'</label>
	            <div class="col-sm-10"><input type="text" class="form-control" ng-model="loaded_entity.'.$nome_campo.'" name="'.$nome_campo.'"></div>
	        </div>
	        <div class="hr-line-dashed"></div>';
		}

	}

	/*

	testar se o campo tem o nome terminado em _id  e for do tipo integer
	fazer carregar o drop down

	*/




	echo ']';
	if(isset($value['belongsTo'])){
		$array_belongs = explode(',',$value['belongsTo']);
		foreach ($array_belongs as  $belong) {
			# code...
			//$belong = $value['belongsTo'];
			$belongs .= $belong.',';
			$campos .='<input type="hidden" class="form-control" id="relation" value="'.$belong.'">
				<div class="form-group">
				<label class="col-sm-2 control-label"> '.camelize($belong).' : </label>
				    <div class="col-sm-10">
				    <select class="form-control m-b" name="'.$belong.'_id" ng-model="loaded_entity.'.$belong.'_id">
				        <option ng-repeat="relation in bt['.$belongs_count.']" value="{{relation.id}}">{{relation.name}}</option>
				    </select>
				    </div>
				</div>
			</span>';
			$belongs_count++;
		}

	}
	$belongs = rtrim($belongs, ",");
	$campos .='<input type="hidden" class="form-control" id="pertences" value="'.$belongs.'">';
	try {
		file_put_contents('public/adm/views/models/'.strtolower(decamelize($entidade)).'.html', $campos);
		echo PHP_EOL.' Arquivo '.strtolower(decamelize($entidade)).'.html gerado com sucesso'.PHP_EOL;
	} catch (Exception $e) {
		
	}
	
}
