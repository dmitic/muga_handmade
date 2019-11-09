<?php

namespace App\Http\Controllers;

use App\User;
use App\User_details;

// use App\Http\Controllers\InpuT;

use Illuminate\Http\Request;

class KorisniciController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('testUserRole');
    }
    
    public function index(){
        $users = User::with('details')->paginate(10);
        return view('admin.korisnici', compact('users'));
    }

    public function show(User $user){
        return view('admin.details', compact('user'));
    }

    public function edit(User $user){
        return view('admin.edit', compact('user'));
    }

    public function update(User $user){
        request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'zip' => 'required|max:20|regex:/^[0-9]+$/',
            'state' => 'required|max:255',
        ]);

        $user->update([
            'name' => request()->name, 
            'email' => request()->email,
            'phone' => request()->phone,
            'is_admin' => request()->is_admin,
            ]);


        User_details::updateOrCreate([
            'user_id' => $user->id
            ],
            [
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'address' => request()->address,
            'city' => request()->city,
            'zip' => request()->zip,
            'state' => request()->state,
            ]);
            
        return redirect(route('detalji', $user));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/admin/korisnici');
    }
    
    public function search(){
        $str = htmlspecialchars($_GET['str']); 

        $users = User::with('details')
                ->where('name', 'like', '%' . $str . '%')
                ->paginate(10);

        return view('admin.korisnici', compact('users'));
    }
}



// public function update(User $user){
//     $data = request()->validate([
//         'name' => 'required|max:255',
//         'email' => 'required|email|max:255',
//         'first_name' => 'required|max:255',
//         'last_name' => 'required|max:255',
//         'phone' => 'required|',
//         'address' => 'required|max:255',
//         'city' => 'required|max:255',
//         'zip' => 'required|max:20|regex:/^[0-9]+$/',
//         'state' => 'required|max:255',
//     ]);

//     $user->update([
//         'name' => request()->name, 
//         'email' => request()->email,
//         'phone' => request()->phone,
//         'is_admin' => request()->is_admin,
//         ]);


//     User_details::updateOrCreate([
//         'user_id' => $user->id
//         ],
//         [
//         'first_name' => request()->first_name,
//         'last_name' => request()->last_name,
//         'address' => request()->address,
//         'city' => request()->city,
//         'zip' => request()->zip,
//         'state' => request()->state,
//         ]);