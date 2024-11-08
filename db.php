<?php
$Servername= "localhost";
$username= "root";
$password = "";
$dbname= "inventory_management";
$connection= new mysqli($Servername, $username,$password,$dbname);

if($connection->connect_error){
    echo "Database Connection Failed !!";
}else{
    echo "Database Connection Successful!!";
}

?>