<?php

namespace App\Http\Controllers;

use App\User;
use App\User_details;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'name' => 'required|max:255|alpha_dash',
            'email' => 'required|email|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'zip' => 'required|max:20|regex:/^[0-9]+$/',
            'state' => 'required|max:255',
        ]);
        try {
            DB::beginTransaction();
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

            DB::commit();
                return redirect(route('detalji', $user))
                        ->withErrors(['poruka' => 'Podaci su izmenjeni!']);

        } catch (\Exception $e) {
            
            DB::rollback();
            return redirect()->back()
                    ->withErrors(['poruka' => 'Došlo je do greške, pokušajte ponovo! ' . $e->getMessage()]);
        }
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/admin/korisnici')->withErrors(['poruka' => 'Korisnik je obrisan!']);
    }
    
    public function search(){
        $str = htmlspecialchars($_GET['str'] ?? ''); 

        $users = User::with('details')
                ->where('name', 'like', '%' . $str . '%')
                ->orWhere('email', 'like', '%' . $str . '%')
                ->orWhereHas('details', function($query) use ($str){
                    $query->where('first_name', 'like', '%' . $str . '%');
                })
                ->orWhereHas('details', function($query) use ($str){
                    $query->where('last_name', 'like', '%' . $str . '%');
                })
                ->orWhereHas('details', function($query) use ($str){
                    $query->where('city', 'like', '%' . $str . '%');
                })
                ->paginate(10);

        return view('admin.korisnici', compact('users'));
    }
}