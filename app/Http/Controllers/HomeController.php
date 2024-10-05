<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $anak = Anak::latest()->paginate(10);
        return view('anak/lapor', compact('anak'));
    }
}
