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
        


<section class="shop" style="background-image:url(img/bg.jpg) ;">
        <div class="title" style="background-color:#87a243 ;">
            <h1>trending produk</h1>
        </div>
        <div class="row">
            <img src="" alt="">
            <div class="row-detail">
                <img src="" alt="">
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="img/ct.jpg" alt="" >
                <p>Cutting Board</p>
                <p>Rp 80.000,-00</p>
                <a href="detail_A.php" class="btn">Detail</a>
                <div class="button">
                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                    <a href="view_page.php?pid=<?php echo $fetch_product['id'];?>" class="bx bxs-show"></a>
                </div>
            </div>
            <div class="box">
                <img src="img/mx.jpg" alt="">
                <p>Mixer</p>
                <p>Rp 1.500.000,-00</p>
                <a href="detail_B.php" class="btn">Detail</a>
                <div class="button">
                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                    <a href="view_page.php?pid=<?php echo $fetch_product['id'];?>" class="bx bxs-show"></a>
                </div>
            </div>
            <div class="box">
                <img src="img/bp.jpg" alt="">
                <p>Black Pan</p>
                <p> 2000.000,-00</p>
                <a href="detail_C.php" class="btn">Detail</a>
                <div class="button">
                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                    <a href="view_page.php?pid=<?php echo $fetch_product['id'];?>" class="bx bxs-show"></a>
                </div>
            </div>
            <div class="box">
                <img src="img/micro.jpg" alt="">
                <a href="detail_D.php" class="btn">Detail</a>
                <p>Microwave</p>
                <p>Rp 3.800.000,-00</p>
                <div class="button">
                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                    <a href="view_page.php?pid=<?php echo $fetch_product['id'];?>" class="bx bxs-show"></a>
                </div>
            </div>
            <div class="box">
                <img src="img/rice.jpg" alt="">
                <a href="detail_E.php" class="btn">Detail</a>
                <p>Rice Cooker</p>
                <p>Rp 900.000,-00</p>
                <div class="button">
                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                    <a href="view_page.php?pid=<?php echo $fetch_product['id'];?>" class="bx bxs-show"></a>
                </div>
            </div>
            <div class="box">
                <img src="img/Baking Tools/pt.webp" alt="">
                <p>Penyaring Tepung</p>
                <p>Rp 100.000,-00</p>
                <a href="detail_F.php" class="btn">Detail</a>
                <div class="button">
                    <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                    <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                    <a href="view_page.php?pid=<?php echo $fetch_product['id'];?>" class="bx bxs-show"></a>
                </div>
            </div>
        </div>
     </section>

     <?php include 'asset/footer.php';?>   
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
   <script src="js/script.js"></script>
   <?php include 'asset/alert.php'; ?>
</body>
</html>   
  