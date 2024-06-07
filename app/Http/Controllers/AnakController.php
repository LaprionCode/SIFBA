<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $anak = Anak::latest()->paginate(10);
        return view('anak/index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anak/tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     // Prepare kebutuhan array with details
    $kebutuhan = $request->kebutuhan;
    $uraianBantuan = $request->uraian_bantuan;
    $nominalBantuan = $request->nominal_bantuan;
    $kebutuhanDetails = [];

    if ($kebutuhan) {
        foreach ($kebutuhan as $item) {
            $kebutuhanDetails[$item] = [
                'uraian_bantuan' => $uraianBantuan[$item] ?? null,
                'nominal_bantuan' => $nominalBantuan[$item] ?? null,
            ];
        }
    }
        // Handle file uploads
        $ktpPath = $request->file('ktp')->storeAs('public/ktp', $request->file('ktp')->hashName());
        $ppksPath = $request->file('ppks')->storeAs('public/ppks', $request->file('ppks')->hashName());
        $fotoPath = $request->file('foto')->storeAs('public/foto', $request->file('foto')->hashName());
    
        // Save the data into the database
        $anak = Anak::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'birth_date' => $request->birth_date,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rtrw' => $request->rtrw,
            'alamat' => $request->alamat,
            'ktp' => $ktpPath,
            'ppks' => $ppksPath,
            'kategori' => $request->kategori,
            'kasus' => $request->kasus,
            'kebutuhan' => json_encode($request->kebutuhan),
            'hidup_layak' => $request->hidup_layak,
            'perawatan' => $request->perawatan,
            'dukungan_keluarga' => $request->dukungan_keluarga,
            'terapi' => $request->terapi,
            'pelatihan' => $request->pelatihan,
            'kewirausahaan' => $request->kewirausahaan,
            'aksesibilitas' => $request->aksesibilitas,
            'foto' => $fotoPath,
            'bantuan' => $request->bantuan,
            'petugas' => $request->petugas,
        ]);
    
        if ($anak) {
            return redirect()->route('anak.index')->with(['success' => 'Data Berhasil DiSimpan!']);
        } else {
            return redirect()->route('anak.index')->with(['error' => 'Data gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Anak $anak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anak = Anak::findOrFail($id);
        return view('anak.update', compact('anak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $anak = Anak::findOrFail($id);

        // Handle file uploads
        $ktpPath = $anak->ktp;
        $ppksPath = $anak->ppks;
        $fotoPath = $anak->foto;
    
        if ($request->hasFile('ktp')) {
            $ktpPath = $request->file('ktp')->storeAs('public/ktp', $request->file('ktp')->hashName());
        }
    
        if ($request->hasFile('ppks')) {
            $ppksPath = $request->file('ppks')->storeAs('public/ppks', $request->file('ppks')->hashName());
        }
    
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->storeAs('public/foto', $request->file('foto')->hashName());
        }
    
        // Update the data in the database
        $updateSuccess = $anak->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'birth_date' => $request->birth_date,
            'kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rtrw' => $request->rtrw,
            'alamat' => $request->alamat,
            'ktp' => $ktpPath,
            'ppks' => $ppksPath,
            'kategori' => $request->kategori,
            'kasus' => $request->kasus,
            'kebutuhan' => json_encode($request->kebutuhan),
            'hidup_layak' => $request->hidup_layak,
            'perawatan' => $request->perawatan,
            'dukungan_keluarga' => $request->dukungan_keluarga,
            'terapi' => $request->terapi,
            'pelatihan' => $request->pelatihan,
            'kewirausahaan' => $request->kewirausahaan,
            'aksesibilitas' => $request->aksesibilitas,
            'foto' => $fotoPath,
            'bantuan' => $request->bantuan,
            'petugas' => $request->petugas,
        ]);
    
        if ($updateSuccess) {
            return redirect()->route('anak.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            return redirect()->route('anak.index')->with(['error' => 'Data gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anak = Anak::findOrFail($id);
        $deleteSuccess = $anak->delete();
    
        if ($deleteSuccess) {
            return redirect()->route('anak.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('anak.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
