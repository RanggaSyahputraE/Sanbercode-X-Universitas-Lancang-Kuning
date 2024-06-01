<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller {
    public function index() {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    public function create() {
        return view('cast.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:45',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        Cast::create($request->all());
        return redirect()->route('cast.index')->with('success', 'Cast created successfully.');
    }

    public function show($id) {
        $cast = Cast::findOrFail($id);
        return view('cast.show', compact('cast'));
    }

    public function edit($id) {
        $cast = Cast::findOrFail($id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|max:45',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        $cast = Cast::findOrFail($id);
        $cast->update($request->all());
        return redirect()->route('cast.index')->with('success', 'Cast updated successfully.');
    }

    public function destroy($id) {
        $cast = Cast::findOrFail($id);
        $cast->delete();
        return redirect()->route('cast.index')->with('success', 'Cast deleted successfully.');
    }
}
