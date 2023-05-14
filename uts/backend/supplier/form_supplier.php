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
    // ambil data supplier berdasarkan id
    $sql = "SELECT * FROM supplier WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
}
?>


<h1 class="mt-4"> form supplier</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="supplier.php">supplier</a></li>
    <li class="breadcrumb-item active">form supplier</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        form supplier
    </div>
    <div class="card-body">

        <form method="POST" action="proses_supplier.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama supplier</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="name" name="name" type="text" class="form-control" value="<?php if (isset($row['name'])) echo $row['name']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Nomor Handphone</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="phone" name="phone" type="text" class="form-control" value="<?php if (isset($row['phone'])) echo $row['phone']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="address" name="address" type="text" class="form-control" value="<?php if (isset($row['address'])) echo $row['address']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Nama Kontak</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="contact_name" name="contact_name" type="text" class="form-control" value="<?php if (isset($row['contact_name'])) echo $row['contact_name']; ?>">
                    </div>
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