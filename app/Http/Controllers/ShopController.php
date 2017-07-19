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

    public function adiciona(Request $request)
    {          

    print_r($request->all());
        //$resposta = array('carrinho'=>'modafoca');
        //return response()->json($resposta);
      echo '{"fragments":{"div.widget_shopping_cart_content":"<div class=\"widget_shopping_cart_content\">\n\n<ul class=\"cart_list product_list_widget \">\n\n\t\n\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"http:\/\/livedemo00.template-help.com\/woocommerce_49014\/product\/product-15\/\">\n\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"\/\/livedemo00.template-help.com\/woocommerce_49014\/wp-content\/uploads\/2013\/09\/bobbi_brown_the_tailored_collection_2-90x90.png\" class=\"attachment-shop_thumbnail wp-post-image\" alt=\"bobbi_brown_the_tailored_collection_2\" \/>Bobbi brown the tailored collection\t\t\t\t\t\t<\/a>\n\n\t\t\t\t\t\t\n\t\t\t\t\t\t<span class=\"quantity\">2 &times; <span class=\"amount\">&#36;95.00<\/span><\/span>\t\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"http:\/\/livedemo00.template-help.com\/woocommerce_49014\/product\/product-14\/\">\n\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"\/\/livedemo00.template-help.com\/woocommerce_49014\/wp-content\/uploads\/2013\/09\/yves_saint_laurent_manicure_couture_in_5_favourite_chic_2-90x90.png\" class=\"attachment-shop_thumbnail wp-post-image\" alt=\"yves_saint_laurent_manicure_couture_in_5_favourite_chic_2\" \/>Yves saint laurent manicu\t\t\t\t\t\t<\/a>\n\n\t\t\t\t\t\t\n\t\t\t\t\t\t<span class=\"quantity\">2 &times; <span class=\"amount\">&#36;70.00<\/span><\/span>\t\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"http:\/\/livedemo00.template-help.com\/woocommerce_49014\/product\/product-13\/\">\n\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"\/\/livedemo00.template-help.com\/woocommerce_49014\/wp-content\/uploads\/2013\/09\/dg_smooth_eye_colour_duo_2-90x90.png\" class=\"attachment-shop_thumbnail wp-post-image\" alt=\"d&amp;g_smooth_eye_colour_duo_2\" \/>D&G smooth eye colour duo\t\t\t\t\t\t<\/a>\n\n\t\t\t\t\t\t\n\t\t\t\t\t\t<span class=\"quantity\">1 &times; <span class=\"amount\">&#36;100.00<\/span><\/span>\t\t\t\t\t<\/li>\n\t\t\t\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t<a href=\"http:\/\/livedemo00.template-help.com\/woocommerce_49014\/product\/product-10\/\">\n\t\t\t\t\t\t\t<img width=\"90\" height=\"90\" src=\"\/\/livedemo00.template-help.com\/woocommerce_49014\/wp-content\/uploads\/2013\/09\/illamasqua_nail_varnish_3-90x90.png\" class=\"attachment-shop_thumbnail wp-post-image\" alt=\"illamasqua_nail_varnish_3\" \/>Illamasqua nail varnish\t\t\t\t\t\t<\/a>\n\n\t\t\t\t\t\t\n\t\t\t\t\t\t<span class=\"quantity\">2 &times; <span class=\"amount\">&#36;104.00<\/span><\/span>\t\t\t\t\t<\/li>\n\t\t\t\t\t\n\t\n<\/ul><!-- end product list -->\n\n\n\t<p class=\"total\"><strong>Subtotal:<\/strong> <span class=\"amount\">&#36;638.00<\/span><\/p>\n\n\t\n\t<p class=\"buttons\">\n\t\t<a href=\"http:\/\/livedemo00.template-help.com\/woocommerce_49014\/cart\/\" class=\"button wc-forward\">View Cart<\/a>\n\t\t<a href=\"http:\/\/livedemo00.template-help.com\/woocommerce_49014\/checkout\/\" class=\"button checkout wc-forward\">Checkout<\/a>\n\t<\/p>\n\n\n<\/div>"},"cart_hash":"688cb297517f77c9c771fb9c932f16f6"}';
    }

    public function novo_cliente(Request $request){
      return response()->json(\App\Classes\User::criar_cliente($request->usuario));
    }

    public function login(Request $request){
//$request->usuario
      $cliente = new \App\Classes\User;
      $cliente->email = $request->login;
      $cliente->password = $request->senha;
     

      return $cliente->logged();

      
    }


    public function logoff(){
      session_destroy();
    }


    public function endpoint(Request $request)
    {           
        $name = $request->name;
        $desc = $request->desc;
        $url = $request->url;
        $valor = $request->valor;
        $imagem = $request->imagem;

        $categorias = $request->categorias;



        $categoria =  \App\ProductCategorie::where('name','=',$categorias[1])->first();
        if(!$categoria){
          //echo 'categoria nao existe vamos criar '.$categorias[1];
          $categoria = new \App\ProductCategorie;
          $categoria->name = $categorias[1];
          $categoria->desc = $categorias[1];
          $categoria->url = str_replace(" ","_",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($categorias[1]))));
          $categoria->save();
        }
        $subcategoria =  \App\ProductSubCategorie::where('name','=',$categorias[2])->first();
        if(!$subcategoria){
          //echo 'subcategoria nao existe vamos criar '.$categorias[2];
          $subcategoria = new \App\ProductSubCategorie;
          $subcategoria->name = $categorias[2];
          $subcategoria->desc = $categorias[2];
          $subcategoria->url = str_replace(" ","_",preg_replace("/&([a-z])[a-z]+;/i", "$1", htmlentities(trim($categorias[2]))));
          $subcategoria->product_categorie_id = $categoria->id;
          $subcategoria->save();
        }
       // print_r($categoria);
      //  print_r($subcategoria);



        $produto = new \App\Product;
        $produto->product_sub_categorie_id = $subcategoria->id;
        $produto->name = $name;
        $produto->desc = $desc;
        $produto->teaser = strip_tags(substr($desc, 0, 30));
       
        $url = str_replace('https://www.avonstore.com.br/', '', $url);
        $url = str_replace('/p', '', $url);
        $produto->url = $url;
        $produto->price = $valor;
        $produto->promo = 0;
        $produto->store_id = 1;
        $produto->manufacturer_id = 1;
        $produto->quantity = 1;
        $produto->min_quantity = 1;
        $produto->published_at = '2018-07-18 20:50:09';

        try {
          $resposta = $produto->save();
        } catch (Exception $e) {
          $resposta = $e->getMessage();
        }
        try {
          $all_str = "abcdefghijlkmnopqrstuvxyzwABCDEFGHIJKLMNOPQRSTUVWXYZ";
          $nome = "";
          for ($i = 0;$i <= 6 ;$i++){
            $nome .= $all_str[mt_rand(0,strlen($all_str))];
          }


          $this->imagem($imagem , $nome , $produto->id);
            
          } catch (Exception $e) {
             $resposta = $e->getMessage();
          }
       

        return response()->json($resposta);
    }

    public function imagem($url , $nome , $id){
      $extension = strrchr($url, '.');
      echo getcwd();
      $this->grab_image($url, '../storage/app/'.$nome.$extension);

      $arquivo = new \App\Attach;

      $url = str_replace('/p', '', str_replace('https://www.avonstore.com.br/', '', $url));

      $arquivo->name = $nome;
      $arquivo->mime = mime_content_type('../storage/app/'.$nome.$extension);
      $arquivo->original_filename = $url;
      $arquivo->filename =  $nome.$extension;
      $arquivo->entity = 'product';
      $arquivo->entity_id = $id;
      $arquivo->user_id = 1;

      $arquivo->save();
    }


    public function grab_image($url,$saveto){
      $ch = curl_init ($url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
      $raw=curl_exec($ch);
      curl_close ($ch);
      if(file_exists($saveto)){
          unlink($saveto);
      }
      try {
         $fp = fopen($saveto,'x');

          fwrite($fp, $raw);
          fclose($fp);
          echo "Imagem salva ";

      } catch (Exception $e) {
        echo $e->getMessage();
      }
     echo getcwd();
  }

}
