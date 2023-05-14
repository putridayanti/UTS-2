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
    // ambil data card berdasarkan id
    $sql = "SELECT * FROM `card` WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
} else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
}
?>


<h1 class="mt-4"> form card</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?= ROOT_PATH_ADMIN ?>index.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="card.php">card</a></li>
    <li class="breadcrumb-item active">form card</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        form card
    </div>
    <div class="card-body">

        <form method="POST" action="proses_card.php">
            <div class="form-group row">
            <div class="form-group row">
                <label for="card" class="col-4 col-form-label">Nama Kartu</label>
                <div class="col-8">
                    <?php
                    $sqlcard = "SELECT * FROM `card`";
                    $rscard = $dbh->query($sqlcard);
                    ?>
                    <select id="card" name="card" class="form-control" required>
                        <option value=""></option>
                        <?php
                        foreach ($rscard as $rowcard) {
                            if (isset($row['card'])){
                                if ($row['card'] == $rowcard['name']) {
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
                <label for="discount" class="col-4 col-form-label">Diskon</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="discount" name="discount" type="text" class="form-control" value="<?php if (isset($row['sell_price'])) echo $row['sell_price']; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="member_fee" class="col-4 col-form-label">Member Fee</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="member_fee" name="member_fee" type="text" class="form-control" value="<?php if (isset($row['stock'])) echo $row['stock']; ?>">
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