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
$sql = "SELECT * FROM `card`";
// execute the query
$rs = $dbh->query($sql);
?>

<h1 class="mt-4"> card</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
    <li class="breadcrumb-item active"> card</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        card
    </div>

    
    <div class="card-body">
        <a class="btn btn-success" href="form_card.php" role="button">Create card</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>Member Fee</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // initialize counter
                $nomor = 1;
                // loop through the result set
                foreach ($rs as $row) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['discount'] ?></td>
                        <td><?= $row['member_fee'] ?></td>
                        

                        <td>
                            <!-- buttons to view, edit, and delete a product -->
                            <a class="btn btn-primary" href="view_card.php?id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-primary" href="form_card.php?id=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-primary" href="delete_card.php?id=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data card <?= $row['name'] ?>?')) {return false}">Delete</a>
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