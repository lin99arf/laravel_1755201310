<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use Datatables;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('matakuliah.index');
    }

    public function mk_list()
    {
        $matkul = Matakuliah::all();
        return Datatables::of($matkul)
            ->addIndexColumn()
            ->addColumn('action', function($matkul){
                $action = '<a class="text-primary" href="/mk/edit/'.$matkul->kode_matakuliah.'">Edit</a>';
                $action .= ' | <a class="text-danger" href="/mk/delete/'.$matkul->kode_matakuliah.'">Hapus</a>';
                return $action;
            })
            ->make();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|digits:4',
            'nama_matakuliah' => 'required',
        ]);

        Matakuliah::create($request->all());

        return redirect()->route('mk.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Matakuliah $matakuliah, $id)
    {
        $matkul = Matakuliah::where('kode_matakuliah', $id)->first();
        return view('matakuliah.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request -> validate([
            'nama_matakuliah' => 'required',
        ]);

        $matakuliah->update($request->all());
        return redirect()->route('mk.index')
        ->with('success', 'Data telah diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('mk.index')
        ->with('success', 'Data telah dihapus.');
    }
}
