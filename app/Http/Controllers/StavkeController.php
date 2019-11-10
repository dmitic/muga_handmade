<?php

namespace App\Http\Controllers;

use App\Stavke;
use App\Fakture;
use Illuminate\Http\Request;

class StavkeController extends Controller
{
    public function index($id){
        $narudzbenica = Fakture::where('id', $id)->first();
        $stavke = Stavke::where('fakture_id', $id)->get();
        return view('admin.fakture.faktureDetails', compact('stavke', 'narudzbenica'));
    }
}
