<?php 
    require_once __DIR__ . '/credit-card.php';
    require_once __DIR__ . '/user.php';
    require_once __DIR__ . '/user-premium.php';

    class Seller {
        public $username;
        public $id;
        

        // constructor
        function __construct($username = "", $id = "") {
            $this->username = $username;
            $this->id = $id;

        }

        // methods
        function insertCreditCard($cardNumber, $expDate, $cvc) {
            $this->creditCard = new CreditCard($cardNumber, $expDate, $cvc);
        }

        function insertUserData($username, $email, $password) {
            $this->userData = new User($username, $email, $password);
        }

        function insertPremiumData($premiumLevel) {
            $this->premiumData = new PremiumData($premiumLevel);
        }
    }

    $person1 = new Person("Mario", "Rossi", "Via Marco Polo 7", "54321", "Roma");
    $person1->insertCreditCard("0121251285", "07/21", "842");
    $person1->insertUserData("mario.rossi", "mariorossi@email.it", "mariorossi1982");
    $person1->insertPremiumData(2);
    var_dump($person1);