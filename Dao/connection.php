<?php
    $hostname="localhost";
    $user="root";
    $password="";
    $database="trvl";
    
    $conn=new mysqli($hostname,$user,$password,$database);

    if($conn->connect_errno){
        echo "Connection failed: (" .$conn->connect_errno . ") " . $conexao->connect_error;
    }

?>