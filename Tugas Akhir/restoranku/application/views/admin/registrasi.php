<div class="container mt-3">
    <h4>Registrasi akun</h4>
    <form method="post" action="<?= base_url('Auth/registrasi') ?>">
        <div class="form-group w-50">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" autocomplete="tel-national">
        </div>
        <div class="form-group w-50">
            <label>Username</label>
            <input type="text" class="form-control" name="username" autocomplete="tel-national">
        </div>
        <div class="form-group w-50">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <a href="<?= base_url('Auth/login') ?>" class="small">Login Akun Disini</a>
</div>