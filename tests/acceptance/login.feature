Feature: login
  In order to access my account
  As a logged user
  I need to create enter on "minha-conta"

 Scenario: get blocked on wrong password
 	As a costumer unlogged
 	I need to be block when i try to logged in with wrong credentials 
 	Given i have email with name "email@teste.com" 
 	And Given i have password with value "erradoerrado"
 	When i call login 
 	Then i should see message "Usuario nao encontrado" 
 	And Then i should see resposta "0"
 	
 Scenario: get blocked on wrong password
 	As a costumer unlogged
 	I need to be block when i try to logged in with wrong password 
 	Given i have email with name "danielmmf@gmail.com" 
 	And Given i have password with value "erradoerrado"
 	When i call login 
 	Then i should see message "Senha nao confere"
 	And Then i should see resposta "0" 	

 Scenario: get access on right credentials
 	As a costumer unlogged
 	I need to be able to acess my profile when i try to logged in with right credentials 
 	Given i have email with name "danielmmf@gmail.com" 
 	And Given i have password with value "daddad"
 	When i call login 
 	Then i should see message "Logado" 
 	And Then i should see resposta "1" 

	
	

