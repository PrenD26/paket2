<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/stisla') ?>/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <h4 class="text-dark font-weight-normal mt-3 text-center" style="font-size:25px!important; color:#666666!important;">
                                <span class="font-weight-bold">Buat Akun Great Hotel</span>
                            </h4>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth/daftar') ?>">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="nama">Nama Lengkap</label>
                                            <input id="nama" type="text" class="form-control <?php if (form_error('nama')) {
                                                                                                    echo ('is-invalid');
                                                                                                } ?>" name="nama" placeholder="Masukkan Nama" value="<?= set_value('nama') ?>" autofocus>
                                            <div class="invalid-feedback">
                                                <?= form_error('nama') ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" class="form-control <?php if (form_error('email')) {
                                                                                                    echo ('is-invalid');
                                                                                                } ?>" name="email" value="<?= set_value('email') ?>" placeholder="Masukkan Email">
                                            <div class="invalid-feedback">
                                                <?= form_error('email') ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="no_telp">No Handphone</label>
                                            <input type="text" id="no_telp" class="form-control <?php if (form_error('no_telp')) {
                                                                                                    echo ('is-invalid');
                                                                                                } ?>" name="no_telp" placeholder="Masukkan No Handphone" value="<?= set_value('no_telp') ?>" data-inputmask='"mask": "(+99) 999-9999-99999"' data-mask>
                                            <div class="invalid-feedback">
                                                <?= form_error('no_telp') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password1">Password</label>
                                            <input id="password1" type="password" class="form-control <?php if (form_error('password1')) {
                                                                                                            echo ('is-invalid');
                                                                                                        } ?>" name="password1" placeholder="Masukkan Password" value="<?= set_value('password1') ?>">
                                            <div class="invalid-feedback">
                                                <?= form_error('password1') ?>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2">Repeat Password</label>
                                            <input id="password2" type="password" class="form-control <?php if (form_error('password2')) {
                                                                                                            echo ('is-invalid');
                                                                                                        } ?>" name="password2" placeholder="Masukkan Kembali Password" value="<?= set_value('password2') ?>">
                                            <div class="invalid-feedback">
                                                <?= form_error('password2') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Frendy 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('assets/stisla') ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/stisla') ?>/assets/js/custom.js"></script>
    <script>
        //Inputmask
        $('[data-mask]').inputmask()
        "use strict";
    </script>

</body>

</html>