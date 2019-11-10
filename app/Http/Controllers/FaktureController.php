<?php

namespace App\Http\Controllers;

use App\Fakture;
use App\Stavke;
use Illuminate\Http\Request;

class FaktureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('testUserRole');
    }

    // vraća samo realizovane fakture
    public function index(){
        $fakture = Fakture::with('stavke')
            ->whereNotNull('completed_at')
            ->orderBy('completed_at', 'desc')->paginate(20);
        return view('admin.fakture.realizovane', compact('fakture'));
    }

    // vraća samo nerealizovane fakture
    public function neRealizovaneIndex(){
        $fakture = Fakture::with('stavke')
            ->whereNull('completed_at')
            ->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.fakture.nerealizovane', compact('fakture'));
    }

    // pretraga faktura
    public function search(){
        $str = htmlspecialchars($_GET['str']); 

        $fakture = Fakture::with('stavke')
                ->where('name', 'like', '%' . $str . '%')
                ->orWhere('narudzbenica_br', 'like', '%' . $str . '%')
                ->orWhere('first_name', 'like', '%' . $str . '%')
                ->orWhere('last_name', 'like', '%' . $str . '%')
                ->orWhere('city', 'like', '%' . $str . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(20);
                
        return view('admin.fakture.pretragaFaktura', compact('fakture'));
    }
}
