<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Restoranku</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Restoranku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if ($this->session->userdata('username')) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Admin/Barang') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Admin/Reservasi') ?>">Reservasi</a>
                        </li>
                        <li class="nav-item">
                            <div class='mt-2'>Selamat Datang <?= $this->session->userdata('username') ?> </div>
                        </li>
                        <li class="nav-item">
                            <?= anchor('Auth/logout', "<div class='mt-2 ml-4'>logout</div>") ?>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <div>
                                <?= anchor('Auth/login', "<div class='mt-2'>login</div>") ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->