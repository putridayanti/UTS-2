<?php 
// berisi jalur root url
require_once '../../config.php';

// Memanggil file dbkoneksi.php yang berisi koneksi ke database
require_once '../../db.php';

// Mendapatkan nilai dari parameter 'id' pada URL
$_id = $_GET['id'];

// Query DELETE untuk menghapus data pada tabel 'produk' dengan kondisi 'id' = $_id
$sql = "DELETE FROM `order` WHERE id = ?";

// Menyiapkan statement SQL
$st = $dbh->prepare($sql);

// Menjalankan statement SQL dengan mengirimkan nilai parameter $_id
$st->execute([$_id]);

// Mengarahkan halaman ke list_produk.php setelah data berhasil dihapus
header('location:pesanan.php');
?>
