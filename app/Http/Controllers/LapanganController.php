<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index() {
        $datas = Lapangan::all();
        return view('admin-lapangan', compact('datas'));
    }
    public function create() {}

    public function store(Request $request) {
        $request->validate([
            'nama'=>"required",
            'harga_per_jam'=>"required|numeric",
            'tipe'=>"required",
            'lokasi'=>"required",
            'deskripsi'=>"required",
            "gambar"=>"required|image|mimes:jpeg,png,jpg|max:2048",
            'status'=>"required"
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('uploads/lapangan'), $filename);
            $data['gambar'] = 'uploads/lapangan/' . $filename;
        }

        Lapangan::create($data);
        return redirect("admin/lapangan")->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id) {
        $datas = Lapangan::findOrFail($id);

        return view('admin-lapangan-show', compact('datas'));
    }
    
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
