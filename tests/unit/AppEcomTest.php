<?php


class AppEcomTest extends \Codeception\Test\Unit
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
    public function testDeveCriarUmCarrinhoOuUsarUmExistente()
    {
//primeiro IP -  BrowserID - UserId
       $carrinho =  \App\Classes\Cart::add(1);


       print_r($carrinho->status);
       echo 'aqui';
       die($carrinho->status);




    }
}