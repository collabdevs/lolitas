<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name", "email", "password", "group_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "email" => "required",
        "password" => "required",
        "group_id" => "required|numeric",
    ];

    public function group()
    {
        return $this->belongsTo("App\Group");
    }

    public function login()
    {
        $resposta = array();
        $resposta['logado'] = 0;
        $resposta['usuario_logado'] = 0;
        $resposta['id_logado'] = 0;
        $resposta['mensagem'] = 'Nao logado';
    
        try {
            $model = User::where('email', '=', $this->email)->first();
        } catch (Exception $e) {
            $resposta['mensagem'] = $e->getMessage();
        }

        if(isset($model->name)){
            if($model->password == $this->password){
                unset($model->password);
                $resposta['usuario_logado'] = json_encode($model);
                $resposta['id_logado'] = $model->id;
                $resposta['mensagem'] = "Logado";
                $resposta['logado'] = 1;
            }else{
                 $resposta['mensagem'] = "Senha nao confere";
            }
        }else{
            $resposta['mensagem'] = "Usuario nao encontrado";
        }
        $_SESSION['logado'] = json_encode($resposta);
        return $resposta;
    }


}
