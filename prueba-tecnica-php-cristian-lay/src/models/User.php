<?php
    class User {
        public $name;
        public $email;
        public $password;

        public function __construct(string $name = '', string $email = '', string $password = '') {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        /** Obtiene el nombre del usuario. **/
        public function getName(){
            return $this->name;
        }
        
        /** Inserta el nombre del usuario. **/
        public function setName(string $newName){
            $this->name = $newName;
        }

        /** Obtiene el correo electrónico usuario. **/
        public function getEmail(){
            return $this->email;
        }

        /** Inserta el correo electrónico usuario. **/
        public function setEmail(string $newEmail){
            $this->email = $newEmail;
        }

        /** Obtiene la contraseña del usuario. **/
        public function getPassword(){
            return $this->password;
        }       

        /** Inserta la contraseña del usuario. **/
        public function setPassword(string $newPassword){
            $this->password = $newPassword;
        }
    }
?>