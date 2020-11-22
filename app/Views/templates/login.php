<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Content -->
    <div class="overlay-white">
        <div class="container">
            <div class="wrapper-form">
                <div class="circle-wrapper">
                    <div class="circle-image">
                        <img src="<?= base_url(); ?>/assets/images/icons/user.png" width="100">
                    </div>

                </div>
                <div class="form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <div class="text-center">
                                <label class="text-login text-uppercase">Login Form</label>
                            </div>
                            <div class="input-icon mt-2">
                                <i class="fa fa-user icon"></i>
                                <input type="text" class="form-control" name="username" autocomplete="off" required placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-icon">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class="form-control" name="password" autocomplete="off" required placeholder="Password">
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block mt-4 mb-3" type="submit">Login</button>
                        <div class="text-center">
                            <small class="text-muted ">Belum punya akun ? <a href="/register/index">Daftar</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>