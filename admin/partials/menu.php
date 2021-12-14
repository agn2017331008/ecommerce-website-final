<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Ecommerce Website</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="manage-category.php">Category</a></li>
                    <li><a href="manage-product.php">Products</a></li>
                    <li><a href="manage-order.php">Orders </a></li>
                    <li><a href="manage-admin.php">Manage Admin</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->