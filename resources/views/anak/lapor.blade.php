@extends('template/master')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<style>
    .info-box-custom {
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        min-height: 150px;
        background-color: white; /* Set background color to white */
    }
    .info-box-custom .info-box-icon {
        flex: 0 0 80px; /* Increased the size for the icon container */
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .info-box-custom img {
        height: 80px; /* Adjusted the icon size */
    }
    .info-box-custom .info-box-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding-left: 15px;
    }
    .info-box-custom .info-box-text {
        margin: 0;
        font-size: 1.2em;
        font-weight: bold;
        color: black; /* Set text color to black */
    }
    .info-box-custom .info-box-number {
        margin: 0;
        font-size: 1.7em;
        font-weight: bold;
        color: black; /* Set number color to black */
    }
    @media (min-width: 1200px) {
        .info-box-container {
            display: flex;
            flex-wrap: wrap;
        }
        .info-box-container .col {
            flex: 1 0 20%;
            max-width: 20%;
            padding: 10px;
        }
    }
    .dataTables_wrapper .dataTables_length, 
    .dataTables_wrapper .dataTables_filter, 
    .dataTables_wrapper .dataTables_info, 
    .dataTables_wrapper .dataTables_paginate {
        padding: 10px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.3em 1em;
    }
    .table td, .table th {
        text-align: center;
        vertical-align: middle;
    }
</style>
@endsection

@section('content')
@if (session()->has('success'))
<div class="alert alert-primary">
    {{ session()->get('success') }}
</div>
@endif
<div class="row info-box-container">
    <!-- Anak -->
    <div class="col mb-4">
        <div class="info-box info-box-custom">
            <span class="info-box-icon"><img src="{{ url('../../dist/img/anak.png') }}" alt="Anak"></span>
            <div class="info-box-content">
                <span class="info-box-text">Anak</span>
                <span class="info-box-number">{{ $totals['Anak'] }}</span>
            </div>
        </div>
    </div>
    <!-- Lansia -->
    <div class="col mb-4">
        <div class="info-box info-box-custom">
            <span class="info-box-icon"><img src="{{ url('../../dist/img/lansia.png') }}" alt="Lansia"></span>
            <div class="info-box-content">
                <span class="info-box-text">Lansia</span>
                <span class="info-box-number">{{ $totals['Lansia'] }}</span>
            </div>
        </div>
    </div>
    <!-- Disabilitas -->
    <div class="col mb-4">
        <div class="info-box info-box-custom">
            <span class="info-box-icon"><img src="{{ url('../../dist/img/disabil.png') }}" alt="Disabilitas"></span>
            <div class="info-box-content">
                <span class="info-box-text">Disabilitas</span>
                <span class="info-box-number">{{ $totals['Disabilitas'] }}</span>
            </div>
        </div>
    </div>
    <!-- Rentan -->
    <div class="col mb-4">
        <div class="info-box info-box-custom">
            <span class="info-box-icon"><img src="{{ url('../../dist/img/korban.png') }}" alt="Rentan"></span>
            <div class="info-box-content">
                <span class="info-box-text">Rentan</span>
                <span class="info-box-number">{{ $totals['Rentan'] }}</span>
            </div>
        </div>
    </div>
    <!-- ODHA -->
    <div class="col mb-4">
        <div class="info-box info-box-custom">
            <span class="info-box-icon"><img src="{{ url('../../dist/img/rentan.png') }}" alt="ODHA"></span>
            <div class="info-box-content">
                <span class="info-box-text">ODHA</span>
                <span class="info-box-number">{{ $totals['ODHA'] }}</span>
            </div>
        </div>
    </div>
</div>

<!-- DataTable -->
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header text-center">
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
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->kabupaten }}</td>
                            <td>{{ $data->kategori }}</td>
                            <td>{{ $data->petugas }}</td>
                            <td>
                                    <a href="{{ route('anak.show', $data->id) }}" class="btn btn-outline-info"><i class="fa fa-eye"></i></a> <!-- View Button -->
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- DataTables & Plugins -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
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

</script>
@endsection
