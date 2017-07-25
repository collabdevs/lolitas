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
        $produto =  DB::table('products')->first();

        $carrinho =  \App\Classes\Cart::add($produto->id);

        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());
        \App\Classes\Cart::add($produto->id);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

        \App\Classes\Cart::add($produto->id);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

    }



    // tests
    public function testDeveTerNumeroCertoDeProdutos()
    {
        $produto =  DB::table('products')->first();
       $carrinho =  \App\Classes\Cart::add($produto->id);

        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());
        \App\Classes\Cart::add($produto->id);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

        \App\Classes\Cart::add($produto->id);
        $todos =  App\Classes\Cart::all();
        $this->assertEquals(1 , $todos->count());

        $produtos = \App\Classes\Cart::products();
        $this->assertEquals(3 , $produtos->count());

    }
}