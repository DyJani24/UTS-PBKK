<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return categorie::all();
    }

    public function store(Request $request)
    {
        return categorie::create($request->all());
    }

    public function show($id)
    {
        return categorie::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $category = categorie::findOrFail($id);
        $category->update($request->all());
        return $category;
    }

    public function destroy($id)
    {
        categorie::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
