<?php
    class Person {
        private $name;
        private $email;
        public static $ageLimit = 40;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;

            echo __CLASS__ . ' created<br>';
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email;
        }
    }

    echo Person::$ageLimit;

    // $person1 = new Person('John Doe', 'jdoe@gmail.com');

    // $person1->setName('Mark');
    // echo $person1->getName();
    // echo $person1->getEmail();

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            echo $this->balance . '<br>';
        }
    }

    // $customer1 = new Customer('John Doe', 'jj@j.com', 300);
    // $customer1->getBalance();
