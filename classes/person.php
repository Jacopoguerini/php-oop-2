<?php 
    require_once __DIR__ . '/credit-card.php';
    require_once __DIR__ . '/user.php';

    class Person {
        public $name;
        public $surname;
        public $address;
        public $postalCode;
        public $city;
        public $creditCard;
        public $userData;

        // constructor
        function __construct($name = "", $surname = "", $address = "", $postalCode = 0, $city = "") {
            $this->name = $name;
            $this->surname = $surname;
            $this->address = $address;
            $this->postalCode = $postalCode;
            $this->city = $city;
            $this->creditCard = null; //init
            $this->userData = null; //init
        }

        // methods
        function insertCreditCard($cardNumber, $expDate, $cvc) {
            $this->creditCard = new CreditCard($cardNumber, $expDate, $cvc);
        }

        function insertUserData($username, $email, $password) {
            $this->userData = new User($username, $email, $password);
        }
    }

    $user1 = new Person("Mario", "Rossi", "Via Marco Polo 7", "54321", "Roma");
    $user1->insertCreditCard("0121251285", "07/21", "842");
    $user1->insertUserData("mario.rossi", "mariorossi@email.it", "mariorossi1982");
    var_dump($user1);