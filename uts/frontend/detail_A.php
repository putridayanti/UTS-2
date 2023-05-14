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
                <a href="view_products.php">Produk</a><span>/ Detail</span>
            </div>
            <div class="about">
                <div class="row">
                    <div class="img-box">
                        <img src="img/ct.jpg" alt="">
                    </div>
                    <div class="detail">
                        <h1>Cutting Board</h1>
                        <p>Talenan kayu premium terbuat dari kayu pinus memiliki serat kayu yang lurus dan halus. Selain itu lebih awet dalam pemakaian jangka lama. Talenan ini dapat dibungkus plastik dengan vakum sehingga lebih bersih.</p>
                    </div>
                </div>
            </div>
            
     <?php include 'asset/footer.php';?> 
            </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
   <script src="js/script.js"></script>
   <?php include 'asset/alert.php'; ?>
</body>
</html>         