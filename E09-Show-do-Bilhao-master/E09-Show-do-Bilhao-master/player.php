<?php 
    final class Player{
        public $name;
        public $password;
        public $email;
        public $login;

        public function __construct($name, $password, $email, $login){
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
            $this->login = $login;
        }
    }
?>