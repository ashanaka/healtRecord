<?php

    class User {
        // Properties
        public $name;
        public $email;
        public $password;

        // Constructor
        function __construct() {
            $this->name = $_POST['user_name'];
            $this->email = $_POST['user_email'];
            $this->password = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);
        }

        // Insert the newly  created user into the database
        public function insert_user() {
            require("../db/connection.php");
            $query = "INSERT INTO users (user_name, user_email, user_pwd) VALUES ('$this->name', '$this->email', '$this->password')";

            if( $conn){
                mysqli_query($conn, $query);
                header("Location: ../index.php");
            }else{
                echo "Error registering new user!";
            }
        }
    }
?>