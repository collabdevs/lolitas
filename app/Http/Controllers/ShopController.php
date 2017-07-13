<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller {


	public function principal()
    {
        $categoria_model =  \App\ProductCategorie::all();
        $sub_categorias =  \App\ProductSubCategorie::all();
        $produtos = array();

   		$produtos_categoria = \App\Product::all();
   		//print_r(\App\Product::where('product_sub_categorie_id','=',$sub_categoria->id)->get());
   		foreach ($produtos_categoria as $produto) {
   			$imagem_produto = \App\Attach::where('entity','=','product')->where('entity_id','=',$produto->id)->get()->first();
   			$produto->imagem = ($imagem_produto !="") ? $imagem_produto : array() ;
   			$produtos[]=$produto;

   		}
        
       // print_r($produtos);
        $resposta = array('categorias'=>$categoria_model,
        				'sub_categorias'=>$sub_categorias,
        				'produtos'=>$produtos);
        return response()->json($resposta);
    }



	public function categoria($categoria)
    {
        $categoria_model =  \App\ProductCategorie::where('url','=',$categoria)->get()->first();
        $sub_categorias =  \App\ProductSubCategorie::where('product_categorie_id','=',$categoria_model->id)->get();
        $produtos = array();
        foreach ($sub_categorias as $sub_categoria) {
       		$produtos_categoria = \App\Product::where('product_sub_categorie_id','=',$sub_categoria->id)->get();
       		//print_r(\App\Product::where('product_sub_categorie_id','=',$sub_categoria->id)->get());
       		foreach ($produtos_categoria as $produto) {
       			$imagem_produto = \App\Attach::where('entity','=','product')->where('entity_id','=',$produto->id)->get()->first();
       			$produto->imagem = ($imagem_produto !="") ? $imagem_produto : array() ;
       			$produtos[]=$produto;

       		}
        }
       // print_r($produtos);
        $resposta = array('categoria'=>$categoria_model,
        				'sub_categoria'=>$sub_categorias,
        				'produtos'=>$produtos);
        return response()->json($resposta);
    }


    public function produto($produto)
    {
        
       		$produto = \App\Product::where('url','=',$produto)->get()->first();
       		$sub_categoria = $produto->productSubCategorie()->first();
       		$categoria = $sub_categoria->productCategorie()->first();
       		$produto->categoria = $categoria;
       		$produto->sub_categoria = $sub_categoria;

       		$produto->imagem =  \App\Attach::where('entity','=','product')->where('entity_id','=',$produto->id)->get();
       		
        $resposta = array('categoria'=>$categoria,
        				'sub_categoria'=>$sub_categoria,
        				'produto'=>$produto);
        return response()->json($resposta);
    }


    public function carrinho()
    {       		
        $resposta = array('carrinho'=>'carrinho');
        return response()->json($resposta);
    }

    public function novo_cliente(Request $request){
      return response()->json(\App\Classes\User::criar_cliente($request->usuario));
    }

}
