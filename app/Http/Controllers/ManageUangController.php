<?php

namespace App\Http\Controllers;

use App\Models\ManageUang;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ManageUangController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.dashboard');
    }

    public function history()
    {
        return view('pages.history.history');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'jenis_jajananharian' => 'required',
            'uangsaku' => 'required|numeric',
        ]);

        if ($data['harga'] > $data['uangsaku']) {
            $data['message'] = $data['harga'] - $data['uangsaku'];
        } else {
            $data['message'] = $data['uangsaku'] - $data['harga'];
        }
        auth()->user()->manageuangs()->create($data);

        return back()->with('sukses', 'data disimpan');
    }

    public function showData()
    {
        $datas = auth()->user()->manageuangs()->latest()->first();

        return view('pages.dashboard.dashboard', ['datas' => $datas]);
    }

    public function showAllData()
    {
        $data1 = ManageUang::where('user_id', auth()->id())->get();
        return view('pages.history.history', compact('data1'));
    }

    public function destroy($id)
    {
        $dataa = ManageUang::findOrFail($id);
        $dataa->delete();
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $data = ManageUang::where('id', $id)
            ->where('user_id', auth()->id()) // biar aman
            ->firstOrFail();

        return view('pages.history.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ManageUang::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $validated = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required|numeric',
            'jenis_jajananharian' => 'required',
            'uangsaku' => 'required|numeric',
        ]);

        if ($validated['harga'] > $validated['uangsaku']) {
            $validated['message'] = $validated['harga'] - $validated['uangsaku'];
        } else {
            $validated['message'] = $validated['uangsaku'] - $validated['harga'];
        }

        $data->update($validated);

        return redirect()->to('/history')->with('sukses', 'Data berhasil diupdate');
    }
}
