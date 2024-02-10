<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function store(CustomerRequest $customerRequest)
    {

        Customer::create($customerRequest->all());
        return redirect()->route('customers.index')->with("info", "Le client a été
    créé avec succès");
    }

    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('fronts.customers.edit', compact('customer'));
    }


    public function update(CustomerRequest $customerRequest, $id)
    {
        $customer = Customer::find($id);
        $customer->customer_name = $customerRequest->input('customer_name');
        $customer->update();
        return redirect()->route('customers.index')->with("info", "Le client a ete modifiee avec succes");
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return back()->with("info", "Le client a bien ete supprimée dans la base de données");
    }
}
