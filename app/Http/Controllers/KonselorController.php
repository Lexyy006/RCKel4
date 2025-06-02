<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use Illuminate\Http\Request;

class KonselorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $konselor = Konselor::all();

        return view('konselor.index',['konselor'=>$konselor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $konselor = Konselor::all();
        return view ('konselor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kodekonselor'=>'required',
            'email'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            ],[
            'kodekonselor.required' => 'Kode Konselor Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'password.requied'=>'Password Wajib Diisi',
            'nama.required'=>'Nama Wajib Diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin Wajib Diisi',
                
            ]);
            $data =[
                'kodekonselor' => $request->input('kodekonselor'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'nama' => $request->input('nama'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
            ];
            Konselor::create($data);
            return redirect('konselor')->with('success','Data Konselor Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konselor $konselor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodekonselor)
    {
        //
        $data = Konselor::where('kodekonselor',$kodekonselor)->first();
        return view('konselor.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodekonselor)
    {
        //
        $request->validate([
            'kodekonselor'=>'required',
            'email'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            ],[
            'kodekonselor.required' => 'Kode Konselor Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'password.requied'=>'Password Wajib Diisi',
            'nama.required'=>'Nama Wajib Diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin Wajib Diisi',
        ]);

        $data =[
                'kodekonselor' => $request->input('kodekonselor'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'nama' => $request->input('nama'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
        ];

        Konselor::where('kodekonselor',$kodekonselor)->update($data);
        return redirect('konselor')->with('success','Data Konselor Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodekonselor)
    {
        //
        $data = Konselor::where('kodekonselor',$kodekonselor)->first();
        Konselor::where('kodekonselor',$kodekonselor)->delete();
        return redirect('konselor')->with('success','Data Konselor Berhasil Dihapus');
    }
}
