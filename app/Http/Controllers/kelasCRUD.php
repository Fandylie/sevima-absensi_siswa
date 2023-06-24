<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_kelas;


class kelasCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = tb_kelas::all();
        return view('admin_data_kelas')->with([
            'kelas' =>true,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin_tambah_kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'namakelas' => 'required',
            'walikelas' => 'required',

        ],[
            'namakelas.required' => 'Nama kelas belum di isi',
            'walikelas.required' => 'Wali kelas belum di isi'
        ]);

        $data =[
            'namakelas' => $request->namakelas,
            'walikelas' => $request->walikelas,
            'tahunajaran' => $request->tahunajaran
        ];

        tb_kelas::create($data);
        return redirect('admin/kelas')->with('success','Berhasil menambah kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        tb_kelas::where('id',$id)->delete();

        return redirect()->back()->with('success','Berhasil menghapus kelas');

    }
}
