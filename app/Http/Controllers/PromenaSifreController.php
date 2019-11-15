<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;

class PromenaSifreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('user.sifra');
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'min:8'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return back()->withErrors(['Šifra je uspešno promenjena!']);
    }

    public function indexAdmin(User $user){
        $user = User::findOrFail($user)->first();
        return view('admin.sifra', compact('user'));
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'new_password' => ['required', 'min:8'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::findOrFail($request->trigger)->update(['password'=> Hash::make($request->new_password)]);
   
        return back()->withErrors(['Šifra je uspešno promenjena!']);
    }
}
