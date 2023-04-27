<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptController extends Controller
{
    public function index()
    {
        $recepts = response()->json(Recept::all());
        return $recepts;
    }

    public function show($id)
    {
        $recepts = response()->json(Recept::find($id));
        return $recepts;
    }

    public function destroy($id)
    {
        Recept::find($id)->delete();
    }

    public function store(Request $request){
        $recept = new Recept();
        $recept -> nev = $request->nev;
        $recept->save();
    }
    
    public function update(Request $request, $id){
        $recept = Recept::find($id);
        $recept->nev = $request->nev;
        $recept->save();
    }

    public function kategoriaval(){
        $recepts = DB::table('recepts as r')
        ->select('r.id', 'k.nev as kategoria', 'r.nev', 'r.kep_eleresi_ut', 'r.leiras')
        ->join('kategorias as k', 'r.kategoria', '=', 'k.id')
        ->get();
        return $recepts;
    }

    public function kategoriaSzures($kategoria){
        $recepts = DB::table('recepts as r')
        ->select('r.id', 'k.nev as kategoria', 'r.nev', 'r.kep_eleresi_ut', 'r.leiras')
        ->join('kategorias as k', 'r.kategoria', '=', 'k.id')
        ->where('k.id', '=', $kategoria)
        ->get();
        return $recepts;
    }
}
