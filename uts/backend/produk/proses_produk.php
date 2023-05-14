<?php 
// berisi jalur root url
require_once '../../config.php';
// Include file koneksi database
require_once '../../db.php';

// Ambil data dari form
$_name = $_POST['name'];
$_harga = $_POST['harga'];
$_stock = $_POST['stok'];
$_min_stock = $_POST['min_stok'];
$_jenis = $_POST['jenis'];
$_restock = $_POST['restock'];
$_proses = $_POST['proses'];


// Simpan data ke dalam array
$ar_data[]=$_name;
$ar_data[]=1.2 * $_harga;
$ar_data[]=$_stock;
$ar_data[]=$_min_stock;
$ar_data[]=$_jenis;
$ar_data[]=$_restock;

print_r($_POST);

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO `product` (`name`, sell_price, stock, min_stock, product_type_id, restock_id) VALUES (?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE `product` SET `name`=? , sell_price=?, stock=?, min_stock=?, product_type_id=?, restock_id=?  WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:produk.php');
?>
