@extends('template/master')
@section('content')
<h1>Form Edit Data PPKS</h1>
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form 1 : Identitas PPKS</h3>
        </div>
        <form action="{{ route('anak.update', $anak->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" 
                        name="nama" placeholder="Masukkan Nama" value="{{ $anak->nama }}" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nomor Induk Kewarganegaraan</label>
                        <input type="text" class="form-control" id="nik" 
                        name="nik" placeholder="Masukkan NIK" value="{{ $anak->nik }}" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>KK</label>
                        <input type="text" class="form-control" id="kk" 
                        name="kk" placeholder="Masukkan Kartu Keluarga" value="{{ $anak->kk }}" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" id="birth_date" 
                        name="birth_date" placeholder="Masukkan Tanggal Lahir" value="{{ $anak->birth_date }}" required>
                    </div> 
                </div> 

                <div class="row">
                <div class="col col-md-12 form-group">
            <label class="my-1 mr-2" for="kelamin">Kelamin</label>
            <select class="custom-select my-1 mr-sm-2" id="kelamin" name="kelamin" >
             <option value="1" {{ $anak->kelamin == '1' ? 'selected' : '' }}>Laki-Laki</option>
             <option value="2" {{ $anak->kelamin == '2' ? 'selected' : '' }}>Perempuan</option>
            </select>
            </div> </div>

            <div class="row">
            <div class="col col-md-12 form-group">
            <label class="my-1 mr-2" for="agama">Agama</label>
            <select class="custom-select my-1 mr-sm-2" id="agama" name="agama">
             <option value="Islam" {{ $anak->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
             <option value="Buddha" {{ $anak->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
             <option value="Kristen" {{ $anak->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
             <option value="Katolik" {{ $anak->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
             <option value="Kongucu" {{ $anak->agama == 'Kongucu' ? 'selected' : '' }}>Kongucu</option>
             <option value="Hindu" {{ $anak->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
            </select> </div> </div>

            <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" 
                        name="provinsi" placeholder="Masukkan Provinsi" value="{{ $anak->provinsi }}" required>
                    </div> 
                </div>

            <div class="form-row">
             <div class="col-md-4 mb-3">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" 
                placeholder="kabupaten" value="{{ $anak->kabupaten }}" required>
            </div>
            <div class="col-md-4 mb-3">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name ="kecamatan" 
                placeholder="Kecamatan" value="{{ $anak->kecamatan }}" required>
            </div>
            <div class="col-md-4 mb-3">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" 
                placeholder="Kelurahan" value="{{ $anak->kelurahan }}" required>
            </div> </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="rtrw">RT/RW</label>
            <input type="text" class="form-control" id="rtrw" name="rtrw"
                placeholder="RT/RW" value="{{ $anak->rtrw }}" required>
            </div>
            <div class="col-md-4 mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"
                placeholder="Alamat" value="{{ $anak->alamat }}" required>
            </div> </div>

                <div class="row">
                    <div class="co col-md-12 form-group">
                        <label for="ktp">Foto KTP</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ktp" name="ktp">
                                <label class="custom-file-label" for="ktp">Pilih Foto KTP</label>
                            </div>
                        </div>
                        @if($anak->ktp)
                            <img src="{{ Storage::url($anak->ktp) }}" style="width:150px" class="img-thumbnail mt-2">
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="co col-md-12 form-group">
                        <label for="ppks">Foto PPKS</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ppks" name="ppks">
                                <label class="custom-file-label" for="ppks">Pilih Foto PPKS</label>
                            </div>
                        </div>
                        @if($anak->ppks)
                            <img src="{{ Storage::url($anak->ppks) }}" style="width:150px" class="img-thumbnail mt-2">
                        @endif
                    </div>
                </div>
            
        </div>  
    </div>
</div>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form 2 : Asesmen</h3>
        </div>
        <div class="card-body">
                <div class="row">
                <div class="co col-md-12 form-group">
                <label class="my-1 mr-2" for="kategori">Kategori PPKS / Kluster</label>
                <select class="custom-select my-1 mr-sm-2" id="kategori" name="kategori">
             <option value="Anak" {{ $anak->kategori == 'Anak' ? 'selected' : '' }}>Anak</option>
             <option value="Disabilitas" {{ $anak->kategori == 'Disabilitas' ? 'selected' : '' }}>Disabilitas</option>
             <option value="Lansia" {{ $anak->kategori == 'Lansia' ? 'selected' : '' }}>Lansia</option>
             <option value="Korban Bencana" {{ $anak->kategori == 'Korban Bencana' ? 'selected' : '' }}>Korban Bencana</option>
            </select>
             </div> </div>
        <div class="form-group">
            <label for="kasus">Permasalahan / Gambaran Kasus</label>
            <textarea class="form-control" id="kasus" name="kasus" rows="3">{{ $anak->kasus }}</textarea>
        </div>
        <label>Kebutuhan / Komponen Layanan Yang DiButuhkan</label> <br>
        <div id="dynamicFields">
        @php
                $kebutuhan = json_decode($anak->kebutuhan, true);
            @endphp
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hidup_layak" name="kebutuhan[]" value="Hidup Layak" {{ in_array('Hidup Layak', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="hidup_layak">1. Pemenuhan Hidup Layak</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="Perawatan" name="kebutuhan[]" value="Perawatan" {{ in_array('Perawatan', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="Perawatan">2. Perawatan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="dukungan_keluarga" name="kebutuhan[]" value="Dukungan Keluarga" {{ in_array('Dukungan Keluarga', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="dukungan_keluarga">3. Dukungan Keluarga</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="Terapi" name="kebutuhan[]" value="Terapi" {{ in_array('Terapi', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="Terapi">4. Terapi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="Pelatihan" name="kebutuhan[]" value="Pelatihan Vokasional" {{ in_array('Pelatihan Vokasional', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="Pelatihan">5. Pelatihan Vokasional</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="Kewirausahaan" name="kebutuhan[]" value="Kewirausahaan" {{ in_array('Kewirausahaan', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="Kewirausahaan">6. Kewirausahaan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="aksesibilitas" name="kebutuhan[]" value="Aksesibilitas" {{ in_array('Aksesibilitas', $kebutuhan) ? 'checked' : '' }}>
                <label class="form-check-label" for="aksesibilitas">7. Dukungan Aksebilitas</label>
            </div>
            @foreach ($kebutuhan as $item)
                <div class="dynamic-field" data-checkbox-value="{{ $item }}">
                    <label>{{ $item }}</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="uraian_bantuan[{{ $item }}]">Uraian Bantuan</label>
                            <input type="text" class="form-control" name="uraian_bantuan[{{ $item }}]" value="{{ $anak->uraian_bantuan[$item] ?? '' }}" placeholder="Uraian Bantuan">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nominal_bantuan[{{ $item }}]">Nominal Bantuan</label>
                            <input type="text" class="form-control" name="nominal_bantuan[{{ $item }}]" value="{{ $anak->nominal_bantuan[$item] ?? '' }}" placeholder="Nominal Bantuan">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form 3 : Intervensi / Bantuan Yang Diberikan</h3>
        </div>

  <div class="col col-md-12 form-group">
      <label for="kelurahan">Waktu Pemberian Bantuan</label>
      <input type="text" class="form-control" id="bantuan"  name="bantuan" placeholder="Waktu Pemberian Bantuan" value="{{ $anak->bantuan }}" required>

  <div class="row">
        <div class="co col-md-12 form-group">
            <label for="exampleInputFile">Upload Foto Pemberian Bantuan</label>
                <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto">
                    <label class="custom-file-label" for="exampleInputFile">Upload Foto Pemberian Bantuan</label>
                    </div>
                </div>
                @if($anak->foto)
                    <img src="{{ Storage::url($anak->foto) }}" style="width:150px" class="img-thumbnail mt-2">
                @endif
        </div> </div>
    <div class="row">
    <div class="col col-md-12 form-group">
      <label for="kelurahan">Nama Petugas Pemberi Bantuan</label>
      <input type="text" class="form-control" id="petugas" name="petugas" placeholder="Nama Petugas" value="{{ $anak->petugas }}" required>
       </div> </div>
</div></div>
<!-- TOMBOL TAMBAH DATA!!!!!! -->
<div class= "card-footer">
    <button type="submit" class="btn btn-primary">Update</button>
</div> </div> </div>
</form>

@endsection
@section('css')
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection
@section('js')
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function() {
        $('#deskripsi_form').summernote()
    })
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Function to handle checkbox click
    $('.form-check-input').change(function() {
        var checkboxValue = $(this).val(); // Get the value of the clicked checkbox
        var checkboxLabel = $(this).siblings('label').text(); // Get the label text associated with the clicked checkbox
        
        if ($(this).is(':checked')) {
            // If checkbox is checked, dynamically add fields
            var dynamicField = '<div class="dynamic-field">' +
                                   '<label>' + checkboxLabel + '</label>' +
                                   '<div class="form-row">' +
                                       '<div class="form-group col-md-6">' +
                                           '<label for="inputDescription">Uraian Bantuan</label>' +
                                           '<input type="text" class="form-control" placeholder="Uraian Bantuan">' +
                                       '</div>' +
                                       '<div class="form-group col-md-6">' +
                                           '<label for="inputAmount">Nominal Bantuan</label>' +
                                           '<input type="text" class="form-control" placeholder="Nominal Bantuan">' +
                                       '</div>' +
                                   '</div>' +
                               '</div>';
            // Append the dynamically created fields to the appropriate container
            $('#dynamicFields').append(dynamicField);
        } else {
            // If checkbox is unchecked, remove only the dynamically added fields associated with it
            $(this).closest('.form-check').siblings('.dynamic-field').remove();
        }
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize datepicker for birth date
        $('#birth_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
        
        // Initialize datepicker for waktu pemberian bantuan
        $('#bantuan').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
<script>
    document.getElementById('anakForm').addEventListener('submit', function(event) {
        let requiredFields = ['nama', 'nik', 'kk', 'birth_date', 'kelamin', 'agama', 'provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'rtrw', 'alamat', 'ktp', 'ppks', 'kategori', 'kasus'];
        let valid = true;
        let message = 'Harap isi semua kolom yang diperlukan: \n';

        requiredFields.forEach(function(field) {
            let input = document.getElementById(field);
            if (!input.value) {
                valid = false;
                message += '- ' + input.getAttribute('name') + '\n';
            }
        });

        if (!valid) {
            alert(message);
            event.preventDefault();
        }
    });
</script>
@endsection
 