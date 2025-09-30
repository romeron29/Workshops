<?php
    class UserModel{
        private $db;
        public function __construct(PDO $db){
            $this->db = $db;
        }
        function createUser(array $data){
            $userName = $data["username"];
            $lastname = $data["lastname"];
            $email = $data["email"];
            $phoneNumber = $data["phone_number"];
            $stmt = $this->db->prepare("insert into users (username, lastname, email, phone_number) values (:username, :lastname, :email, :phone_number);");
            return $stmt->execute(array(":username"=> $userName,":lastname"=> $lastname,":email"=> $email,  "phone_number"=> $phoneNumber));
        }

        public function getUser(array $data){
        }
        public function updateUser(array $data){
        }
        public function deleteUser(array $data){
        }
    }

?>