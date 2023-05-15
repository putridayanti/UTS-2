<?php
include "asset/connection.php";
?>
<style type="text/css">
    <?php include 'css/style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>about</title>
</head>
<body>
   <?php include 'asset/header.php';?>
   <div class="main">
            <div class="title2">
                <a href="view_products.php">produk</a><span>/ detail</span>
            </div>
            <div class="about">
                <div class="row">
                    <div class="img-box">
                        <img src="img/rice.jpg" alt="">
                    </div>
                    <div class="detail">
                        <h1>Rice Cooker</h1>
                        <p>Memasak nasi dengan cepat dan aman, dilengkapi dengan lapisan anti lengket, suhu ganda atas dan bawah, kapasitas besar 2L, bisa juga digunakan untuk mengukus.</p>
                    </div>
                </div>
            </div>

            </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
   <script src="js/script.js"></script>
   <?php include 'asset/alert.php'; ?>
</body>
</html>         