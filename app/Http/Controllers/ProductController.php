<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    public function store(ProductRequest $productRequest)
    {
        Product::create($productRequest->all());
        return redirect()->route('products.index')->with("info", "Le produit a été
    créé avec succès");
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('fronts.products.edit', compact('product'));
    }


    public function update(productRequest $productRequest, $id)
    {
        $product = Product::find($id);
        $product->product_name = $productRequest->input('product_name');
        $product->update();
        return redirect()->route('products.index')->with("info", "Le produit a ete modifiee avec succes");
    }

    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();

        return back()->with("info", "Le produit a bien ete supprimée dans la base de données");
    }
}
