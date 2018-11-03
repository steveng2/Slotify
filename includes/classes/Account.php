<?php
    class Account {
        public function __construct() {
            
        }
        
        public function register() {
            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $email2);
            $this->validatePasswords($password, $password2);
        }
        
        private function validateUsername($un) {
          // un === username 
            echo "username function name called";
        }
        private function validateFirstName($fn) {
          //fn === firstname
        }
        private function validateLastName($ln) {
          //ln === lastname
        }
        private function validateEmails($em, $em2) {
          //em === emails
        }

        private function validatePasswords($pw, $pw2) {
         //pw === passwords
        }
        
        
    }
?>