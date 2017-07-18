<?php
namespace Step\Acceptance;

class Ecom extends \AcceptanceTester{
    private $group, $categorie;
    private $todos;

    public function __construct()
    {
        $I = $this;
        \DB::table('groups')->truncate();
        \DB::table('categories')->truncate();
        $this->group = new \App\Group; 
        $this->categorie = new \App\Categorie; 
    }

/**
     * @Given i have categorie with name :arg1
     */
     public function iHaveCategorieWithName($arg1)
     {
        $this->categorie->name = $arg1;
        $this->categorie->url = 'slug_de_teste';
     }

    /**
     * @When i call categorie_save
     */
     public function iCallCategorie_save()
     {
        return $this->categorie->save();
     }


    /**
     * @Then i call categories and should see that total number categories is :arg1
     */
     public function iCallCategoriesAndShouldSeeThatTotalNumberCategoriesIs($arg1)
     {
        $total = \App\Categorie::all();
        if($total->count() == $arg1){
            return true;
        }else{
            throw new \Error("Não esta retornando o numero certo de categorias", 1);
            
        }
     }


     /**
     * @Given i have a empty cart
     */
     public function iHaveAEmptyCart()
     {
        $total = \App\Cart::all();
        if($total->count() == 0){
            return true;
        }else{
            throw new \Error("Não esta retornando o numero certo de carrinhos", 1);
            
        }
     }

    /**
     * @When i add product
     */
     public function iAddProduct()
     {
        $carrinho = \App\Classes\Cart::add(1);
     }

    /**
     * @Then i call cart_itens and should see that total number itens is :arg1
     */
     public function iCallCart_itensAndShouldSeeThatTotalNumberItensIs($arg1)
     {
        $total = \App\Cart::all();
        if($total->count() == 1){
            return true;
        }else{
            throw new \Error("Não esta retornando o numero certo de carrinhos", 1);
            
        }
     }


}


