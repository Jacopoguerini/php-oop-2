<?php 
    require_once __DIR__ . '/products.php';

    class Seller {
        public $sellerUsername;
        public $product;

        // constructor
        function __construct($sellerUsername = "") {
            $this->sellerUsername = $sellerUsername;
            $this->product = null; //init
        }

        // methods
        public function newProduct($sellerUsername, $productName, $category, $price) {
            $this->product = new Product($sellerUsername, $productName, $category, $price);
        }
        
    }

    $seller1 = new Seller("Shop1");
    $seller1->newProduct("Shop1", "Matita HB", "Cancelleria", 1.5);
    var_dump($seller1);

    $seller2 = new Seller("Shop 2");
    $seller2->newProduct("Shop2", "Padella 22", "Cucina", 25);
    var_dump($seller2);
