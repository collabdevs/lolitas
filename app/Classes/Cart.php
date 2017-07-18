<?php

namespace App\Classes;


class Cart extends \App\Cart
{
    public function carrinho(){

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
    	
      	echo $ip;
//se nao tiver logado usar o ip como id de usuario ip e browser id


    }


    public static function add($id_produto){
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
    	


    	$carrinho = new \App\Cart;
    	$carrinho->name = 'carrinho@teste';
    	$carrinho->deal_at = '2017-07-14 16:33:44';
    	$carrinho->total = 0;
    	$carrinho->user_id = $ip;
    	$carrinho->store_id = 1;
    	$carrinho->status = 1;
    	$carrinho->save();
    	return $carrinho;
    }

 
}
