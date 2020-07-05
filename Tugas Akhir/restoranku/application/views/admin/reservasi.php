<div class="container-fluid mt-3">
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Tanggal Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($reservasi as $r) :
                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $r->nama ?></td>
                        <td><?= $r->telepon ?></td>
                        <td><?= $r->tanggal ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>