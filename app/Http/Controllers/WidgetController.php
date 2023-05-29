<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monev;

class WidgetController extends Controller
{
    public function showWidget()
    {
        $dataKelembagaan = Monev::count();
    
        return view('dashboard', compact('dataKelembagaan'));
    }
    
}
