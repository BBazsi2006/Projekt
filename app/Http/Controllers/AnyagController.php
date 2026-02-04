<?php

namespace App\Http\Controllers;

use App\Models\Anyag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnyagController extends Controller
{
    public function index()
    {
        return Anyag::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nev' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'A név megadása kötelező'],401);
        }

        $anyag = Anyag::create($request->all());

        return response()->json(['Siker' => 'Anyag létrehozva'],200);
    }

    public function update(Request $request, $id)
    {
        $anyag = Anyag::find($id);

        if (is_null($anyag)) {
            return response()->json(['Hiba' => 'Nem létezik anyag ilyen ID-val'],404);
        }

        $validator = Validator::make($request->all(), [
            'nev' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'A név megadása kötelező'],401);
        }

        $anyag->update($request->all());

        return response()->json(['Siker' => 'Anyag frissítve'],200);
    }

    public function destroy($id)
    {
        $anyag = Anyag::find($id);

        if (is_null($anyag)) {
            return response()->json(['Hiba' => 'Nem létezik anyag ilyen ID-val'],404);
        }

        $anyag->delete();

        return response()->json(['Siker' => 'Anyag törölve'],200);
    }

    public function getById($id)
    {
        $anyag = Anyag::find($id);

        if (is_null($anyag)) {
            return response()->json(['Hiba' => 'Nincs ilyen ID-jű anyag'],404);
        }

        return response()->json($anyag, 200);
    }
}
