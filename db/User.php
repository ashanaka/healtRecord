<?php

    class User {
        // Properties
        public $name;
        public $email;
        public $password;

        // Insert the newly  created user into the database
        public function insert_user() {

            require_once("../db/connection.php");

            $this->name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
            $this->email = filter_var($_POST['user_email'], FILTER_SANITIZE_STRING);
            $this->password = filter_var($_POST['user_pwd'], FILTER_SANITIZE_STRING);

            $pwd = sha1( $this->password );

            $sql = "INSERT INTO users (user_name, user_email, user_pwd ) VALUES ('".$this->name."','".$this->email."', '".$pwd."')";

            if (mysqli_query($conn, $sql)) {
                header("Location: ../index.php");
            }

        }

        // login user
        public function login_user(){

            require_once("../db/connection.php");

            $user_email = filter_var($_POST['user_email'], FILTER_SANITIZE_STRING);
            $pwd = filter_var($_POST['user_pwd'], FILTER_SANITIZE_STRING);
            /* Encrypt password with sha1*/
            $pwd = sha1( $pwd );

            $sql = "SELECT user_name FROM users WHERE user_email = '".$user_email."' AND user_pwd ='".$pwd."'";

            if($result=mysqli_query($conn,$sql))
            {
                while($row = mysqli_fetch_assoc($result)) {
                    $user_id = $row['user_name'];
                    session_start();
                    $_SESSION['user_id'] = $user_id;
                    header("Location: ../index.php");
                }
            }
        }

        // logout user
        public function logout_user(){
            session_start();
            session_destroy();
            header("Location: ../index.php");
        }
    }
?>