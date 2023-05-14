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
    $sql = "SELECT * FROM product_type WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

                        <h1 class="mt-4"> View Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="jenis_produk.php">Jenis Produk</a></li>
                            <li class="breadcrumb-item active">view Jenis Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                View Jenis Produk
                            </div>

                        <!-- Menampilkan data produk dalam bentuk tabel -->
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td><?=$row['id']?></td>
                                </tr>
                                <tr>
                                    <td>Nama Jenis Produk</td>
                                    <td><?=$row['name']?></td>
                                </tr>
                            </tbody>
                        </table>

                        <?php 
include_once '../template/footer.php';
?>