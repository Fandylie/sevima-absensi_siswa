<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class adminCRUD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = user::all();

        return view('admin_data_admin')->with([
            'title'=>'Data Admin',
            'admin' =>true,
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
        return view('admin_tambah_admin')->with([
            'title'=>'Tambah Admin',
            'admin'=>true
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
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'User Name harus di isi',
            'password.required' => 'Password harus di Isi'
        ]);

        $data = [
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ];

        user::create($data);

        return redirect('admin/admin')->with([
            'success' => 'Berhasil Menambahkan Admin'
        ]);

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

        user::where('id',$id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Admin');

    }
}
