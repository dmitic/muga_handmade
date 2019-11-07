<?php

namespace App\Http\Controllers;

use App\User;
use App\Proizvod;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('testUserRole');
    }

    public function index(){
        return view('admin.home');
    }

}