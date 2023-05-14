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
    // ambil data pembeli berdasarkan id
    $sql = "SELECT * FROM customer WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
}
?>


<h1 class="mt-4"> form pembeli</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="customer.php">pembeli</a></li>
    <li class="breadcrumb-item active">form pembeli</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        form pembeli
    </div>
    <div class="card-body">

        <form method="POST" action="proses_customer.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama pembeli</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="nama" name="nama" type="text" class="form-control" value="<?php if (isset($row['name'])) echo $row['name']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="jk" name="jk" type="text" class="form-control" value="<?php if (isset($row['gender'])) echo $row['gender']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-4 col-form-label">Nomor Handphone</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="telp" name="telp" type="text" class="form-control" value="<?php if (isset($row['phone'])) echo $row['phone']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="email" name="email" type="email" class="form-control" value="<?php if (isset($row['email'])) echo $row['email']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="min_stok" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="alamat" name="alamat" type="text" class="form-control" value="<?php if (isset($row['address'])) echo $row['address']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-4 col-form-label">ID Kartu</label>
                <div class="col-8">
                    <?php
                    $sqlcard = "SELECT * FROM `card`";
                    $rscard = $dbh->query($sqlcard);
                    ?>
                    <select id="card" name="card" class="form-control" required>
                        <option value=""></option>
                        <?php
                        foreach ($rscard as $rowcard) {
                            if (isset($row['card_id'])){
                                if ($row['card_id'] == $rowcard['id']) {
                                    $checked = true;
                                }
                            }
                        ?>
                            <option value="<?= $rowcard['id'] ?>" <?= isset($checked)? "selected": "" ?> ><?= $rowcard['name'] ?></option>
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