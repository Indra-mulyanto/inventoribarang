<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Aplikasi Inventory Barang" />
    <meta name="author" content="Andi16n" />

    <!-- Title -->
    <title>Aplikasi Inventory Barang</title>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{ asset("assets/css/fonts.min.css") }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body class="login">
    @if (session('error'))
        <div class="alert alert-notify alert-danger alert-dismissible fade show" role="alert">
            <span data-notify="icon" class="fas fa-times"></span>
            <span data-notify="title" class="text-danger">Gagal Login!</span>
            <span data-notify="message">{{ session('error') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('warning'))
        <div class="alert alert-notify alert-warning alert-dismissible fade show" role="alert">
            <span data-notify="icon" class="fas fa-exclamation"></span>
            <span data-notify="title" class="text-warning">Peringatan!</span>
            <span data-notify="message">{{ session('warning') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-notify alert-success alert-dismissible fade show" role="alert">
            <span data-notify="icon" class="fas fa-check"></span>
            <span data-notify="title" class="text-success">Sukses!</span>
            <span data-notify="message">{{ session('success') }}</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <!-- logo -->
            <div class="text-center mb-4"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="95px"></div>
            <!-- judul -->
            <h3 class="text-center">Aplikasi Persediaan Barang <br>Gudang Material</h3>
            <!-- form login -->
            <form action="{{ route('login') }}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="form-group form-floating-label">
                    <div class="user-icon"><i class="fas fas fa-user"></i></div>
                    <input type="text" id="username" name="username" class="form-control input-border-bottom" autocomplete="off" required>
                    <label for="username" class="placeholder">Username</label>
                    <div class="invalid-feedback">Username tidak boleh kosong.</div>
                </div>

                <div class="form-group form-floating-label">
                    <div class="user-icon"><i class="fas fa-lock"></i></div>
                    <div class="show-password"><i class="flaticon-interface"></i></div>
                    <input type="password" id="password" name="password" class="form-control input-border-bottom" autocomplete="off" required>
                    <label for="password" class="placeholder">Password</label>
                    <div class="invalid-feedback">Password tidak boleh kosong.</div>
                </div>

                <div class="form-action mt-2">
                    <!-- tombol login -->
                    <button type="submit" class="btn btn-success btn-rounded btn-login btn-block">LOGIN</button>
                </div>

                <!-- footer -->
                <div class="login-footer mt-4">
                    <span class="msg">&copy; Layanan Web - {{ date('Y') }}</span>
                </div>
            </form>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('assets/js/ready.js') }}"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
</body>

</html>