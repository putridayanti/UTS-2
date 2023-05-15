<?php
// berisi jalur root url
require_once '../../config.php';
require_once '../../db.php';
// include header
include_once '../template/header.php';
?>

<?php
// cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
$_id = isset($_GET['id']) ? $_GET['id'] : null;
if (!empty($_id)) {
    // ambil data produk berdasarkan id
    $sql = "SELECT * FROM `order` WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
}
?>


<h1 class="mt-4"> form pesanan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="pesanan.php">pesanan</a></li>
    <li class="breadcrumb-item active">form pesanan</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        form pesanan
    </div>

    <div class="card-body">

            <form method="POST" action="proses_pesanan.php">
            
                </div>
                <div class="form-group row">
                    <label for="date" class="col-4 col-form-label">tanggal pesanan</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="date" name="date" type="datetime-local" class="form-control" value="<?php if (isset($row['date'])) echo $row['date']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="total_price" class="col-4 col-form-label">QTY</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="qty" name="qty" type="text" class="form-control" value="<?php if (isset($row['qty'])) echo $row['qty']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-4 col-form-label">Total total_price</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="total_price" name="total_price" type="text" class="form-control" value="<?php if (isset($row['total_price'])) echo $row['total_price']; ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Pembeli</label>
                    <div class="col-8">
                        <?php
                        $sqlcustomer = "SELECT * FROM customer";
                        $rscustomer = $dbh->query($sqlcustomer);
                        ?>
                        <select id="customer" name="customer" class="form-control" required>
                            <option value=""></option>
                            <?php
                            foreach ($rscustomer as $rowcustomer) {
                                if (isset($row['customer_id'])){
                                    if ($row['customer_id'] == $rowcustomer['id']) {
                                        $checked = true;
                                    }
                                }
                            ?>
                                <option value="<?= $rowcustomer['id'] ?>" <?= isset($checked)? "selected": "" ?> ><?= $rowcustomer['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="restock" class="col-4 col-form-label">Produk</label>
                    <div class="col-8">
                        <?php
                        $sqlproduct = "SELECT * FROM `product`";
                        $rsproduct = $dbh->query($sqlproduct);
                        ?>
                        <select id="product" name="product" class="form-control" required>
                            <option value=""></option>
                            <?php
                            foreach ($rsproduct as $rowproduct) {
                                if (isset($row['product_id'])){
                                    if ($row['product_id'] == $rowproduct ['id']) {
                                        $checked = true;
                                    }
                                }
                            ?>
                                <option value="<?= $rowproduct['id'] ?>" <?= isset($checked)? "selected": "" ?> ><?= $rowproduct['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <?php
                        $button = (empty($_id)) ? "Simpan" : "Update";
                        ?>
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                        <input type="hidden" name="id" value="<?= $_id ?>" />
                    </div>
                </div>
            </form>
        </div>

<?php
include_once '../template/footer.php';
?>