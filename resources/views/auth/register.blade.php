<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Avanturista</title>
    <link rel="shortcut icon" href="{{ asset('photo/logo2.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('photo/logo2.png') }}" type="image/x-icon">
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
            background-color: #42a4e8;
            border-color: #42a4e8;
        }
        .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
            background-color: #42a4e8 ;
            color: #fff ;
        }

        [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
            background-color: #42a4e8 ;
            color: #fff ;
        }

        .btn-primary {
            color: #fff;
            background-color: #42a4e8;
            border-color: #42a4e8;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #42a4e8;
            border-color: #42a4e8;
        }

        .btn-primary:focus, .btn-primary.focus {
            box-shadow: none, 0 0 0 0 #42a4e8;
        }

        .btn-primary.disabled, .btn-primary:disabled {
            color: #fff;
            background-color: #42a4e8;
            border-color: #42a4e8;
        }

        .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
        .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #42a4e8;
            border-color: #42a4e8;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0 #42a4e8;
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}">
                <img src="{{ asset('photo/logo2.png') }}" style="width: 100%; max-width: 150px;">
            </a>
        </div>
        <div class="card" style="border-radius: 10px;">
            <div class="card-body login-card-body" style="border-radius: 10px;">
                <center>
                    <span class="login-box-msg" style="font-size: 20px;"><b>Daftar Sebagai Pelanggan</b></span>
                </center>
                <h2 class="login-box-msg"><b>Avanturista</b></h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <label>Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{ old('name') }}" required>
                    @error('name')
                        <span style="color: red;">
                            <i>{{ $message }}</i>
                        </span>
                    @enderror
                    <br>

                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span style="color: red;">
                            <i>{{ $message }}</i>
                        </span>
                    @enderror
                    <br>
                    
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password')
                        <span style="color: red;">
                            <i>{{ $message }}</i>
                        </span>
                    @enderror
                    <br>

                    <label>Password Konfirmasi</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Password Konfirmasi" required>
                    @error('password_confirmation')
                        <span style="color: red;">
                            <i>{{ $message }}</i>
                        </span>
                    @enderror
                    <br>

                    <label>Telepon</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Telepon" value="{{ old('phone') }}" required>
                    @error('phone')
                        <span style="color: red;">
                            <i>{{ $message }}</i>
                        </span>
                    @enderror
                    <br>

                    <label>Address</label>
                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Alamat" required>{{ old('address') }}</textarea>
                    @error('address')
                        <span style="color: red;">
                            <i>{{ $message }}</i>
                        </span>
                    @enderror
                    <br>
                    
                    <div class="row">                        
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-block">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>