<div class="container-fluid mt-3">
    <div class="container">
        <div class="btn btn-md btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Input Makanan</div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Makanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($barang as $b) :
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $b->nama ?></td>
                        <td><?= $b->harga ?></td>
                        <td><img src="<?= base_url('/assets/') . $b->gambar ?>" width="50" height="50"></td>
                        <td>
                            <?= anchor('Admin/barang/edit/' . $b->id_makanan, '<div class="btn btn-sm btn-warning">Edit</div>') ?>
                            <?= anchor('Admin/barang/delete/' . $b->id_makanan, '<div class="btn btn-sm btn-danger">Hapus</div>') ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Makanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('Admin/Barang/input') ?>
                <div class="form-group">
                    <label>Nama Makanan</label>
                    <input type="text" class="form-control" placeholder="Nama Makanan" name="nama">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" placeholder="Harga Makanan" name="harga">
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" placeholder="Gambar Makanan" name="gambar">
                </div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>