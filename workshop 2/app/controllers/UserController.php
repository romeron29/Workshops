<?php
    require_once('../app/models/UserModel.php');

    class UserController{
        private $db; 
        private $model;

        public function __construct(PDO $db){
            $this->db = $db;
        }
        public function index(){

        }
        public function createUser(){
            if(isset($_POST["username"])){
                $username = trim($_POST["username"]);
                $lastname = trim($_POST["lastname"]);
                $email = trim($_POST["email"]);
                $phone_number = trim($_POST["phone_number"]);
                $data = ['username'=>$username,'lastname'=>$lastname,'email'=>$email,'phone_number'=>$phone_number];
                $this->model = new UserModel($this->db);
                if($this->model->createUser($data) == true){
                    require_once '../../../sec_workshop/workshop/public/views/success.php';
                }else require_once '../../../sec_workshop/workshop/public/views/Error.php';
                
            }
        }
    }


?>