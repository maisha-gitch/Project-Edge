<?php
include 'db.php';

if(ISSET($_GET['Id'])){
    $Id = $_GET['Id'];

    $sql = "DELETE FROM products WHERE Id=$Id";

    if($connection->query($sql)==TRUE)
        {
            header("Location: product-list.php");
        }
}
?>