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

 
}
