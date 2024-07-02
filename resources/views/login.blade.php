<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .balok {
            width: 150px;
            height: 150px;
            margin: 10px;
        }

        .balok-biru {
            background-color: #007bff;
        }

        .balok-hijau {
            background-color: #28a745;
        }

        .balok-kuning {
            background-color: #ffc107;
        }

        .form-control {
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid black;
            transition: box-shadow 0.3s;
        }
    
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            outline: none;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="row">
        <!-- SECARA VERTICAL BERADA DIATAS -->
        <div class="col d-flex flex-row bd-highlight mb-3">
            <div
                style="width: 308px; height: 35px; top: 29px; left: 0px; position: absolute; background: #F9FD34; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
            </div>
            <div
                style="width: 250px; height: 35px; left: 0px; top: 80px; position: absolute; background: #5389DA; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
            </div>
            <div
                style="width: 197px; height: 35px; left: 0px; top: 131px; position: absolute; background: #86E03F; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
            </div>
        </div>

        <!-- SECARA VERTICAL BERADA DI TENGAH -->
        <div class="col container d-flex flex-column align-items-center">
            <div class="col d-flex flex-column align-items-center">
                <img style="width: 351px; height: 248px;" src="../../dist/img/kemensos.jpeg" alt="Kemensos Logo" />
                
                @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf

                <div class="row d-flex justify-content-center">
                    <input type="text" class="form-control mb-3" id="inputNIP" name="nip" placeholder="NIP">
                    <input type="password" class="form-control" id="inputPassword" name="password"
                     aria-describedby="passwordHelp" placeholder="Password">
                </div>

                <p class="mt-4">Belum punya akun? <a href="http://localhost:8000/register">Daftar</a></p>
            </div>
            <div class="col d-flex flex-column align-items-center mt-3">
                <button class="btn btn-primary"
                    onclick="toRegister()"
                    style="width: 132px; height: 50px; background: #4B7CF8; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
                    Masuk
                </button>
            </div>
        </div>

        <!-- SECARA VERTICAL BERADA DI BAWAH -->
        <div class="col d-flex flex-row-reverse bd-highlight mb-3">
            <div
                style="width: 308px; height: 35px; top: 756px; position: absolute; background: #F9FD34; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
            </div>
            <div
                style="width: 197px; height: 35px; top: 658px; position: absolute; background: #86E03F; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
            </div>
            <div
                style="width: 250px; height: 35px; top: 707px; position: absolute; background: #5389DA; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
            </div>
        </div>

    </div>
    <script>
        function toRegister(){
            document.location.href = "dashboard.html";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>