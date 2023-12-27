<?php
    include("config.php");
    $con = new mysqli(SERVER, USERNAME, PASSWORD, DB);
    if($con->connect_error){
        echo "failed";
    }else{
        echo "success";
    }
?>
