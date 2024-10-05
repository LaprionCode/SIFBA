@extends('template/master')

@section('content')
<h1>Detail Data PPKS</h1>
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $anak->nama }}</h3>
    </div>
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Nama</dt>
            <dd class="col-sm-9">{{ $anak->nama }}</dd>

            <dt class="col-sm-3">NIK</dt>
            <dd class="col-sm-9">{{ $anak->nik }}</dd>

            <dt class="col-sm-3">Nomor Kartu Keluarga</dt>
            <dd class="col-sm-9">{{ $anak->kk }}</dd>

            <dt class="col-sm-3">Tanggal Lahir</dt>
            <dd class="col-sm-9">{{ $anak->birth_date }}</dd>

            <dt class="col-sm-3">Jenis Kelamin</dt>
            <dd class="col-sm-9">{{ $anak->kelamin }}</dd>

            <dt class="col-sm-3">Agama</dt>
            <dd class="col-sm-9">{{ $anak->agama }}</dd>

            <dt class="col-sm-3">Provinsi</dt>
            <dd class="col-sm-9">{{ $anak->provinsi }}</dd>

            <dt class="col-sm-3">Kabupaten</dt>
            <dd class="col-sm-9">{{ $anak->kabupaten }}</dd>

            <dt class="col-sm-3">Kecamatan</dt>
            <dd class="col-sm-9">{{ $anak->kecamatan }}</dd>

            <dt class="col-sm-3">Kelurahan</dt>
            <dd class="col-sm-9">{{ $anak->kelurahan }}</dd>

            <dt class="col-sm-3">RT/RW</dt>
            <dd class="col-sm-9">{{ $anak->rtrw }}</dd>

            <dt class="col-sm-3">Alamat</dt>
            <dd class="col-sm-9">{{ $anak->alamat }}</dd>

            <dt class="col-sm-3">Kategori</dt>
            <dd class="col-sm-9">{{ $anak->kategori }}</dd>

            <dt class="col-sm-3">Permasalahan / Gambaran Kasus</dt>
            <dd class="col-sm-9">{{ $anak->kasus }}</dd>

            <dt class="col-sm-3">Kebutuhan</dt>
            <dd class="col-sm-9">{{ implode(', ', json_decode($anak->kebutuhan, true)) }}</dd>

            <dt class="col-sm-3">Hidup Layak</dt>
            <dd class="col-sm-9">
                @php
                    $hidup_layak = json_decode($anak->hidup_layak, true);
                @endphp
                Uraian: {{ $hidup_layak['uraian'] ?? '-' }}<br>
                Nominal: {{ $hidup_layak['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Perawatan</dt>
            <dd class="col-sm-9">
                @php
                    $perawatan = json_decode($anak->perawatan, true);
                @endphp
                Uraian: {{ $perawatan['uraian'] ?? '-' }}<br>
                Nominal: {{ $perawatan['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Dukungan Keluarga</dt>
            <dd class="col-sm-9">
                @php
                    $dukungan_keluarga = json_decode($anak->dukungan_keluarga, true);
                @endphp
                Uraian: {{ $dukungan_keluarga['uraian'] ?? '-' }}<br>
                Nominal: {{ $dukungan_keluarga['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Terapi</dt>
            <dd class="col-sm-9">
                @php
                    $terapi = json_decode($anak->terapi, true);
                @endphp
                Uraian: {{ $terapi['uraian'] ?? '-' }}<br>
                Nominal: {{ $terapi['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Pelatihan</dt>
            <dd class="col-sm-9">
                @php
                    $pelatihan = json_decode($anak->pelatihan, true);
                @endphp
                Uraian: {{ $pelatihan['uraian'] ?? '-' }}<br>
                Nominal: {{ $pelatihan['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Kewirausahaan</dt>
            <dd class="col-sm-9">
                @php
                    $kewirausahaan = json_decode($anak->kewirausahaan, true);
                @endphp
                Uraian: {{ $kewirausahaan['uraian'] ?? '-' }}<br>
                Nominal: {{ $kewirausahaan['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Aksesibilitas</dt>
            <dd class="col-sm-9">
                @php
                    $aksesibilitas = json_decode($anak->aksesibilitas, true);
                @endphp
                Uraian: {{ $aksesibilitas['uraian'] ?? '-' }}<br>
                Nominal: {{ $aksesibilitas['nominal'] ?? '-' }}
            </dd>

            <dt class="col-sm-3">Foto KTP</dt>
            <dd class="col-sm-9">
                <img src="{{ asset('storage/ktp/' . basename($anak->ktp)) }}" alt="Foto KTP" class="img-thumbnail" width="200">
            </dd>

            <dt class="col-sm-3">Foto PPKS</dt>
            <dd class="col-sm-9">
                <img src="{{ asset('storage/ppks/' . basename($anak->ppks)) }}" alt="Foto PPKS" class="img-thumbnail" width="200">
            </dd>

            <dt class="col-sm-3">Foto Pemberian Bantuan</dt>
            <dd class="col-sm-9">
                <img src="{{ asset('storage/foto/' . basename($anak->foto)) }}" alt="Foto" class="img-thumbnail" width="200">
            </dd>

            <dt class="col-sm-3">Waktu Pemberian Bantuan</dt>
            <dd class="col-sm-9">{{ $anak->bantuan }}</dd>

            <dt class="col-sm-3">Nama Petugas Pemberi Bantuan</dt>
            <dd class="col-sm-9">{{ $anak->petugas }}</dd>
        </dl>
    </div>
</div>
@endsection
