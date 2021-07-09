<?php 
    require_once __DIR__ . '/person.php';
    require_once __DIR__ . '/user-premium.php';

    class User {
        public $username;
        public $email;
        public $password;
        public $premiumData;

        // constructor
        function __construct($username = "", $email = "", $password = "") {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->premiumData = null; //init
        }
    }