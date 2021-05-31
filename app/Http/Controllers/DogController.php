<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{

    public function index()
    {
        return Dog::all();
    }

    
    public function store(Request $request)
    {
        Dog::create($request->all());
        return Dog::all();
    }


    public function show($id)
    {
        return Dog::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->all());        
        return Dog::all();        
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
    
        return Dog::all();
    }
}
