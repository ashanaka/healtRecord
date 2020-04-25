<?php

    require_once("../db/User.php");

    if(isset($_POST['regNewUser'])){
        $user = new User();
        $user->insert_user();
    }elseif(isset($_POST['loginUser'])){
        $user = new User();
        $user->login_user();
    }else{
        echo "another";
    }


?>