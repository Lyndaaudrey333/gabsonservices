<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Http\Requests\UnitRequest;

class UnitController extends Controller
{
    public function store(UnitRequest $unitRequest)
    {
        Unit::create($unitRequest->all());
        return redirect()->route('units.index')->with("info", "Unité a été
    créé avec succès");
    }

    public function edit($id)
    {
        $Unit = Unit::find($id);

        return view('fronts.units.edit', compact('unit'));
    }


    public function update(UnitRequest $unitRequest, $id)
    {
        $unit = Unit::find($id);
        $unit->unit_name = $unitRequest->input('unit_name');
        $unit->update();
        return redirect()->route('units.index')->with("info", "Unité a ete modifiee avec succes");
    }

    public function destroy($id)
    {
        $Unit = Unit::find($id);
        $Unit->delete();

        return back()->with("info", "Unité a bien ete supprimée dans la base de données");
    }
}


// class UnitController extends Controller
// {
//     //
// }
