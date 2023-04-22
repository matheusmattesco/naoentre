<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $Tag = Tag::all();
        
        return view('Tag.index', ['Tag' => $Tag]);
    }

    public function create()
    {
        return view('Tag.create');
    }

    public function store(Request $request)
    {    

        Tag::create([
            'name' => $request->input('name'),
            'uuid' => $request->input('uuid'),
            
        ]);

        return redirect()->action([TagController::class, 'index']);
    }

    public function edit(Tag $Tag)
    {                
        return view('Tag.edit', ['Tag' => $Tag]);
    }

    public function update(Request $request, Tag $Tag)
    {
        $Tag->name =  $request->input('name');
        $Tag->uuid = $request->input('uuid');
        $user->save();


        return redirect()->action([TagController::class, 'index']);
    }

    public function destroy(Tag $CTag)
    {
        $Tag->delete();
        
        return redirect()->action([TagController::class, 'index']);
    }

}
