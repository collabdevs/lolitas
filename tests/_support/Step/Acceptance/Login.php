<?php
namespace Step\Acceptance;

class Login extends \AcceptanceTester{
    private $user;
    private $container;

    public function __construct()
    {
        $I = $this;
        $this->user = new \App\User; 
    }

    public function create_user($nome, $email, $senha){
        $user = new \App\User; 
        $user->name=$nome;
        $user->email=$email;
        $user->senha =$senha;
        $user->save();
        return $user;
    }

/**
     * @Given i have email with name :arg1
     */
     public function iHaveEmailWithName($arg1)
     {
        $this->user->email = $arg1;
     }

    /**
     * @Given Given i have password with value :arg1
     */
     public function givenIHavePasswordWithValue($arg1)
     {
        $this->user->password = $arg1;
     }

    /**
     * @When i call login
     */
     public function iCallLogin()
     {
        $this->container = $this->user->login();
     }

    /**
     * @Then i should see message :arg1
     */
     public function iShouldSeeMessage($arg1)
     {
        if($this->container['mensagem'] == $arg1){
            return true;
        }else{
            throw new \Error("Não voltou a mensagem correta deveria ser  ".$arg1, 1);
            
        }
     }



     /**
     * @Then Then i should see resposta :arg1
     */
     public function thenIShouldSeeResposta($arg1)
     {
        if($this->container['logado'] == $arg1){
            return true;
        }else{
            throw new \Error("Não voltou a resposta correta deveria ser  ".$arg1, 1);
            
        }
     }


    /**
     * @Given i have address with name :arg1
     */
     public function iHaveAddressWithName($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `i have address with name :arg1` is not defined");
     }

    /**
     * @When i call save_data
     */
     public function iCallSave_data()
     {
        throw new \Codeception\Exception\Incomplete("Step `i call save_data` is not defined");
     }

    /**
     * @Then i call personal_data
     */
     public function iCallPersonal_data()
     {
        throw new \Codeception\Exception\Incomplete("Step `i call personal_data` is not defined");
     }

    /**
     * @Then Then i should see that my address name :arg1
     */
     public function thenIShouldSeeThatMyAddressName($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `Then i should see that my address name :arg1` is not defined");
     }

    /**
     * @Given the customer has logged into their current account
     */
     public function theCustomerHasLoggedIntoTheirCurrentAccount()
     {
        throw new \Codeception\Exception\Incomplete("Step `the customer has logged into their current account` is not defined");
     }

    /**
     * @Given the balance is shown to be :arg1 reais
     */
     public function theBalanceIsShownToBeReais($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `the balance is shown to be :arg1 reais` is not defined");
     }

    /**
     * @When the checkout my cart with :arg1 reais total
     */
     public function theCheckoutMyCartWithReaisTotal($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `the checkout my cart with :arg1 reais total` is not defined");
     }

    /**
     * @Then the new current account balance should be :arg1 reais
     */
     public function theNewCurrentAccountBalanceShouldBeReais($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `the new current account balance should be :arg1 reais` is not defined");
     }
}