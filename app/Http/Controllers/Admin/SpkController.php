<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Spk;
use PDF;
class SpkController extends Controller
{
    //
    function index() {
        $spk = Spk::join('member_table', 'spk.id_member', '=', 'member_table.id_member')
        ->select('spk.*', 'member_table.kode_member','member_table.nama_member') 
        ->get();
        
        return view('content/BengkelNet/spk/index', ['spk' => $spk]);
    }
    function laporan() {
        $spk = Spk::join('member_table', 'spk.id_member', '=', 'member_table.id_member')
        ->select('spk.*', 'member_table.kode_member','member_table.nama_member') 
        ->get();
        
        return view('content/BengkelNet/spk/laporan', ['spk' => $spk]);
    }

    function create() {
         $member = Member::all();
        
        return view('content/BengkelNet/spk/create',['member',$member]);
    }

    function store(Request $request) {
        $data = $request->all();
        $kodeMember = $data["kode_member"];
        $member = Member::where('kode_member', $kodeMember)->first();
        Spk::create([
        'id_member'=>$member->id_member,
        'ticket_no'=>$data["ticket_no"],
        'keterangan'=>$data["keterangan"],
        'no_hp'=>$data["no_hp"],
        'reff_no'=>$data["reff_no"],
        'kodisi_spk'=>$data["kondisi_spk"],
        ]);
        session()->flash('success', 'Data berhasil disimpan.');
        return redirect()->to('spk');
    }

    function edit($id)  {
        $spk = Spk::find($id);
        $member = Member::where('id_member', $spk->id_member)->first();

        return view('content/BengkelNet/spk/edit',['spk' => $spk,'member' => $member]);
    }

    function update() {
        dd("masuk");
    
    }
    function destroy($id) {
        $spk = Spk::find($id);

   
    
        $spk->delete();
    
        return redirect()->route('spk.index')
            ->with('success', 'Data berhasil dihapus');
        
    }
    public function cetak_pdf()
    {
    $spk = Spk::all();
    $pdf = PDF::loadView('spk_pdf', compact('spk'));

    return  $pdf->stream();
    }
    
}
