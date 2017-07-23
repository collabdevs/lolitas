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

        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());
        \App\Classes\Cart::add(1);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

        \App\Classes\Cart::add(1);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

    }



    // tests
    public function testDeveTerNumeroCertoDeProdutos()
    {
//primeiro IP -  BrowserID - UserId
       $carrinho =  \App\Classes\Cart::add(1);

        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());
        \App\Classes\Cart::add(1);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

        \App\Classes\Cart::add(1);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

    }
}