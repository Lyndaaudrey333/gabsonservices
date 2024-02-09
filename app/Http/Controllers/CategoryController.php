<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category as CategoryRequest;

class CategoryController extends Controller
{
    //
    public function store(CategoryRequest $categoryRequest)
    {
        Category::create($categoryRequest->all());
        return redirect()->route('categories.index')->with("info", "La catégorie a été
    créé avec succès");
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('fronts.categories.edit', compact('category'));
    }


    public function update(CategoryRequest $categoryRequest, $id)
    {
            $category=Category::find($id);
            $category->category_name= $categoryRequest->input('category_name');
            $category->update();

        return redirect()->route('categories.index')->with("info", "Votre catégorie a ete modifiee avec succes");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return back()->with("info", "La categorie a bien ete supprimée dans la base de données");
    }
}
