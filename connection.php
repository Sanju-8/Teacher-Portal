<?php
    if (!file_exists('config.php')) {
        die('Error: config.php file not found. Please create the config.php file.');
    }else{
        include("config.php");
        $con = new mysqli(SERVER, USERNAME, PASSWORD, DB);
    }
?>
