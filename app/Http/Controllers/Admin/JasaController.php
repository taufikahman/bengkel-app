<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jasa;
use PDF;


class JasaController extends Controller
{
    function index()  {
        $jasa = Jasa::all();
         return view('content/BengkelNet/jasa/index',compact('jasa',$jasa));
    }
    function laporan()  {
        $jasa = Jasa::all();
         return view('content/BengkelNet/jasa/laporan',compact('jasa',$jasa));
    }
    function create()  {
        return view('content/BengkelNet/jasa/create');
    }
    function store(Request $request)  {
        $data = $request->all();
        Jasa::create([
            'spk' => $data['spk'],
            'nama_jasa' => $data['nama_jasa'],
            'jenis_kerja' => $data['jenis_kerja'],
            'biaya' => $data['biaya'],
            'input_users' => $data['input_users'],
            'template_jasa' => $data['template_jaasa'],
            'status' => $data['status'],
        ]);
        session()->flash('success', 'Data berhasil disimpan.');
        return redirect()->to('jasa');
    }
    function edit($id)  {
        $jasa = Jasa::find($id);
        
        return view('content/BengkelNet/jasa/edit',compact('jasa'));
    }
    function update(Request $request,$id)  {
        $jasa = Jasa::find($id);
        $jasa->spk =$request->input('spk');
        $jasa->nama_jasa =$request->input('nama_jasa');
        $jasa->jenis_kerja =$request->input('jenis_kerja');
        $jasa->biaya =$request->input('biaya');
        $jasa->template_jasa =$request->input('template_jaasa');
        $jasa->status =$request->input('status');

        $jasa->save();
        return redirect()->to('jasa');
    }
    public function destroy($id)
    {
        $jasa = Jasa::find($id);
    
        $jasa->delete();
    
        return redirect()->to('jasa')
            ->with('success', 'Data berhasil dihapus');
    }
    public function cetak_pdf()
    {
    $jasa = Jasa::all();
    $pdf = PDF::loadView('jasa_pdf', compact('jasa'));

    return  $pdf->stream();
    }

}
