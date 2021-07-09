<?php 
    require_once __DIR__ . '/products.php';

    class Seller {
        public $sellerUsername;
        public $productCategories = [];
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

        public function setCategories($array) {
            if(is_array($array)) {
                $this->productCategories = $array;
            } else {
                $this->productCategories[] = $array;
            }
        }
        
    }

    $seller1 = new Seller("Shop1");
    $seller1->newProduct("Shop1", "Matita HB", "Cancelleria", 1.5);
    $seller1->setCategories(["Cancelleria", "Giardinaggio", "Libri", "Elettronica"]);
    var_dump($seller1);

    $seller2 = new Seller("Shop 2");
    $seller2->newProduct("Shop2", "Padella 22", "Cucina", 25);
    $seller2->setCategories(["Cucina", "Alimentari", "Abbigliamento"]);
    var_dump($seller2);
