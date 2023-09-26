<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function index()
    {
        $countPerizinan = Perizinan::all()->count();
        return \view('dashboard', ['perizinan' => $countPerizinan]);
    }
}
