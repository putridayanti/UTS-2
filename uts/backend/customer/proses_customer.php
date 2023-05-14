<?php 
// berisi jalur root url
require_once '../../config.php';
// Include file koneksi database
require_once '../../db.php';

// Ambil data dari form
$_nama = $_POST['nama'];
$_jk = $_POST['jk'];
$_telp = $_POST['telp'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_card = $_POST['card'];
$_proses = $_POST['proses'];


// Simpan data ke dalam array
$ar_data[]=$_nama;
$ar_data[]=$_jk;
$ar_data[]=$_telp;
$ar_data[]=$_email;
$ar_data[]=$_alamat;
$ar_data[]=$_card;

print_r($_POST);

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO customer (`name`, gender, phone, email, `address`, card_id) VALUES (?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE customer SET `name`=? , gender=?, phone=?, email=?, `address`=?, card_id=?  WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:customer.php');
?>
