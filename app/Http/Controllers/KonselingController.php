<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $konseling = Konseling::all();

        return view('konseling.index',['konseling'=>$konseling]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $konseling = Konseling::all();
        return view ('konseling.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kodekonseling'=>'required',
            'id_konselor'=>'required',
            'id_siswa'=>'required',
            'status'=>'required',
            'pesan'=>'required',
            'tanggal'=>'required',
            ],[
            'kodekonseling.required' => 'Kode Konseling Wajib Diisi',
            'id_konselor.required'=>'Id Konselor Wajib Diisi',
            'id_siswa.requied'=>'Id Siswa Wajib Diisi',
            'status.required'=>'Status Wajib Diisi',
            'pesan.required'=>'Pesan Wajib Diisi',
            'tanggal.required'=>'Tanggal Wajib Diisi',
                
            ]);
            $data =[
                'kodekonseling' => $request->input('kodekonseling'),
                'id_konselor' => $request->input('id_konselor'),
                'id_siswa' => $request->input('id_siswa'),
                'status' => $request->input('status'),
                'pesan' => $request->input('pesan'),
                'tanggal' => $request->input('tanggal'),
            ];
            Konseling::create($data);
            return redirect('konseling')->with('success','Data Konseling Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konseling $konseling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodekonseling)
    {
        //
        $data = Konseling::where('kodekonseling',$kodekonseling)->first();
        return view('konseling.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodekonseling)
    {
        //
        $request->validate([
            'kodekonseling'=>'required',
            'id_konselor'=>'required',
            'id_siswa'=>'required',
            'status'=>'required',
            'pesan'=>'required',
            'tanggal'=>'required',
            ],[
            'kodekonseling.required' => 'Kode Konseling Wajib Diisi',
            'id_konselor.required'=>'Id Konselor Wajib Diisi',
            'id_siswa.requied'=>'Id Siswa Wajib Diisi',
            'status.required'=>'Status Wajib Diisi',
            'pesan.required'=>'Pesan Wajib Diisi',
            'tanggal.required'=>'Tanggal Wajib Diisi',
        ]);

        $data =[
            'kodekonseling' => $request->input('kodekonseling'),
            'id_konselor' => $request->input('id_konselor'),
            'id_siswa' => $request->input('id_siswa'),
            'status' => $request->input('status'),
            'pesan' => $request->input('pesan'),
            'tanggal' => $request->input('tanggal'),
        ];

        Konseling::where('kodekonseling',$kodekonseling)->update($data);
        return redirect('konseling')->with('success','Data Konseling Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodekonseling)
    {
        //
        $data = Konseling::where('kodekonseling',$kodekonseling)->first();
        Konseling::where('kodekonseling',$kodekonseling)->delete();
        return redirect('konseling')->with('success','Data Konseling Berhasil Dihapus');
    }
}
