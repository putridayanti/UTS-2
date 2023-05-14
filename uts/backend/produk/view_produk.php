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
    $sql = "SELECT * FROM product WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

                        <h1 class="mt-4"> View Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="produk.php">produk</a></li>
                            <li class="breadcrumb-item active">view Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                View Produk
                            </div>

                        <!-- Menampilkan data produk dalam bentuk tabel -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?=$row['id']?></td>
                                </tr>
                                <tr>
                                    <td>SKU</td>
                                    <td><?=$row['sku']?></td>
                                </tr>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td><?=$row['name']?></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td>
                                    <td><?=$row['purchase_price']?></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td>
                                    <td><?=$row['sell_price']?></td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td><?=$row['stock']?></td>
                                </tr>
                                <tr>
                                    <td>Minimum Stok</td>
                                    <td><?=$row['min_stock']?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Produk</td>
                                    <td><?=$row['product_type_id']?></td>
                                </tr>
                                <tr>
                                    <td>Restock</td>
                                    <td><?=$row['restock_id']?></td>
                                </tr>
                            </tbody>
                        </table>

                        <?php 
include_once '../template/footer.php';
?>

