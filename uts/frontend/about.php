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
                <a href="home.php">home</a><span>/ about</span>
            </div>
            <div class="about">
                <div class="row">
                    <div class="img-box">
                        <img src="img/ll.jpg" alt="">
                    </div>
                    <div class="detail">
                        <h1>Aci Store Khitchentolls</h1>
                        <p>Perusahaan yang berdiri sejak tahun 1980, Disini menyediakan berbagai kebutuhan perlengkapan dapur anda. Perusahaan ini dipercaya banyak orang dengan kualitas, bentuk, dan harga yang terjangkau.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-container">
                <div class="title">
                    <h1>Pendiri</h1>
                </div>
                    <div class="container">
                    <div class="testimonial-item active">
                        <img src="img/ceo.jpg" alt="">
                        <h1>Jhone Smith</h1>
                        <p>Pendiri dan owner perusahaan aci store dari tahun 1980 sampe sekarang</p>
                </div>
            </div>


     <?php include 'asset/footer.php';?>   
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
   <script src="js/script.js"></script>
   <?php include 'asset/alert.php'; ?>
</body>
</html>