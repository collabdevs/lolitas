<?php

namespace App\Classes;


class User extends \App\User
{
    public function login(){
        $logado = $this::where('email','=', $this->email)->first();
        $_SESSION['login_message']='';
        if($logado){
            if($this->password == $logado->password){
                $grupo = $logado->group()->first();
         
                $logado->password ='*******';
                $_SESSION['user_logado']=$logado->toJson();
                $_SESSION['id_logado']=$logado->id;
                $_SESSION['grupo_logado']=$logado->group_id;
                $_SESSION['nome_grupo_logado']=$grupo->name;
                $_SESSION['logado']=json_encode(array('logado'=>1,
                                                        'nome'=>$logado->name,
                                                        'name'=>$logado->name,
                                                        'email'=>$logado->email,
                                                        'grupo'=>$logado->group_id , 
                                                        'grupo_nome'=>$grupo->name , 
                                                        'usuario_logado'=>$logado->toJson()));
            }else{
                $_SESSION['login_message']='Sua senha não confere';
            }
        }else{
           $_SESSION['login_message']='Não foi encontrado nenhum usuario em nosso banco de dados'; 
        }
    }


    public static function criar_cliente($dados){
       // print_r($dados);
        $resp = array();
        $resp['status'] = 0;
        $resp['response']='';

        if(!isset($dados['name'])){
            $resp['response'] .= 'Nao foi possivel criar, falta seu nome';
            return $resp;
        }

        if(!isset($dados['email'])){
            $resp['response'] .= 'Nao foi possivel criar, falta seu email';
            return $resp;
        }

        if(!isset($dados['password'])){
            $resp['response'] .= 'Nao foi possivel criar, falta sua senha';
            return $resp;
        }

        $user = new \App\User;
        $user->name = $dados['name'];
        $user->email = $dados['email'];
       // $user->group_id = 4;
        $user->password = $dados['password'];

        $existe = \App\User::where('email','=',$dados['email'])->first();

    /*    print_r($existe);
        die();*/

        try {
            $user->save();
            $resp['response'] .= 'Conta Criada com sucesso';
            $resp['status'] .= 1;
        } catch (Exception $e) {
             $resp['response'] .= $e->getMessage();
        }

        return $resp;
    }
}
