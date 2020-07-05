<div class="container mt-3">
    <?php foreach ($barang as $b) : ?>
        <?= form_open_multipart('Admin/barang/update') ?>
        <div class="form-group">
            <input type="hidden" class="form-control" placeholder="Nama" name="id" value="<?= $b->id_makanan ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Makanan</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $b->nama ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="text" class="form-control" placeholder="Alamat" name="harga" value="<?= $b->harga ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close(); ?>
    <?php endforeach ?>
</div>