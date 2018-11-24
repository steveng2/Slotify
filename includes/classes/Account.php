<?php
    class Account {
        
        private $errorArray;
        
        public function __construct() {
            $this->errorArray = array();
        }
        
        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
            
            
            if(empty($this->errorArray) == true){
                //Insert into db
                return true;
            }
            else {
                return false;
            }
        }
        
        private function validateUsername($un) {
          // un === username 
           if(strlen($un) > 25 || strlen($un) < 5) {
               array_push($this->errorArray, "Your username must be between 5 and 25 characters");
               return;
           }
           //TODO: check if user name exists 
            
        }
        private function validateFirstName($fn) {
          //fn === firstname
                if(strlen($fn) > 25 || strlen($fn) < 5) {
               array_push($this->errorArray, "Your username must be between 5 and 25 characters");
               return;
            
            }
        }
        private function validateLastName($ln) {
          //ln === lastname
            
              if(strlen($ln) > 25 || strlen($ln) < 5) {
               array_push($this->errorArray, "Your username must be between 5 and 25 characters");
               return;
           }
            
        }
        private function validateEmails($em, $em2) {
          //em === emails
            if($em != $em2) {
                array_push($this->errorArray, "Your email don't match");
                return;
            }
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) { 
                array_push($this->errorArray, "Email is invalid");
                return;
            }
            //TODO: Check that user name hasn't already been used.
            
        }
            

        private function validatePasswords($pw, $pw2) {
         //pw === passwords
        if($pw != $pw2){
            array_push($this->errorArray, "Password don't match");
            return;
        }
        if(preg_match('/[^A-Za-z0-9]/', $pw)){
             array_push($this->errorArray, "Your password can only contain letters and numbers");
                return;
        }
         if(strlen($pw) > 30 || strlen($pw) < 5) {
               array_push($this->errorArray, "Your password must be between 5 and 30 characters");
               return;
            }
        }
    }
?>