@extends('template/master')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<style>
    .card-category {
        display: flex;
        align-items: center;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        min-height: 150px;
    }
    .card-category img {
        height: 70px;
        margin-right: 15px;
    }
    .card-category .inner {
        flex: 1;
        text-align: left;
    }
    .card-category .inner h3 {
        margin: 0;
        font-size: 2em;
    }
    .card-category .inner p {
        margin: 0;
        font-size: 1.2em;
    }
</style>
@endsection
@section('content')
@if (session()->has('success'))
<div class="alert alert-primary">
    {{ session()->get('success') }}
</div>
@endif
<div class="row">
    <!-- Anak -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-category bg-light">
            <img src="{{ url('../../dist/img/anak.png') }}" alt="Anak">
            <div class="inner">
                <p>Anak</p>
                <h3>110</h3>
            </div>
        </div>
    </div>
    <!-- Lansia -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-category bg-light">
            <img src="{{ url('../../dist/img/anak.png') }}" alt="Lansia">
            <div class="inner">
                <p>Lansia</p>
                <h3>30</h3>
            </div>
        </div>
    </div>
    <!-- Disabilitas -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-category bg-light">
            <img src="{{ url('../../dist/img/anak.png') }}" alt="Disabilitas">
            <div class="inner">
                <p>Disabilitas</p>
                <h3>15</h3>
            </div>
        </div>
    </div>
    <!-- Rentan -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-category bg-light">
            <img src="{{ url('../../dist/img/anak.png') }}" alt="Rentan">
            <div class="inner">
                <p>Rentan</p>
                <h3>4</h3>
            </div>
        </div>
    </div>
    <!-- ODHA -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card card-category bg-light">
            <img src="{{ url('../../dist/img/anak.png') }}" alt="ODHA">
            <div class="inner">
                <p>ODHA</p>
                <h3>4</h3>
            </div>
        </div>
    </div>
    <!-- Donut Chart -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card bg-light">
            <div class="card-header">
                <h3 class="card-title">Persentase Jumlah PPKS</h3>
            </div>
            <div class="card-body">
                <canvas id="donutChart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">DataTable PPKS</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Kabupaten/kota</th>
                        <th>Kluster</th>
                        <th>Petugas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anak as $data)
                    <tr>
                        <td>{{ $data->nama}}</td>
                        <td>{{ $data->nik}}</td>
                        <td>{{ $data->kabupaten}}</td>
                        <td>{{ $data->kategori}}</td>
                        <td>{{ $data->petugas}}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('anak.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                <a href="{{ route('anak.edit', $data->id) }}" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- DataTables & Plugins -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    $(function () {
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: [
                'Anak',
                'Lansia',
                'Disabilitas',
                'Rentan',
                'ODHA',
            ],
            datasets: [
                {
                    data: [110, 30, 15, 4, 4],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
    });
</script>
@endsection
