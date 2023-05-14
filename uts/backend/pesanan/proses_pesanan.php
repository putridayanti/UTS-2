<?php 
// berisi jalur root url
require_once '../../config.php';
// Include file koneksi database
require_once '../../db.php';

// Ambil data dari form
$_date = $_POST['date'];
$_qty = $_POST['qty'];
$_total_price = $_POST['total_price'];
$_customer = $_POST['customer'];
$_product = $_POST['product'];
$_proses = $_POST['proses'];


// Simpan data ke dalam array

$ar_data[]=$_date;
$ar_data[]=$_qty;
$ar_data[]=$_total_price;
$ar_data[]=$_customer;
$ar_data[]=$_product;


print_r($_POST);

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO `order` (date, qty, total_price, customer_id, product_id) VALUES (?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE  `order` SET date=? , qty=?, total_price=?, customer_id=?, product_id=?  WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:pesanan.php');
?>
