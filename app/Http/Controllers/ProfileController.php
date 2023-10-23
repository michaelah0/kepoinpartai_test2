<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilePartai;

class PartaiController extends Controller
{
    public function showPDIPProfile()
    {
        $profile_pdip = DB::table('profile_partai')
                        ->where('nama_partai', 'Partai Demokrasi Indonesia Perjuangan (PDIP)')->value('nama_partai')
                        ->first();
        return view('partai.pdip', compact('profile_pdip'));
    }
}