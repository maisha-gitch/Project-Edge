<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Product_Id = $_POST['product_id'];
    $Product_Name = $_POST['name'];
    $Description = $_POST['description'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];

    $sql = "INSERT INTO products (Product_ID, Product_Name, Description, Price, Quantity) VALUES ('$Product_ID', '$Product_Name', '$Description', '$Price', '$Quantity')";
    if($connection->query($sql)==TRUE){
        header("Location: product-list.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Create product</h1>
    <form action="create-product.php" method="POST" class="w-1/2 mx-auto py-4 space-y-4">
        <input name="product_id" type="number" placeholder="Enter product Id" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="name" type="text" placeholder="Enter product Name" class="w-full border border-blue-500 p-2 rounded-md" > <br>
        <input name="description" type="" placeholder="Enter Description" class="w-full border border-blue-500 p-2 rounded-md"> <br>
        <input name="price" type="number" placeholder="Enter Product Price" class="w-full border border-blue-500 p-2 rounded-md">
        <input name="quantity" type="number" placeholder="Enter Product Quantity" class="w-full border border-blue-500 p-2 rounded-md">
        <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">submit</button>
    </form>
    
</body>
</html>