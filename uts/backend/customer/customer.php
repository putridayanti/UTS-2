<?php 
// berisi jalur root url
require_once '../../config.php';
    // include database connection
    require_once '../../db.php';
    // include header
include_once '../template/header.php';
?>

<?php 
    // select all data from Produk "produk"
    $sql = "SELECT * FROM customer";
    // execute the query
    $rs = $dbh->query($sql);
?>

                        <h1 class="mt-4">  Pembeli</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Pembeli</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                 Pembeli
                            </div>

                            
                            <div class="card-body">
                                <a class="btn btn-success" href="form_customer.php" role="button">Create Produk</a>
                                <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nomor Handphone</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                         <?php 
                                            // initialize counter
                                            $nomor = 1;
                                            // loop through the result set
                                            foreach($rs as $row) {
                                        ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$row['name']?></td>
                                            <td><?=$row['gender']?></td>
                                            <td><?=$row['phone']?></td>
                                            <td><?=$row['email']?></td>
                                            <td><?=$row['address']?></td>

                                            <td>
                                                <!-- buttons to view, edit, and delete a product -->
                                                <a class="btn btn-primary" href="view_customer.php?id=<?=$row['id']?>">View</a>
                                                <a class="btn btn-primary" href="form_customer.php?id=<?=$row['id']?>">Edit</a>
                                                <a class="btn btn-primary" href="delete_customer.php?id=<?=$row['id']?>"
                                                onclick="if(!confirm('Anda Yakin Hapus Data customer <?=$row['name']?>?')) {return false}"
                                                >Delete</a>
                                            </td>
                                        </tr>
                                        <?php 
                                            // increment counter
                                            $nomor++;   
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
<?php 
include_once '../template/footer.php';
?>
