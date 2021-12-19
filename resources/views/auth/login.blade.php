<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Avanturista</title>
    <link rel="shortcut icon" href="{{ asset('image/master/backend/logo2.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('image/master/backend/logo2.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #113897 !important;
            border-color: #113897 !important;
        }
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #113897 !important ;
            color: #fff ;
        }

        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
            background-color: #113897 !important ;
            color: #fff ;
        }

        .btn-primary {
            color: #fff;
            background-color: #113897 !important;
            border-color: #113897 !important;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #113897 !important;
            border-color: #113897 !important;
        }

        .btn-primary:focus, .btn-primary.focus {
            box-shadow: none, 0 0 0 0 #113897 !important;
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #fff;
            background-color: #113897 !important;
            border-color: #113897 !important;
        }

        .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
        .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #113897 !important;
            border-color: #113897 !important;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0 #113897 !important;
            background-color: #113897 !important;
        }

        .borderless td, .borderless th {
            border: none;
        }

        .new-shadow{
            transition: box-shadow .3s;
        }

        .new-shadow:hover{
            box-shadow: 0 0 10px rgba(33,33,33,0.6);
        }

        [class*=sidebar-dark] .user-panel {
            border-bottom: 1px solid #090a1e;
        }

        [class*=sidebar-dark] .brand-link {
            border-bottom: 1px solid #090a1e;
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
            background-color: #113897 !important;
        }

        .bg-primary:active {
            background-color: #113897 !important;
        }

        .bg-primary {
            background-color: #090a1e !important;
        }

        .bg-primary:hover {
            background-color: #090a1e !important;
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #090a1e;
            background-color: #090a1e;
            box-shadow: none;
        }
        .h2{
            color: #090a1e;
        }
    </style>
</head>
<body class="hold-transition login-page" background="{{ asset('photo/background.jpg') }}" style="background-color: #090a1e;">
    <div class="login-box">
        <div class="card shadow" style="border-radius: 10px;">
            <div class="card-body login-card-body" style="border-radius: 10px;">
            <center>
                {{-- <img src="{{ asset('image/master/backend/logo3.png') }}" style="width: 100%; max-width: 300px;"> --}}
                <h2><b>Avanturista</b></h2>
            </center>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3 shadow">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required>
                    </div>
                    @error('email')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="mb-3 shadow">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    </div>
                    @error('password')
                        <span>
                            {{ $message }}
                        </span>
                    @enderror

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block shadow">Login</button>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-block shadow">Registrasi</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if(session('success'))
    <script>
        swal.fire({
            title: 'Success!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonColor: '#113897',
        })
    </script>
@endif

@if(session('failed'))
    <script>
        swal.fire({
            title: 'Failed!',
            text: "{{ session('failed') }}",
            icon: 'error',
            confirmButtonColor: '#113897',
        })
    </script>
@endif
</body>
</html>
