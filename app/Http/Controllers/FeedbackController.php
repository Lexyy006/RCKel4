<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $feedback = Feedback::all();

        return view('feedback.index',['feedback'=>$feedback]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $feedback = Feedback::all();
        return view ('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kodesiswa'=>'required',
            'kodekonselor'=>'required',
            'id_pesan'=>'required',
            'tanggal'=>'required',
            'isi'=>'required',
            ],[
            'kodesiswa.required' => 'Kode Siswa Wajib Diisi',
            'kodekonselor.required'=>'Kode Konselor Wajib Diisi',
            'id_pesan.requied'=>'Id Pesan Wajib Diisi',
            'tanggal.required'=>'Tanggal Wajib Diisi',
            'isi.required'=>'Isi Wajib Diisi',
                
            ]);
            $data =[
                'kodesiswa' => $request->input('kodesiswa'),
                'kodekonselor' => $request->input('kodekonselor'),
                'id_pesan' => $request->input('id_pesan'),
                'tanggal' => $request->input('tanggal'),
                'isi' => $request->input('isi'),
            ];
            Feedback::create($data);
            return redirect('feedback')->with('success','Data Feedback Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kodefeedback)
    {
        //
        $data = Feedback::where('kodefeedback',$kodefeedback)->first();
        return view('feedback.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $kodefeedback)
    {
        //
        $request->validate([
            'kodesiswa'=>'required',
            'kodekonselor'=>'required',
            'id_pesan'=>'required',
            'tanggal'=>'required',
            'isi'=>'required',
            ],[
            'kodesiswa.required' => 'Kode Siswa Wajib Diisi',
            'kodekonselor.required'=>'Kode Konselor Wajib Diisi',
            'id_pesan.requied'=>'Id Pesan Wajib Diisi',
            'tanggal.required'=>'Tanggal Wajib Diisi',
            'isi.required'=>'Isi Wajib Diisi',
                
            ]);
            $data =[
                'kodesiswa' => $request->input('kodesiswa'),
                'kodekonselor' => $request->input('kodekonselor'),
                'id_pesan' => $request->input('id_pesan'),
                'tanggal' => $request->input('tanggal'),
                'isi' => $request->input('isi'),
            ];
            Feedback::create($data);
            return redirect('feedback')->with('success','Data Feedback Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kodefeedback)
    {
        //
        $data = Feedback::where('kodefeedback',$kodefeedback)->first();
        Feedback::where('kodefeedback',$kodefeedback)->delete();
        return redirect('feedback')->with('success','Data Feedback Berhasil Dihapus');
    }
}
