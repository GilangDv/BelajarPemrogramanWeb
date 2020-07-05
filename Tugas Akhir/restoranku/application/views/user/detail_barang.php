<div class="container mt-3">
    <?php foreach ($barang as $b) : ?>
        <h3><?= $b->nama ?></h3>
        <p><?= $b->harga ?></p>
    <?php endforeach ?>
    <br>
    <?= anchor('Barang', ' <div class="btn btn-sm btn-primary mt-3">Kembali</div>') ?>
</div>