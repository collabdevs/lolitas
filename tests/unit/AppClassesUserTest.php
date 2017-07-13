<?php


class AppClassesUserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testDeveCriarUmNovoCliente()
    {
        $dados = array();
        $todos =  App\Classes\User::criar_cliente($dados);
        $this->assertEquals( 'Nao foi possivel criar, falta seu nome', $todos['response']);
        $dados['name']='Zezinho de teste';
        $todos =  App\Classes\User::criar_cliente($dados);
        $this->assertEquals( 'Nao foi possivel criar, falta seu email', $todos['response']);
        $dados['email']='email@teste.com';
        $todos =  App\Classes\User::criar_cliente($dados);
        $this->assertEquals( 'Nao foi possivel criar, falta sua senha', $todos['response']);

        $dados['password']='adaada';
        $todos =  App\Classes\User::criar_cliente($dados);
        $this->assertEquals( 'Conta Criada com sucesso', $todos['response']);

        $todos =  App\Classes\User::criar_cliente($dados);
        $this->assertEquals( 'Conta já existe no sistema', $todos['response']);


    }
}