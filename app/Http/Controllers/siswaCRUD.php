<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_siswa;
use App\Models\tb_kelas;


class siswaCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $datasiswa = tb_siswa::all();

        
        return view('admin_data_siswa')->with([
            'title' => 'Data Siswa',
            'datasiswa'=>$datasiswa
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

        $kelas = tb_kelas::get('namakelas');
        return view('admin_tambah_siswa')->with([
            'title' => 'Tambah Siswa',
            'tambahsiswa' => true,
            'kelas' => $kelas
        ]);    

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
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'tahunmasuk' => 'required',
        ],[
            'nisn.required' => 'NISN Harus Di Isi',
            'nis.required' => 'NIS Harus Di Isi',
            'nama.required' => 'Nama Harus Di Isi',
            'kelas.required' => 'Kelas Harus Di Pilih',
            'tempatlahir.required' => 'Tempat Lahir Harus Di Isi',
            'tanggallahir.required' => 'Tanggal Harus Di Isi',
            'tahunmasuk.required' => 'Tahun Masuk Harus Di Pilih',
        ]);

        if(tb_siswa::where('nisn', $request->nisn)->first()){
            return redirect()->back()->withInput()->with('danger','NISN sudah digunakan');
        }

        $data = [
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->nisn,
            'agama' => $request->agama,
            'kelas' => $request->kelas,
            'jeniskelamin' => $request->jeniskelamin,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'tahunmasuk' => $request->tahunmasuk,
        ];


        tb_siswa::create($data);

        return redirect()->back()->with('success','Data berhasil ditambah password sama dengan nisn');

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

        tb_siswa::where('id',$id)->delete();

    }
}
