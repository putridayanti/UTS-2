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
    $sql = "SELECT * FROM product WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
}
?>


<h1 class="mt-4"> form Produk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="produk.php">produk</a></li>
    <li class="breadcrumb-item active">form Produk</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        form Produk
    </div>
    <div class="card-body">

        <form method="POST" action="proses_produk.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="name" name="name" type="text" class="form-control" value="<?php if (isset($row['name'])) echo $row['name']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Harga Jual</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="harga" name="harga" type="text" class="form-control" value="<?php if (isset($row['sell_price'])) echo $row['sell_price']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">stok</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="stok" name="stok" type="text" class="form-control" value="<?php if (isset($row['stock'])) echo $row['stock']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Min stok</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="min_stok" name="min_stok" type="text" class="form-control" value="<?php if (isset($row['min_stock'])) echo $row['min_stock']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                <div class="col-8">
                    <?php
                    $sqljenis = "SELECT * FROM product_type";
                    $rsjenis = $dbh->query($sqljenis);
                    ?>
                    <select id="jenis" name="jenis" class="form-control" required>
                        <option value=""></option>
                        <?php
                        foreach ($rsjenis as $rowjenis) {
                            if (isset($row['product_type_id'])){
                                if ($row['product_type_id'] == $rowjenis['id']) {
                                    $checked = true;
                                }
                            }
                        ?>
                            <option value="<?= $rowjenis['id'] ?>" <?= isset($checked)? "selected": "" ?> ><?= $rowjenis['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="restock" class="col-4 col-form-label">Restock</label>
                <div class="col-8">
                    <?php
                    $sqlrestock = "SELECT * FROM restock";
                    $rsrestock = $dbh->query($sqlrestock);
                    ?>
                    <select id="restock" name="restock" class="form-control" required>
                        <option value=""></option>
                        <?php
                        foreach ($rsrestock as $rowrestock) {
                            if (isset($row['restock_id'])){
                                if ($row['restock_id'] == $rowrestock ['id']) {
                                    $checked = true;
                                }
                            }
                        ?>
                            <option value="<?= $rowrestock['id'] ?>" <?= isset($checked)? "selected": "" ?> ><?= $rowrestock['restock_number'] ?></option>
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
</div>

<?php
include_once '../template/footer.php';
?>