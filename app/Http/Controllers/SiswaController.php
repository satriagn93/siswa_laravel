<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        return view('siswa.create');
    }

    public function post(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil disimpan');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa'=> $siswa]);
    }

    public function update(Request $request,$id)
    {
//        dd($request->all());
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
//        ============================================
        return redirect('/siswa')->with('update','Data berhasil di update');

    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('delete','Data berhasil dihapus');
    }

    public function show($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.show',['siswa' => $siswa]);
    }
}
