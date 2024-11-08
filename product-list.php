<?php
include "db.php";
$sql= "SELECT* FROM products ";
$result = $connection->query($sql);
$products =$result->fetch_all(MYSQLI_ASSOC);  //associative array

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        td, th{
            border: 1px solid black;
            padding: 12px ;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-4xl my-5"> Product List</h1>
    <table class="mx-auto border p-5">
        <thead class="py-2 bg-blue-500 text-white font-medium">
            <tr >
            <!-- <th >Id</th> -->
                <th >Product ID</th>
                <th >Product Name</th>
                <th >Description</th>
                <th >Price</th>
                <th >Quantity</th>
                <th >U&D</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $maisha): ?>
                <tr>
                
                    <td><?= $maisha['Product_ID']; ?></td>
                    <td><?= $maisha['Product_Name']; ?></td>
                    <td><?= $maisha['Description']; ?></td>
                    <td><?= $maisha['Price']; ?></td>
                    <td><?= $maisha['Quantity']; ?></td>
                    <td>
                        <a href="update.php?Id=<?= $maisha['Id']; ?>"><i class="fa-solid fa-pen-to-square border p-1.5 bg-blue-500 rounded-md text-white"></i></a>
                        <a href="delete.php?Id=<?= $maisha['Id']; ?>"><i class="fa-solid fa-trash border p-1.5 bg-red-500 rounded-md text-white"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>


