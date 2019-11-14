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
            'postava' => 'required|max:255',
            'pol' => 'required|max:255',
            'opis' => 'string|nullable|max:1000',
            'napomena' => 'string|nullable|max:1000',
            'cena' => 'required|max:255',
        ]));

        $imeSlike = time().'_' . str_replace(' ', '_', $_FILES["slika"]["name"]);
        $imgTnmName = $_FILES["slika"]["tmp_name"];
        $imagePath = 'images/';

        $tmpSlike = str_replace('-', '', $tmp->naziv);
        $tmpSlike = str_replace(' ', '_', $tmpSlike);
        $tmpSlike = str_replace('#', '', $tmpSlike);
        $tmpSlike = str_replace('"', '', $tmpSlike);
        $tmpSlike = str_replace('š', 's', $tmpSlike);
        $tmpSlike = str_replace('Ž', 'z', $tmpSlike);
        
        $path = public_path() . '/' . $imagePath . $tmpSlike;

        File::makeDirectory($path, $mode = 0777, true, true);
        
        if($imgTnmName !== '') {
            Slike::insert(['proizvod_id' =>  $tmp->id , 'slika' => $tmpSlike . '/' . $imeSlike]);
            move_uploaded_file($imgTnmName, $path . '/' . $imeSlike);
        }

        return redirect(route('proizvodDetaljnije', $tmp));
    }

    public function dodajSliku(Proizvod $proizvod){
        $imeSlike = time() . '_' . str_replace(' ', '_', $_FILES["slika"]["name"]);
        $imgTnmName = $_FILES["slika"]["tmp_name"];
        $imagePath = 'images/';
        
        $tmpDir = str_replace('-', '', $proizvod->naziv);
        $tmpDir = str_replace(' ', '_', $tmpDir);
        $tmpDir = str_replace('#', '', $tmpDir);
        $tmpDir = str_replace('"', '', $tmpDir);
        $tmpDir = str_replace('š', 's', $tmpDir);
        $tmpDir = str_replace('Ž', 'z', $tmpDir);

        

        $path = public_path() . '/' . $imagePath . $tmpDir;
        File::makeDirectory($path, $mode = 0777, true, true);

        if($imgTnmName !== '') {
            Slike::insert(['proizvod_id' =>  $proizvod->id , 'slika' => $tmpDir . '/' . $imeSlike]);
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
            ->orWhere('postava', 'like', '%' . $str . '%')
            ->orWhere('napomena', 'like', '%' . $str . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);


        return view('admin.proizvodi', compact('proizvodi'));
    }
}