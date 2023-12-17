<?php  

    $server = "localhost";
    $db = "ATIWEB";
    $user = "root";
    $pass = "";

    $con = new mysqli($server,$user,$pass,$db);

    if($con->connect_error){
        die("Connection Error");
    }

?>