<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategorias = response()->json(Kategoria::all());
        return $kategorias;
    }

    public function show($id)
    {
        $kategorias = response()->json(Kategoria::find($id));
        return $kategorias;
    }

    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }

    public function store(Request $request){
        $kategoria = new Kategoria();
        $kategoria -> nev = $request->nev;
        $kategoria->save();
    }
    
    public function update(Request $request, $id){
        $kategoria = Kategoria::find($id);
        $kategoria->nev = $request->nev;
        $kategoria->save();
    }

    
}
