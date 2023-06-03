<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monev;
use App\Models\Ptb;

class DashboardController extends Controller
{
    public function showDashboard()
{
    $monevKelembagaanCount = Monev::count();

    $ptbCount = Ptb::count();

    return view('dashboard', compact('monevKelembagaanCount', 'ptbCount'));
}

}
