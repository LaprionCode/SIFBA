<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Anak;

class DashboardController extends Controller
{
    public function index()
    {
        $anak = Anak::latest()->paginate(10);

        // Calculate totals
        $totals = [
            'Anak' => Anak::where('kategori', 'Anak')->count(),
            'Lansia' => Anak::where('kategori', 'Lansia')->count(),
            'Disabilitas' => Anak::where('kategori', 'Disabilitas')->count(),
            'Rentan' => Anak::where('kategori', 'Rentan')->count(),
            'ODHA' => Anak::where('kategori', 'ODHA')->count(),
        ];

        return view('anak.lapor', compact('anak', 'totals'));
    }
}
