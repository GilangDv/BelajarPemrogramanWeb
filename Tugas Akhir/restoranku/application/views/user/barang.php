<div class="container mt-3">
    <div class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#exampleModal">Reservasi Tempat</div>
    <div class="row d-flex justify-content-center">
        <?php foreach ($barang as $b) : ?>
            <div class="col-3 mb-3 mr-3">
                <div class="card" style="width: 18rem; height: 20rem;">
                    <img class="card-img-top h-50" src="<?= base_url('/assets/') . $b->gambar ?>" alt="Gambar Makanan">
                    <div class="card-body">
                        <h5 class="card-title"><?= $b->nama ?></h5>
                        <p class="card-text">Rp.<?= $b->harga ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('Reservasi/inputData') ?>">
                    <div class="form-group">
                        <label>Nama Lengkap Pemesan</label>
                        <input type="text" class="form-control" name="pemesan" placeholder="cth : Gilang Deva P">
                    </div>
                    <div class="form-group">
                        <label>Nomer Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="08xxxxxxxxxx">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Reservasi</label>
                        <input type="date" class="form-control" name="tgl_reservasi">
                    </div>
                    <button type="submit" class="btn btn-primary">Reservasi</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>