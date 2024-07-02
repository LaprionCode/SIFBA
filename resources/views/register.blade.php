<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                <div class="row d-flex justify-content-center">
                    <input type="text" class="form-control mb-3" id="Nama Lengkap" name="name" aria-describedby="namaHelp"
                        placeholder="Nama Lengkap">
                    <input type="text" class="form-control mb-3" id="NIP" name="nip" aria-describedby="nipHelp"
                        placeholder="NIP">
                    <input type="email" class="form-control mb-3" id="Email" name="email" aria-describedby="emailHelp"
                        placeholder="Email">
                    <input type="text" class="form-control mb-3" id="Nomor Telepon" name="nomor_telepon" aria-describedby="emailNomor"
                        placeholder="Nomor Telepon">
                    <input type="password" class="form-control mb-3" id="Password" name="password" aria-describedby="passwordHelp"
                        placeholder="Password">
                        <select class="form-control mb-3" id="inputRole" name="role" required>
                            <option value="">Pilih Role</option>
                            <option name="petugas">Petugas</option>
                            <option name="keuangan">Keuangan</option>
                        </select>
                </div>


                <p class="mt-4">Sudah punya akun? <a href="http://localhost:8000">Login</a></p>
            </div>
            <div class="col d-flex flex-column align-items-center mt-3">
                <button class="btn btn-primary"
                    style="width: 132px; height: 50px; background: #4B7CF8; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px;">
                    Daftar
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>