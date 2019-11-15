<?php

namespace App\Http\Controllers;

use App\User;
use App\User_details;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('testUserRole');
    }

    public function show(){
        $user = User::find(\Auth::user()->id);
        return view('user.details', compact('user'));
    }

    public function edit(){
        $user = User::find(\Auth::user()->id);
        return view('user.edit', compact('user'));
    }

    public function update(){

        $user = User::find(\Auth::user()->id);

        DB::beginTransaction();
            try {
                request()->validate([
                    'first_name' => 'required|max:255',
                    'last_name' => 'required|max:255',
                    'phone' => 'required',
                    'address' => 'required|max:255',
                    'city' => 'required|max:255',
                    'zip' => 'required|max:20',
                    'state' => 'required|max:255',
                ]);
                    
                $user->update([
                    'phone' => request()->phone,
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
                    DB::commit();
                    return redirect('/user/detaljnije/')
                            ->withErrors(['poruka' => 'Podaci su izmenjeni!']);
            } catch (\Exception $e) {
                
                DB::rollback();
                return redirect()->back()
                        ->withErrors(['poruka' => 'Došlo je do greške, pokušajte ponovo! ']);
                        // ->withErrors(['poruka' => 'Došlo je do greške, pokušajte ponovo! ' . $e->getMessage()]);
            }

        // return redirect('/user/detaljnije/');
    }
}