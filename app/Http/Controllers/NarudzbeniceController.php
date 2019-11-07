<?php

namespace App\Http\Controllers;

use App\Fakture;
use Illuminate\Http\Request;

class NarudzbeniceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('testUserRole');
    }
    
    public function index(){
        $narudzbenice = Fakture::all();
        return view('admin.narudzbenice', compact('narudzbenice'));
    }
}
