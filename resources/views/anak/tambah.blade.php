@extends('template/master')
@section('content')
<style>
.btn-custom {
    background-color: #4CAF50; /* Replace with your custom color */
    color: white;
}
</style>
<h1>Form Tambah Data PPKS</h1>
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form 1 : Identitas PPKS</h3>
        </div>
        <form action="{{ route('anak.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="nama" 
                        name="nama" placeholder="Masukkan Nama" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nomor Induk Pendudukan</label>
                        <input type="text" class="form-control" id="nik" 
                        name="nik" placeholder="Masukkan NIK" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nomor Kartu Keluarga</label>
                        <input type="text" class="form-control" id="kk" 
                        name="kk" placeholder="Masukkan Kartu Keluarga" required>
                    </div> 
                </div>
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" id="birth_date" 
                        name="birth_date" placeholder="Masukkan Tanggal Lahir" required>
                    </div> 
                </div> 

                <div class="row">
                <div class="col col-md-12 form-group">
            <label class="my-1 mr-2" for="kelamin">Jenis Kelamin</label>
            <select class="custom-select my-1 mr-sm-2" id="kelamin" name="kelamin" >
             <option value="Laki-Laki">Laki-Laki</option>
             <option value="Perempuan">Perempuan</option>
            </select>
            </div> </div>

            <div class="row">
            <div class="col col-md-12 form-group">
            <label class="my-1 mr-2" for="agama">Agama</label>
            <select class="custom-select my-1 mr-sm-2" id="agama" name="agama">
             <option value="Islam">Islam</option>
             <option value="Buddha">Buddha</option>
             <option value="Kristen">Kristen</option>
             <option value="Katolik">Katolik</option>
             <option value="Kongucu">Kongucu</option>
             <option value="Hindu">Hindu</option>
            </select> </div> </div>

            <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" 
                        name="provinsi" placeholder="Masukkan Provinsi" required>
                    </div> 
                </div>

            <div class="form-row">
             <div class="col-md-4 mb-3">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" 
                placeholder="kabupaten" required>
            </div>
            <div class="col-md-4 mb-3">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name ="kecamatan" 
                placeholder="Kecamatan" required>
            </div>
            <div class="col-md-4 mb-3">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" 
                placeholder="Kelurahan" required>
            </div> </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
            <label for="rtrw">RT/RW</label>
            <input type="text" class="form-control" id="rtrw" name="rtrw"
                placeholder="RT/RW" required>
            </div>
            <div class="col-md-4 mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"
                placeholder="Alamat" required>
            </div> </div>

                <div class="row">
                    <div class="co col-md-12 form-group">
                        <label for="ktp">Foto KTP</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ktp" name="ktp" required>
                                <label class="custom-file-label" for="ktp">Pilih Foto KTP</label>
                            </div>
                        </div> </div> </div>
                        <div class="row">
                    <div class="co col-md-12 form-group">
                        <label for="ppks">Foto PPKS</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="ppks" name="ppks" required>
                                <label class="custom-file-label" for="ppks">Pilih Foto PPKS</label>
                            </div>
                        </div> </div> </div>

            
    <!--             why the FORM   here         -->
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
             <option value="Anak">Anak</option>
             <option value="Disabilitas">Disabilitas</option>
             <option value="Lansia">Lansia</option>
             <option value="Korban Bencana">Korban Bencana</option>
             <option value="Rentan">Rentan</option>
             <option value="ODHA">ODHA</option>
            </select>
             </div> </div>
        <div class="form-group">
            <label for="kasus">Permasalahan / Gambaran Kasus</label>
            <textarea class="form-control" id="kasus" name="kasus" rows="3"></textarea>
        </div>
        <div id="dynamicFields">
                <div class="row">
        <div class="col-md-12">
            <label>Kebutuhan / Komponen Layanan Yang DiButuhkan</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pemenuhan Hidup Layak" id="hidupLayakCheckbox" name="kebutuhan[]" onchange="toggleInputs('hidupLayak')">
                <label class="form-check-label" for="hidupLayakCheckbox">1. Pemenuhan Hidup Layak</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Perawatan" id="perawatanCheckbox" name="kebutuhan[]" onchange="toggleInputs('perawatan')">
                <label class="form-check-label" for="perawatanCheckbox">2. Perawatan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Dukungan Keluarga" id="dukunganCheckbox" name="kebutuhan[]" onchange="toggleInputs('dukungan')">
                <label class="form-check-label" for="dukunganCheckbox">3. Dukungan Keluarga</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Terapi" id="terapiCheckbox" name="kebutuhan[]" onchange="toggleInputs('terapi')">
                <label class="form-check-label" for="terapiCheckbox">4. Terapi</label>
            </div>
            <!-- Repeat for other checkboxes -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pelatihan Vokasional" id="pelatihanCheckbox" name="kebutuhan[]" onchange="toggleInputs('pelatihan')">
                <label class="form-check-label" for="pelatihanCheckbox">5. Pelatihan Vokasional</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Kewirausahaan" id="kewirausahaanCheckbox" name="kebutuhan[]" onchange="toggleInputs('kewirausahaan')">
                <label class="form-check-label" for="kewirausahaanCheckbox">6. Kewirausahaan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Dukungan Aksesibilitas" id="aksesibilitasCheckbox" name="kebutuhan[]" onchange="toggleInputs('aksesibilitas')">
                <label class="form-check-label" for="aksesibilitasCheckbox">6. Dukungan Aksesibilitas</label>
            </div>
        </div>
    </div>

    <div class="row mt-3" id="hidupLayakInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Pemenuhan Hidup Layak - Uraian</label>
            <input type="text" class="form-control" name="hidup_layak_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Pemenuhan Hidup Layak - Nominal</label>
            <input type="number" class="form-control" name="hidup_layak_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>
    <div class="row mt-3" id="perawatanInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Perawatan - Uraian</label>
            <input type="text" class="form-control" name="perawatan_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Perawatan - Nominal</label>
            <input type="number" class="form-control" name="perawatan_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>
    <div class="row mt-3" id="dukunganInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Dukungan Keluarga - Uraian</label>
            <input type="text" class="form-control" name="dukungan_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Dukungan Keluarga - Nominal</label>
            <input type="number" class="form-control" name="dukungan_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>
    <div class="row mt-3" id="terapiInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Terapi - Uraian</label>
            <input type="text" class="form-control" name="terapi_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Terapi - Nominal</label>
            <input type="number" class="form-control" name="terapi_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>
    <!-- Repeat similar blocks for other categories -->
    <div class="row mt-3" id="pelatihanInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Pelatihan Vokasional - Uraian</label>
            <input type="text" class="form-control" name="pelatihan_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Pelatihan Vokasional - Nominal</label>
            <input type="number" class="form-control" name="pelatihan_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>
    <div class="row mt-3" id="kewirausahaanInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Kewirausahaan - Uraian</label>
            <input type="text" class="form-control" name="kewirausahaan_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Kewirausahaan - Nominal</label>
            <input type="number" class="form-control" name="kewirausahaan_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>
    <div class="row mt-3" id="aksesibilitasInputs" style="display: none;">
        <div class="col col-md-6 form-group">
            <label>Dukungan Aksesibilitas - Uraian</label>
            <input type="text" class="form-control" name="aksesibilitas_uraian" placeholder="Masukkan Uraian">
        </div>
        <div class="col col-md-6 form-group">
            <label>Dukungan Aksesibilitas - Nominal</label>
            <input type="number" class="form-control" name="aksesibilitas_nominal" placeholder="Masukkan Nominal">
        </div>
    </div>

    
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
      <input type="text" class="form-control" id="bantuan"  name="bantuan" placeholder="Waktu Pemberian Bantuan" >

  <div class="row">
        <div class="co col-md-12 form-group">
            <label for="exampleInputFile">Upload Foto Pemberian Bantuan</label>
                <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto" required>
                    <label class="custom-file-label" for="exampleInputFile">Upload Foto Pemberian Bantuan</label>
                    </div>
                        </div> </div> </div>
    <div class="row">
    <div class="col col-md-12 form-group">
      <label for="kelurahan">Nama Petugas Pemberi Bantuan</label>
      <input type="text" class="form-control" id="petugas" name="petugas" placeholder="Nama Petugas" >
       </div> </div>
</div></div>
<!-- TOMBOL TAMBAH DATA!!!!!! -->
</div> 
</div>
<div class= "card-footer">
    <button type="submit" class="btn btn-custom btn-block col-12">Tambah</button>
</div> 
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
<script>     function toggleInputs(category) {
        const checkbox = document.getElementById(category + 'Checkbox');
        const inputs = document.getElementById(category + 'Inputs');
        inputs.style.display = checkbox.checked ? 'block' : 'none';
    }
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