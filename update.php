<?php
include 'db.php';

if(ISSET($_GET['Id'])){
    $Id = $_GET['Id'];

    $sql = "SELECT * FROM products WHERE Id=$Id";

    $result = $connection->query($sql);
    
    $maisha= $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Id=$_POST['Id'];
        $Product_ID=$_POST['product_id'];
        $Product_Name=$_POST['name'];
        $Description=$_POST['description'];
        $Price=$_POST['price'];
        $Quantity=$_POST['quantity'];

        $sql="UPDATE products SET Product_ID='$Product_ID', Product_Name= '$Product_Name', Description='$Description', Price='$Price', Quantity='$Quantity' WHERE Id = $Id";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: product-list.php");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Update student</h1>
    <form action="update.php" method="POST" class="w-1/2 mx-auto py-4 space-y-4">
    <input name="Id" type="hidden" value="<?= $maisha['Id']; ?>" placeholder="Enter product id" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="product_id" type="number" value="<?= $maisha['Product_ID']; ?>" placeholder="Enter product Id" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="name" type="text" value="<?= $maisha['Product_Name']; ?>" placeholder="Enter product Name" class="w-full border border-blue-500 p-2 rounded-md" > <br>
        <input name="description" type="" value="<?= $maisha['Description']; ?>" placeholder="Description" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="price" value="<?= $maisha['Price']; ?>" type="number placeholder="Enter price" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="quantity" value="<?= $maisha['Quantity']; ?>" type="number placeholder="Enter quantity" class="w-full border border-blue-500 p-2 rounded-md">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">submit</button>
    </form>
    
</body>
</html>