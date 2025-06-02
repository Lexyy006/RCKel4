<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $siswa = Siswa::all();

        return view('siswa.index',['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $siswa = Siswa::all();
        return view ('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kodesiswa'=>'required',
            'email'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            ],[
            'kodesiswa.required' => 'Kode Siswa Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'password.requied'=>'Password Wajib Diisi',
            'nama.required'=>'Nama Wajib Diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin Wajib Diisi',
                
            ]);
        
        $data =[
            'kodesiswa' => $request->input('kodesiswa'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ];
        Siswa::create($data);
        return redirect('siswa')->with('success','Data Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodesiswa)
    {
        //
        $data = Siswa::where('kodesiswa',$kodesiswa)->first();
        return view('siswa.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodesiswa)
    {
        //
        $request->validate([
            'kodesiswa'=>'required',
            'email'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            ],[
            'kodesiswa.required' => 'Kode Siswa Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'password.requied'=>'Password Wajib Diisi',
            'nama.required'=>'Nama Wajib Diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin Wajib Diisi',
                
            ]);
        
        $data =[
            'kodesiswa' => $request->input('kodesiswa'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ];

        Siswa::where('kodesiswa',$kodesiswa)->update($data);
        return redirect('siswa')->with('success','Data Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodesiswa)
    {
        //
        $data = Siswa::where('kodesiswa',$kodesiswa)->first();
        Siswa::where('kodesiswa',$kodesiswa)->delete();
        return redirect('siswa')->with('success','Data Siswa Berhasil Dihapus');
    }
}
