<?php
    include 'src/models/User.php';

    class UserRepository{
        public $userList = array();

        public function __construct(){}

        /** Añade un nuevo usuario al listado. **/
        public function addUser(User $user){
            array_push($this->userList, $user);
        }

        /** Obtiene todos los usuarios. **/
        public function getUsers(){
            return $this->userList;
        }

        /** Obtiene un usuario por su correo electrónico. **/
        public function deleteUser(User $user){
            $index = array_search($user, $this->userList);
            unset($this->userList[$index]);
        }

        /** Obtiene un usuario por su correo electrónico. **/
        public function deleteByEmail(string $email){
            $index = array_search($email, array_column($this->userList, 'email'));
            unset($this->userList[$index]);
        }

        /** Actualiza un usuario, según su posición **/
         /* @user: Objeto usuario. */
         /* @index: Nombre del usuario. */
        public function updateUser(User $user, $index){
            $this->userList[$index] = $user;
        }

        /** Obtiene un usuario por su correo electrónico. **/
         /* @email: E-mail del usuario. */
        public function findUserByEmail(string $email){
            foreach($this->userList as $user){
                if($user->getEmail() == $email){
                    return $user;
                }
            }
        }

        /** Obtiene un usuario por su nombre. **/
          /* @name: Nombre del usuario. */
        public function findUserByName(string $name){
            foreach($this->userList as $user){
                if($user->getName() == $name){
                    return $user;
                }
            }
        }
    }
?>