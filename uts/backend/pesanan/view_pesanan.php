<?php 
// berisi jalur root url
require_once '../../config.php';
require_once '../../db.php';
// include header
include_once '../template/header.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM `order` WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

                        <h1 class="mt-4"> View Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="pesanan.php">pesanan</a></li>
                            <li class="breadcrumb-item active">view Pesanan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                View Pesanan
                            </div>

                        <!-- Menampilkan data produk dalam bentuk tabel -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?=$row['id']?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Order</td>
                                    <td><?=$row['order_number']?></td>
                                </tr>
                                <tr>
                                    <td>QTY</td>
                                    <td><?=$row['qty']?></td>
                                </tr>
                                <tr>
                                    <td>Total Harga</td>
                                    <td><?=$row['total_price']?></td>
                                </tr>
                                <tr>
                                    <td>ID Pembeli</td>
                                    <td><?=$row['customer_id']?></td>
                                </tr>
                                <tr>
                                    <td>ID Produk</td>
                                    <td><?=$row['product_id']?></td>
                                </tr>
                            </tbody>
                        </table>

                        <?php 
include_once '../template/footer.php';
?>
