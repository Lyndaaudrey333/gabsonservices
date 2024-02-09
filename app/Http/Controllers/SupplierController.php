<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\Supplier as SupplierRequest;

class SupplierController extends Controller
{
    public function store(SupplierRequest $supplierRequest)
    {
        Supplier::create($supplierRequest->all());
        return redirect()->route('suppliers.index')->with("info", "Le fournisseur a été
    créé avec succès");
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('fronts.suppliers.edit', compact('supplier'));
    }


    public function update(SupplierRequest $supplierRequest, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->supplier_name = $supplierRequest->input('supplier_name');
        $supplier->update();
        return redirect()->route('suppliers.index')->with("info", "Le fournisseur a ete modifiee avec succes");
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return back()->with("info", "Le fournisseur a bien ete supprimée dans la base de données");
    }
}
