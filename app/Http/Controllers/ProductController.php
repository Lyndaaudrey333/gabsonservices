<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest; ///////6+

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;



class ProductController extends Controller
{
    public function store(ProductRequest $productRequest)
    {
        // dd($productRequest);
        Product::create($productRequest->all());

        return redirect()->route('products.index')->with("info", "Le produit a été
    créé avec succès");
    }

    public function edit($id)
    { $categories=Category::get();
        $units=Unit::get();
        $suppliers=Supplier::get();

        $product = Product::find($id);

        return view('fronts.products.edit', compact('product','categories','suppliers','units'));
    }


    public function update(productRequest $productRequest, $id)
    {
       
        $product = Product::find($id);
        $product->product_name = $productRequest->input('product_name');
        $product->quantity = $productRequest->input('quantity');
        $product->category_id = $productRequest->input('category_id');
        $product->unit_id = $productRequest->input('unit_id');
        $product->supplier_id = $productRequest->input('supplier_id');
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
