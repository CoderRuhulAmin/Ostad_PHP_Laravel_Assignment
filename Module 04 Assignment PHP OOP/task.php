<?php
// Module 04 Assignment PHP OOP
/*

You are working on a project to create an online shopping cart system. 
As part of the project, you need to implement a Product class that represents a product in the system. 
The Product class should have the following properties: 

*/
class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(){
        $formattedPrice = "$".number_format((float)$this->price, 2, '.', '');
        // $formattedPrice = "$".round($this->price, 2);

        return $formattedPrice;
    }

    // TODO: Add showDetails method
    public function showDetails(){
        $formattedPrice = $this->getFormattedPrice();
        echo "Product Details: <br>- ID: {$this->id}. <br>- Name: {$this->name}. <br>- Price: {$formattedPrice}.";
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();



// Expected Output:


// Product Details:
// - ID: 1
// - Name: T-shirt
// - Price: $19.99