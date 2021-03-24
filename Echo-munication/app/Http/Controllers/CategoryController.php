<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //LIST ALL CATEGORY
    public function index()
    {
        $categories = Category::has('tutorials')->get();
        return response()->json($categories);
    }
    //ADD NEW CATEGORY
    public function store(Request $request)
    {
        $category = new Category([
            'title' => $request->input('title'),
            'image' => $request->input('image')
        ]);
        $category->save();

        return response()->json('CATEGORIE AJOUTEE');
    }
    //SHOW CATEGORY BY ID
    public function show(Category $category)
    {
        //
    }
    //UPDATE CATEGORY
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());

        return response()->json('CATEGORIE MODIFIEE!');
    }
    //DELETE CATEGORY
    public function destroy($id) 
    {
        $category = Category::find($id);
        $category->delete();

        return response()->json('CATEGORIE SUPPRIMEE!');
    }
}
