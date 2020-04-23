<?php

    require_once("../db/User.php");

    if(isset($_POST['regNewUser'])){
        $user = new User();
        $user->insert_user();
    }


?>