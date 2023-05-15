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
    <title>Document</title>
</head>
<body>
   <?php include 'asset/header.php';?>
   <div class="main">
        <div class="title2">
            <a href="index.php">home</a><span>/ contact</span>
        </div>
        
     <div class="form-container">
        <form  method="post">
            <div class="title">
                <h1>leave a message</h1>
            </div>
            <div class="input-field">
                <p>your names </p>
                <input type="text" name="name">
            </div>
            <div class="input-field">
                <p>your email </p>
                <input type="email" name="email">
            </div>
            <div class="input-field">
                <p>your number </p>
                <input type="text" name="number">
            </div>
            <div class="input-field">
                <p>your message </p>
                <textarea name="message"></textarea>
            </div>
            <button type="submit" name="submit.btn" class="btn">send message</button>
        </form>
     </div>
     <div class="address">
            <div class="title">
                <h1>contact detail</h1>
                <p>Bisa juga menghubungi melalui</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                    <div>
                        <h4>Address</h4>
                        <p>Depok, Jakarta Selatan</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-phone-call"></i>
                    <div>
                        <h4>phone number</h4>
                        <p>0812345677</p>
                    </div>
                </div>
                <div class="box">
                    <i class="bx bxs-map-pin"></i>
                    <div>
                        <h4>email</h4>
                        <p>putri@student.nurulfikri.ac.id</p>
                    </div>
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