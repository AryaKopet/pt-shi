<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request)
    {
        Material::create($request->all());
        return redirect()->route('materials.index');
    }

    public function edit(Material $material)
    {
        return view('materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material)
    {
        $material->update($request->all());
        return redirect()->route('materials.index');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->route('materials.index');
    }
}
