<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="/img/<?= $komik['sampul']; ?>" class="sampul" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $komik['judul']; ?></h5>
                <p class="card-text">Penulis : <?= $komik['penulis']; ?></p>
                <p class="card-text">Penerbit : <?= $komik['penerbit']; ?></p>
            </div>
            <a href="" class="btn btn-warning"> Edit </a>
            <a href="" class="btn btn-danger"> Delete </a>
            <br><br>
            <a href="/komik">Kembali ke Daftar Komik</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>