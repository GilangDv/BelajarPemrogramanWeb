<div class="container mt-3">
    <h4>Login Akun</h4>
    <?= $this->session->flashdata('pesan') ?>
    <form method="post" action="<?= base_url('Auth/login') ?>">
        <div class="form-group w-50">
            <label>Username</label>
            <input type="text" class="form-control" name="username" autocomplete="tel-national">
        </div>
        <div class="form-group w-50">
            <label>Password</label>
            <input type="password" class="form-control" name="password" autocomplete="tel-national">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <a href="<?= base_url('Auth/registrasi') ?>" class="small">Register Akun Disini</a>
</div>