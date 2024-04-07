<?php
require "config.php";

class DatabaseController {

    function connect(){
        $c = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
        if (mysqli_connect_error()) return false;
        return $c;
    }    
}


?>