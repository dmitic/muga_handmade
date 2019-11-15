<?php

namespace App\Http\Controllers;

use App\Fakture;
use App\Stavke;
use Illuminate\Http\Request;

class FaktureUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    // vraća fakture samo od trenutno ulogovanog korisnika
    public function index(){
        $fakture = Fakture::with('stavke')
            ->where('user_id', \Auth::user()->id)
            ->orderBy('created_at', 'desc')->paginate(10);
        return view('user.fakture.fakture', compact('fakture'));
    }

    public function show($id){
        $narudzbenica = Fakture::where('id', $id)->firstOrFail();
        $stavke = Stavke::where('fakture_id', $id)->get();
        return view('user.fakture.faktureDetailsUser', compact('stavke', 'narudzbenica'));
    }
}
