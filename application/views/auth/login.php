<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/users/images/logobikea.png" />

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/admin/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url(<?= base_url('assets/admin/img/bikea.jpg') ?>);"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">

                                        <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth/action') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="Username...">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user password" name="password" id="exampleInputPassword" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input form-checkbox" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Tampil Password</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/admin/js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.password').attr('type', 'text');
                } else {
                    $('.password').attr('type', 'password');
                }
            });
        });
    </script>
    <script>
        <?php if ($this->session->flashdata('gagal')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'failed to login!',
                text: 'account not found',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('tidakaktif')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Sorry your account is not active!',
                text: 'please try again',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('passwordsalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'your password is wrong!',
                text: 'please try again',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('usernamesalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'your username is wrong!',
                text: 'please try again',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('logout')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'you have successfully logged out',
                text: 'Please log in to back in',
                showConfirmButton: true,
                // timer: 1500
            })
        // <?php elseif ($this->session->flashdata('gantipass')) : ?>
        //     Swal.fire({
        //         icon: 'success',
        //         title: 'Anda berhasil ganti password!',
        //         showConfirmButton: true,
        //         // timer: 1500
        //     })
        // <?php elseif ($this->session->flashdata('gagal')) : ?>
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Maaf anda gagal mengganti password!',
        //         showConfirmButton: true,
        //         // timer: 1500
        //     })
        <?php endif ?>
    </script>

</body>

</html>