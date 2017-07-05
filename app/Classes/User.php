<?php

namespace App\Classes;


class User extends \App\User
{
    public function login(){
        $logado = $this::where('email','=', $this->email)->first();
        $_SESSION['login_message']='';
        if($logado){

            if($this->password == $logado->password){
                $logado->password ='*******';
                $_SESSION['user_logado']=$logado->toJson();
                $_SESSION['id_logado']=$logado->id;
                $_SESSION['grupo_logado']=$logado->group_id;
                $_SESSION['logado']=json_encode(array('logado'=>1,
                                                        'nome'=>$logado->name,
                                                        'email'=>$logado->email,
                                                        'grupo'=>$logado->group_id , 
                                                        'usuario_logado'=>$logado->toJson()));
            }else{
                $_SESSION['login_message']='Sua senha não confere';
            }
        }else{
           $_SESSION['login_message']='Não foi encontrado nenhum usuario em nosso banco de dados'; 
        }
    }
}
