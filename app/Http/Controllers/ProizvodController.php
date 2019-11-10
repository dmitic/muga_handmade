<?php

namespace App\Http\Controllers;

use File;
use App\Slike;
use App\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

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
        // snimanje proizvoda u bazu i validacija
        $tmp = Proizvod::updateOrCreate(['id' => $proizvod->id], request()->validate([
            'naziv' => 'required|max:255',
            'tip_obuce' => 'required|max:255',
            'materijali' => 'required|max:255',
            'djon' => 'required|max:255',
            'boja' => 'required|max:255',
            'sezona' => 'required|max:255',
            'pol' => 'required|max:255',
            'opis' => 'string|nullable|max:1000',
            'napomena' => 'string|nullable|max:1000',
            'cena' => 'required|max:255',
        ]));
        
        $imeSlike = time().'_' . str_replace(' ', '_', $_FILES["slika"]["name"]);
        $imgTnmName = $_FILES["slika"]["tmp_name"];
        $imagePath = 'images/';
        
        $path = public_path() . '/' . $imagePath . str_replace(' ', '-', $tmp->naziv);
        File::makeDirectory($path, $mode = 0777, true, true);
        
        if($imgTnmName !== '') {
            Slike::insert(['proizvod_id' =>  $tmp->id , 'slika' => str_replace(' ', '-', $tmp->naziv) . '/' . $imeSlike]);
            move_uploaded_file($imgTnmName, $path . '/' . $imeSlike);
        }

        return redirect(route('proizvodDetaljnije', $tmp));
    }

    public function dodajSliku(Proizvod $proizvod){
        $imeSlike = time() . '_' . str_replace(' ', '_', $_FILES["slika"]["name"]);
        $imgTnmName = $_FILES["slika"]["tmp_name"];
        $imagePath = 'images/';

        $path = public_path() . '/' . $imagePath . str_replace(' ', '-', $proizvod->naziv);
        File::makeDirectory($path, $mode = 0777, true, true);

        if($imgTnmName !== '') {
            Slike::insert(['proizvod_id' =>  $proizvod->id , 'slika' => str_replace(' ', '-', $proizvod->naziv) . '/' . $imeSlike]);
            move_uploaded_file($imgTnmName, $path . '/' . $imeSlike);
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

        // brisanje praznog foldera
        $FileSystem = new Filesystem();
        $tmp = str_replace(' ', '-', $proizvod->naziv);
        $directory = public_path() . '\images\\' . $tmp;
        if ($FileSystem->exists($directory)) {
            $files = $FileSystem->files($directory);
            if (empty($files))
                $FileSystem->deleteDirectory($directory);
        }
        return redirect('/admin/proizvodi');
    }

    public function search(){
        $str = htmlspecialchars($_GET['str']); 

        $proizvodi = Proizvod::with('slike')
            ->where('naziv', 'like', '%' . $str . '%')
            ->orWhere('tip_obuce', 'like', '%' . $str . '%')
            ->orWhere('materijali', 'like', '%' . $str . '%')
            ->orWhere('sezona', 'like', '%' . $str . '%')
            ->orWhere('pol', 'like', '%' . $str . '%')
            ->orWhere('napomena', 'like', '%' . $str . '%')
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