Feature: ecom
  In order to add products i must have sub_categories
  As a admin
  I need to create modifiy and delete sub_categories
  

  Scenario: create new categorie to be able to create sub_categories
 	As a admin
 	I need to be able to create a new sub_categories to create a product
 	Given i have categorie with name "sub_categories de teste" 
 	When i call categorie_save
 	Then  i call categories and should see that total number categories is "1"
 	
 