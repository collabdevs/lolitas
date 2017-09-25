<?php

namespace App\Classes;


class Cart extends \App\Cart
{
    public static function carrinho(){

    	if (php_sapi_name() == "cli") {
		    $ip = '192.168.0.1';
		} else {
		    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				    $ip = $_SERVER['HTTP_CLIENT_IP'];
				} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				} else {
				    $ip = $_SERVER['REMOTE_ADDR'];
				}
		}
    	
		$carrinho = \App\Cart::where('user_id','=',$ip)->first();
		if(!$carrinho){
			$carrinho = new \App\Cart;
	    	$carrinho->name = 'carrinho@teste';
	    	$carrinho->deal_at = date('Y-m-d H:i:s');
	    	$carrinho->total = 0;
	    	$carrinho->user_id = $ip;
	    	$carrinho->store_id = 1;
	    	$carrinho->status = 1;
	    	$carrinho->save();
		}
//se nao tiver logado usar o ip como id de usuario ip e browser id
		return $carrinho;

    }


    public static function add($id_produto){
    	

    	$carrinho = self::carrinho();

		//$produto_carrinho = new \App\CartProduct;
		$produto =  \DB::table('products')->where('id','=',$id_produto)->first();

		
		$produto_carrinho = new \App\CartProduct;
		$produto_carrinho->name = $produto->name;
    	$produto_carrinho->added_at = date('Y-m-d H:i:s');
    	$produto_carrinho->price = $produto->price;
    	$produto_carrinho->discount = $produto->promo;
    	$produto_carrinho->quantity = 1;
    	$produto_carrinho->cart_id = $carrinho->id;
    	$produto_carrinho->product_id = $id_produto;
    	$produto_carrinho->save();

    	
    	return $carrinho;
    }

    public function products(){
    	return $this->hasMany(Product::class);
    }

 
}
