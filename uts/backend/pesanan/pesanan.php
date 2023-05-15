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
    $sql = "SELECT `order`.*, 
    `customer`.`name` AS `customer`,
    `product`.`name` AS `product` 
    FROM `order`
    LEFT JOIN `customer` ON `order`.customer_id = customer.id
    LEFT JOIN `product` ON `order`.product_id = product.id";
    // execute the query
    $rs = $dbh->query($sql);
?>

                        <h1 class="mt-4"> Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Pesanan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pesanan
                            </div>

                            
                            <div class="card-body">
                                <a class="btn btn-success" href="form_pesanan.php" role="button">Create Pesanan</a>
                                <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>date</th>
                                        <th>QTY</th>
                                        <th>Total Harga</th>
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
                                            <td><?=$row['customer']?></td>
                                            <td><?=$row['product']?></td>
                                            <td><?=$row['date']?></td>
                                            <td><?=$row['qty']?></td>
                                            <td><?=$row['total_price']?></td>

                                            <td>
                                                <!-- buttons to view, edit, and delete a product -->
                                                <a class="btn btn-primary" href="view_pesanan.php?id=<?=$row['id']?>">View</a>
                                                <a class="btn btn-primary" href="form_pesanan.php?id=<?=$row['id']?>">Edit</a>
                                                <a class="btn btn-primary" href="delete_pesanan.php?id=<?=$row['id']?>"
                                                onclick="if(!confirm('Anda Yakin Hapus Data Pesanan <?=$row['id']?>?')) {return false}"
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
