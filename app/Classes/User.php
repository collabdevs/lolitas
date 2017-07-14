<?php

namespace App\Classes;


class User extends \App\User
{
    public function login(){
        $logado = $this::where('email','=', $this->email)->first();
        $_SESSION['login_message']='';
        $array_retorno = array();
        if($logado){
            if($this->password == $logado->password){
                $grupo = $logado->group()->first();
                $_SESSION['login_message']='Logado';

         
                $logado->password ='*******';
                $_SESSION['user_logado']=$logado->toJson();
                $_SESSION['id_logado']=$logado->id;
                $_SESSION['grupo_logado']=$logado->group_id;

                $_SESSION['nome_grupo_logado']=$grupo->name;
                $array_retorno = array('logado'=>1,
                                                        'nome'=>$logado->name,
                                                        'name'=>$logado->name,
                                                        'email'=>$logado->email,
                                                        'grupo'=>$logado->group_id , 
                                                        'grupo_nome'=>$grupo->name , 
                                                        'usuario_logado'=>$logado->toJson());
                $_SESSION['logado']=$array_retorno;
            }else{
                $_SESSION['login_message']='Sua senha não confere';
                 $array_retorno = array('logado'=>0,
                                                        'login_message'=>'Sua senha não confere');
                 $_SESSION['logado']=$array_retorno;
            }
        }else{
           $_SESSION['login_message']='Não foi encontrado nenhum usuario em nosso banco de dados'; 
           $array_retorno = array('logado'=>0,
                                                        'login_message'=>'Não foi encontrado nenhum usuario em nosso banco de dados');
           $_SESSION['logado']=$array_retorno;
        }
        return $array_retorno;
    }

    public function logged(){
        $logado = $this::where('email','=', $this->email)->first();
        $array_retorno = array();
        if($logado){
            if($this->password == $logado->password){
                $this->login();
                $grupo = $logado->group()->first();
                $logado->password ='*******';
                $array_retorno = json_encode(array('logado'=>1,
                                                        'nome'=>$logado->name,
                                                        'name'=>$logado->name,
                                                        'email'=>$logado->email,
                                                        'grupo'=>$logado->group_id , 
                                                        'grupo_nome'=>$grupo->name , 
                                                        'usuario_logado'=>$logado->toJson()));
            }else{
              $array_retorno = json_encode(array('logado'=>0,
                                        'login_message'=>'Sua senha não confere',
                                        'usuario_logado'=>''));
            }
        }else{
           $array_retorno = json_encode(array('logado'=>0,
                                        'login_message'=>'Não foi encontrado nenhum usuario em nosso banco de dados',
                                        'usuario_logado'=>'')); 
        }
        return $array_retorno;
    }


    public static function create_user($nome, $email, $senha , $group_id = 4){
        $resp = array();
        $resp['status'] = 0;
        $resp['response']='';
        $user = new \App\User; 
        $user->name = $nome;
        $user->email = $email;
        $user->password = $senha;
        $user->group_id = $group_id;

        $existe = \App\User::where('email','=',$email)->first();

        if($existe){
                $resp['response'] .= 'Conta já existe no sistema';
                return $resp;
        }

        try {
            $user->save();
            $resp['response'] .= 'Conta Criada com sucesso';
            $resp['status'] .= 1;
        } catch (Exception $e) {
             $resp['response'] .= $e->getMessage();
        }





        return $resp;
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

        

        return self::create_user($dados['name'],$dados['email'],$dados['password']);
    }
}
