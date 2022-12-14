<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class PegawaiController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPegawai = Pegawai::with('jabatan')->latest()->paginate(5);
        return view('Pegawai.Data-Pegawai', compact('dtPegawai'));
    }

     public function cetakPegawai()
    {
        $dtCetakpegawai = Pegawai::with('jabatan')->get();
        return view('Pegawai.Cetak-pegawai', compact('dtCetakpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jab = Jabatan::all();
        $dtnipPegawai =Pegawai::all();
        $pen = DB::table('pegawai')->select(DB::raw('MAX(RIGHT(nip,3)) as kode'));
        $kd="";
        if($pen->count()>0){
            foreach ($pen->get() as $k) {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else{
            $kd = "001";
        }
        return view('Pegawai.Create-Pegawai',compact('jab','kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan_id,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        return redirect('data-pegawai')->with('toast_success', 'Data Berhasil Ditambahkan!');
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
    public function edit($pegawai_id)
    {
        $jab = Jabatan::all();
        $peg = Pegawai::with('jabatan')->findOrFail($pegawai_id);
        return view('Pegawai.Edit-Pegawai', compact('peg','jab'));
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
        $peg = Pegawai::findOrFail($id);
        $peg->update($request->all());
        return redirect('data-pegawai')->with('toast_success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pegawai_id)
    {
         $peg = Pegawai::findOrFail($pegawai_id);
         $peg->delete();
         return back()->with('info', 'Data Berhasil Didelete!');
    }
    public function cetakForm(){
        return view('Pegawai.Cetak-pegawaiForm');
    }
    public function cetakPegawaiPertanggal($tglawal, $tglakhir){
        // dd(["Tanggal Awal: ".$tglawal, "Tanggal Akhir:".$tglakhir]);
         $cetakPertanggal = Pegawai::with('Jabatan')->whereBetween('tanggal_lahir',[$tglawal, $tglakhir])->latest()->get();
         return view('Pegawai.Cetak-pegawaiPertanggal', compact('cetakPertanggal'));

    }
   
}
