<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <style>
        .txt2 {
            font-family: Poppins-Regular;
            font-size: 13px;
            line-height: 1.5;
            color: #666666;
        }

        .txt2:hover {
            color: #57b846;
            text-decoration: none;
        }

        .p-t-136 {
            padding-top: 10px;
        }

        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: url('{{ asset('dist/img/bg.png') }}') no-repeat center center;
            background-size: cover;
        }

        .wrap-login100 {
            width: 960px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 50px 50px 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login100-pic {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .login100-pic img {
            max-width: 100%;
            max-height: 100%;
        }

        .login100-form {
            width: 50%;
        }

        .login100-form-title {
            font-family: Poppins-Bold;
            font-size: 24px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
            width: 100%;
            display: block;
            padding-bottom: 54px;
        }

        .wrap-input100 {
            position: relative;
            width: 100%;
            z-index: 1;
            margin-bottom: 10px;
        }

        .input100 {
            font-family: Poppins-Medium;
            font-size: 15px;
            line-height: 1.5;
            color: #666666;
            display: block;
            width: 100%;
            background: #e6e6e6;
            height: 50px;
            border-radius: 25px;
            padding: 0 30px 0 68px;
        }

        .focus-input100 {
            display: block;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: rgba(87, 184, 70, 0.8);
        }

        .input100:focus + .focus-input100 {
            -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
            animation: anim-shadow 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 70px 25px;
                opacity: 0;
            }
        }

        @keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 70px 25px;
                opacity: 0;
            }
        }

        .symbol-input100 {
            font-size: 15px;
            display: flex;
            align-items: center;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-left: 35px;
            pointer-events: none;
            color: #666666;
            transition: all 0.4s;
        }

        .input100:focus + .focus-input100 + .symbol-input100 {
            color: #57b846;
            padding-left: 28px;
        }

        .container-login100-form-btn {
            width: 100%;
            display: flex;
            justify-content: center;
            padding-top: 20px;
        }

        .login100-form-btn {
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color: #fff;
            text-transform: uppercase;
            width: 100%;
            height: 50px;
            border-radius: 25px;
            background: #57b846;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;
            transition: all 0.4s;
        }

        .login100-form-btn:hover {
            background: #333333;
        }

        .text-center {
            text-align: center;
        }

        .p-t-12 {
            padding-top: 12px;
        }
    </style>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('dist/img/logoclean.png') }}" alt="IMG">
                </div>
                <form class="login100-form validate-form" method="POST" action="{{route('actionregister')}}">
                    @csrf
                    <span class="login100-form-title">Register</span>
                    
                    @if(Session::has('message'))
                <div class="alert alert-success">
                    {!! Session::get('message') !!}
                </div>
            @endif
                    <div class="wrap-input100 validate-input" data-validate="Nama is required">
                        <input class="input100" type="text" name="name" placeholder="Nama Lengkap" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="NIP is required">
                        <input class="input100" type="text" name="nip" placeholder="NIP"  required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Role is required">
                        <select class="input100" name="role" required>
                            <option value="" disabled selected>Select Role</option>
                            <option value="Petugas Asesmen">Petugas Asesmen</option>
                            <option value="Staf Keuangan">Staf Keuangan</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Register
                        </button>
                    </div>
                    <div class="text-center p-t-12">
                        <a class="txt2" href="{{ route('login') }}">
                            Sudah Punya Akun? Login
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        });
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
