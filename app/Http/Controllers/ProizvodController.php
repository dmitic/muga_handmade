<?php

namespace App\Http\Controllers;

use App\Proizvod;
use App\Slike;
use Illuminate\Http\Request;

class ProizvodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('testUserRole');
    }
    
    public function index(){
        $proizvodi = Proizvod::with('slike')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.proizvodi', compact('proizvodi'));
    }

    public function show(Proizvod $proizvod){
        return view('admin.detailsProizvodi', compact('proizvod'));
    }

    public function edit(Proizvod $proizvod){
        return view('admin.editProizvoda', compact('proizvod'));
    }

    public function update(Proizvod $proizvod){
        // dd(now()->year);
        // snimanje proizvoda u bazu i validacija
        $tmp = Proizvod::updateOrCreate(['id' => $proizvod->id], request()->validate([
            'naziv' => 'required|max:255',
            'tip_obuce' => 'required|max:255',
            'materijali' => 'required|max:255',
            'djon' => 'required|max:255',
            'boja' => 'required|max:255',
            'sezona' => 'required|max:255',
            'pol' => 'required|max:255',
            'opis' => 'string|max:1000',
            'napomena' => 'string|max:1000',
            'cena' => 'required|max:255',
        ]));
            
        $imeSlike = time().'_'.$_FILES["slika"]["name"];
        $imgTnmName = $_FILES["slika"]["tmp_name"];
        $imagePath = 'images/';


        if($imgTnmName !== '') {
            Slike::insert(['proizvod_id' =>  $tmp->id , 'slika' => $imeSlike]);
            move_uploaded_file($imgTnmName, $imagePath . $imeSlike);
        }
        // dd($tmp);
        return redirect(route('proizvodDetaljnije', $tmp));
    }

    public function dodajSliku(Proizvod $proizvod){

            $imeSlike = time().'_'.$_FILES["slika"]["name"];
            $imgTnmName = $_FILES["slika"]["tmp_name"];
            $imagePath = 'images/';
    
            if($imgTnmName !== '') {
                Slike::insert(['proizvod_id' =>  $proizvod->id , 'slika' => $imeSlike]);
                move_uploaded_file($imgTnmName, $imagePath . $imeSlike);
            }
            return redirect(route('proizvodDetaljnije', $proizvod));
    }

    public function destroy(Proizvod $proizvod){
        // brisanje slika za obrisani proizvod
        $slike = Slike::where('proizvod_id', $proizvod->id)->get();
        foreach($slike as $slika){
            if(file_exists('images/' . $slika->slika))
                unlink('images/' . $slika->slika);
        }

        // brisanje proizvoda
        $proizvod->delete();
        return redirect('/admin/proizvodi');
    }

    public function search(){
        $str = htmlspecialchars($_GET['str']); 

        $proizvodi = Proizvod::with('slike')
                ->where('naziv', 'like', '%' . $str . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

        return view('admin.proizvodi', compact('proizvodi'));
    }
}





// public function create(Proizvod $proizvod){
    //     $data = request()->validate([
    //         'naziv' => 'max:255',
    //         'tip_obuce' => 'max:255',
    //         'materijali' => 'max:255',
    //         'djon' => 'max:255',
    //         'sezona' => 'max:255',
    //         'opis' => 'max:1000',
    //         'napomena' => 'max:1000',
    //         'slika' => 'max:255',
    //     ]);

    //         dd($data);

    //     // User_details::updateOrCreate([
    //     //     'user_id' => $user->id
    //     //     ],
    //     //     [
    //     //     'first_name' => request()->first_name,
    //     //     'last_name' => request()->last_name,
    //     //     'phone' => request()->phone,
    //     //     'address' => request()->address,
    //     //     'address' => request()->address,
    //     //     'city' => request()->city,
    //     //     'zip' => request()->zip,
    //     //     'state' => request()->state,
    //     //     ]);

    //     // return redirect('/admin/detalji/' . $user->id);
    // }

    // update or create
    // validacija
    // $data = request()->validate([
    //     'naziv' => 'required|max:255',
    //     'tip_obuce' => 'required|max:255',
    //     'materijali' => 'required|max:255',
    //     'djon' => 'required|max:255',
    //     'boja' => 'required|max:255',
    //     'sezona' => 'required|max:255',
    //     'pol' => 'required|max:255',
    //     'opis' => 'max:1000',
    //     'napomena' => 'max:1000',
    //     'cena' => 'required|max:255',
    // ]);
    
    // snimanje proizvoda u bazu
    // $tmp = Proizvod::updateOrCreate([
    //     'id' => $proizvod->id
    //     ],
    //     [
    //     'naziv' => request()->naziv,
    //     'tip_obuce' => request()->tip_obuce,
    //     'materijali' => request()->materijali,
    //     'boja' => request()->boja,
    //     'djon' => request()->djon,
    //     'pol' => request()->pol,
    //     'sezona' => request()->sezona,
    //     'opis' => request()->opis,
    //     'napomena' => request()->napomena,
    //     'cena' => request()->cena,
    //     ]);