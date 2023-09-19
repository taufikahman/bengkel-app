<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parts;
use PDF;

class PartsController extends Controller
{
    //
    function index() {
        $parts = Parts::all();
        return view('content/BengkelNet/parts/index', ['parts' => $parts]);
    }
    function laporan() {
        $parts = Parts::all();
        return view('content/BengkelNet/parts/laporan', ['parts' => $parts]);
    }
    public function create()
    {
        return view('content/BengkelNet/parts/create');
    }
    function store(Request $request)  {
        $data = $request->all();
        Parts::create([
            'spk' => $data['spk'],
            'nama_parts' => $data['nama_parts'],
            'jenis_kerja' => $data['jenis_kerja'],
            'biaya_jasa' => $data['biaya_jasa'],
            'input_users' => $data['inputer_user'],
            'type_parts' => $data['type_parts'],
            'status' => $data['status'],
        ]);
        session()->flash('success', 'Data berhasil disimpan.');
        return redirect()->to('parts');
    }
    function edit($id)  {
        $parts = Parts::find($id);
        return view('content/BengkelNet/parts/edit',['parts' => $parts]);
    }
    function update(Request $request,$id) {
        $parts = Parts::find($id);
        $parts->spk =$request->input('spk');
        $parts->nama_parts =$request->input('nama_parts');
        $parts->jenis_kerja =$request->input('jenis_kerja');
        $parts->biaya_jasa =$request->input('biaya_jasa');
        $parts->type_parts =$request->input('type_parts');
        $parts->status =$request->input('status');
        $parts->input_user ="system";
        $parts->save();
        return redirect()->to('parts');
    }
    function destroy($id){
        $parts = Parts::find($id);

   
    
        $parts->delete();
    
        return redirect()->route('parts.index')
            ->with('success', 'Data berhasil dihapus');
    }
    public function cetak_pdf()
    {
    $parts = Parts::all();
    $pdf = PDF::loadView('parts_pdf', compact('parts'));

    return  $pdf->stream();
    }

}
