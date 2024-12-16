<?php

namespace App\Http\Controllers;

use App\Models\ChildData;
use Illuminate\Http\Request;

class ChildDataController extends Controller
{
    /**
     * Menampilkan semua data anak.
     */
    public function index()
    {
        $childData = ChildData::all();
        return view('child_data.index', compact('childData'));
    }

    /**
     * Menampilkan form untuk menambahkan data anak.
     */
    public function create()
    {
        return view('child_data.create');
    }

    /**
     * Menyimpan data anak baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'immunization_history' => 'nullable|string',
        ]);

        // Pastikan pengguna login
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk menambahkan data.');
        }

        // Simpan data anak
        ChildData::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'dob' => $request->dob,
            'weight' => $request->weight,
            'height' => $request->height,
            'immunization_history' => $request->immunization_history,
        ]);

        return redirect()->route('child_data.index')->with('success', 'Data anak berhasil ditambahkan.');
    }


    public function show(ChildData $childData)
    {
        return view('child_data.show', compact('childData'));
    }


    /**
     * Menampilkan form untuk mengedit data anak.
     */
    public function edit(ChildData $childData)
    {
        return view('child_data.edit', compact('childData'));
    }

    /**
     * Memperbarui data anak di database.
     */
    public function update(Request $request, ChildData $childData)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'immunization_history' => 'nullable|string',
        ]);

        $childData->update($request->only(['name', 'dob', 'weight', 'height', 'immunization_history']));

        return redirect()->route('child_data.index')->with('success', 'Data anak berhasil diperbarui.');
    }


    /**
     * Menghapus data anak dari database.
     */
    public function destroy(ChildData $childData)
    {
        $childData->delete();

        return redirect()->route('child_data.index')->with('success', 'Data anak berhasil dihapus.');
    }
}
