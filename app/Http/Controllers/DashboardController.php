<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monev;
use App\Models\Ptb;
use App\Models\Akademik;
use App\Models\Diktendik;
use App\Models\Kemahasiswaan;

class DashboardController extends Controller
{
    public function showDashboard()
{
    $monevKelembagaanCount = Monev::count();

    $ptbCount = Ptb::count();

    $akademikCount = Akademik::count();

    $diktendikCount = Diktendik::count();

    $kemahasiswaanCount = Kemahasiswaan::count();

    return view('dashboard', compact('monevKelembagaanCount', 'ptbCount', 'akademikCount', 'diktendikCount', 'kemahasiswaanCount'));
}

}
