<?php

namespace App\Http\Controllers;

use App\Models\Adomanyozo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdomanyozoController extends Controller
{

    public function index()
    {
        return Adomanyozo::with('ember')->get();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nev'   => 'required',
            'email' => 'required',
            'jelszo'=> 'required',
            'ember' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $adomanyozo = Adomanyozo::create($request->all());

        return response()->json(['Név' => $adomanyozo->nev],204);
    }

    public function update(Request $request, $id)
    {
        $adomanyozo = Adomanyozo::find($id);

        if (is_null($adomanyozo)) {
            return response()->json(['Hiba' => 'Nem létezik adományozó ilyen ID-val'],404);
        }

        $validator = Validator::make($request->all(), [
            'nev'   => 'required',
            'email' => 'required',
            'jelszo'=> 'required',
            'ember' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $adomanyozo->update($request->all());

        return response()->json(['Siker' => 'Adományozó frissítve'],200);
    }

    public function destroy($id)
    {
        $adomanyozo = Adomanyozo::find($id);

        if (is_null($adomanyozo)) {
            return response()->json(['Hiba' => 'Nem létezik adományozó ilyen ID-val'],404);
        }

        $adomanyozo->delete();

        return response()->json(['Siker' => 'Adományozó törölve'],200);
    }

    public function getById($id)
    {
        $adomanyozo = Adomanyozo::find($id);

        if (is_null($adomanyozo)) {
            return response()->json(['Hiba' => 'Nincs ilyen ID-jű adományozo'],404);
        }

        return response()->json($adomanyozo, 200);
    }
}
