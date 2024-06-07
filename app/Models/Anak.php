<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $fillable = ['nama','nik','kk','birth_date','kelamin','agama','provinsi','kabupaten','kecamatan','kelurahan','rtrw','alamat','ktp','ppks','kategori','kasus','kebutuhan','hidup_layak','perawatan','dukungan_keluarga','terapi','pelatihan','kewirausahaan','aksesibilitas','foto','bantuan','petugas'];
}
