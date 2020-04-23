<?php 

    $hostname = "localhost";
    $dbname = "medicalReport";
    $username = "root";

    $conn = mysqli_connect($hostname, $username, '', $dbname);

    if( $conn){
        // pass;
    }else{
        echo "Error connecting database!";
    }

?>