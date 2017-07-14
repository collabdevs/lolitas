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
       $carrinho =  new \App\Classes\Cart;


       print_r($carrinho->carrinho());

die();

    }
}