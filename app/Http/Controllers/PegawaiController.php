<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = User::where('level', 'pegawai')->get();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->jk);
        $request->validate([
            'nama' => ['required', 'string'],
            'nip' => ['required', 'string'],
            'telp' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'alamat' => ['required', 'string']
        ]);

        User::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'level' => 'pegawai'
        ]);

        return redirect()->route('pegawai.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = User::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'string'],
            'nip' => ['required', 'string'],
            'telp' => ['required', 'string'],
            'jk' => ['required', 'string'],
            'alamat' => ['required', 'string']
        ]);

        User::where('id', $id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'level' => 'pegawai'
        ]);

        return redirect(route('pegawai.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect(route('pegawai.index'));
    }
}
