<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $Categories = Categories::all();
        
        return view('categories.index', ['categories' => $Categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {    

        Categories::create([
            'name' => $request->input('name'),
            'uuid' => $request->input('uuid'),
            'description' => $request->input('description'),
            
        ]);

        return redirect()->action([CategoriesController::class, 'index']);
    }

    public function edit(Categories $Categories)
    {                
        return view('Categories.edit', ['Categories' => $Categories]);
    }

    public function update(Request $request, Categories $Categories)
    {
        $Categories->name =  $request->input('name');
        $Categories->uuid = $request->input('uuid');
        $Categories->description = $request->input('description');
        $user->save();


        return redirect()->action([CategoriesController::class, 'index']);
    }

    public function destroy(Categories $Categories)
    {
        $Categories->delete();
        
        return redirect()->action([CategoriesController::class, 'index']);
    }

}
