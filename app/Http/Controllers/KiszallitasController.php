<?php

namespace App\Http\Controllers;

use App\Models\Kiszallitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KiszallitasController extends Controller
{
     public function index()
    {
        return Kiszallitas::with(['alapitvany', 'adomany'])->get();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'alapitvanyId' => 'required',
            'adomanyId' => 'required',
            'megrendelesDatuma' => 'required',
            'elszallitasDatuma' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $kiszallitas = Kiszallitas::create($request->all());

        return response()->json(['Siker' => 'Kiszállítás rögzítve'],201);
    }

    public function update(Request $request, $id)
    {
        $kiszallitas = Kiszallitas::find($id);

        if (is_null($kiszallitas)) {
            return response()->json(['Hiba' => 'Nem létezik adományozó ilyen ID-val'],404);
        }

        $validator = Validator::make($request->all(), [
            'alapitvanyId' => 'required',
            'adomanyId' => 'required',
            'megrendelesDatuma' => 'required',
            'elszallitasDatuma' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['Hiba' => 'Valamelyik kötelező adat hiányzik'],401);
        }

        $kiszallitas->update($request->all());

        return response()->json(['Siker' => 'Adományozó frissítve'],200);
    }

    public function destroy($id)
    {
        $kiszallitas = Kiszallitas::find($id);

        if (is_null($kiszallitas)) {
            return response()->json(['Hiba' => 'Nem létezik kiszállítás ilyen ID-val'],404);
        }

        $kiszallitas->delete();

        return response()->json(['Siker' => 'Kiszállítás törölve'],200);
    }

    public function getById($id)
    {
        $kiszallitas = Kiszallitas::find($id);

        if (is_null($kiszallitas)) {
            return response()->json(['Hiba' => 'Nincs ilyen ID-jű kiszállítás'],404);
        }

        return response()->json($kiszallitas, 200);
    }
}
