<?php

namespace App\Http\Controllers\Admin;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
class MemberController extends Controller
{
    public function index()
    {
         $members = Member::all(); // Mengambil semua data dari model

        return view('content/BengkelNet/member/index', ['members' => $members]);
    }
    public function laporan()
    {
         $members = Member::all(); // Mengambil semua data dari model

        return view('content/BengkelNet/member/laporan', ['members' => $members]);
    }

    public function create()
    {
        return view('content/BengkelNet/member/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namaMember' => 'required',
            'pic' => 'required',
            'tlp' => 'required',
            'namaBank' => 'required',
            'noRekening' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'status' => 'required',
            'careworkshop_id' => 'required',
            'namaRekening' => 'required'
        ]);
        $latestMember = Member::generateUniqueMemberCode();
       

        Member::create([
            'kode_member' => $latestMember,
            'nama_member' => $validatedData['namaMember'],
            'pic' => $validatedData['pic'],
            'telepon' => $validatedData['tlp'],
            'nama_bank' => $validatedData['namaBank'],
            'no_rekening' => $validatedData['noRekening'],
            'atas_nama' => $validatedData['namaRekening'],
            'email' => $validatedData['email'],
            'alamat_lengkap' => $validatedData['alamat'],
            'kota' => $validatedData['kota'],
            'status' => $validatedData['status'],
            'careworkshop_id' => $validatedData['careworkshop_id'],
            
        ]);
        session()->flash('success', 'Data berhasil disimpan.');

        // Kemudian, lakukan redirect ke halaman yang dituju
        return redirect()->to('members');
    }
    function edit($id_member){
        $member = Member::where('id_member', $id_member)->first();
        return view('content/BengkelNet/member/edit',compact('member'));
    }
    function update(Request $request,$id_member ){
        $validatedData = $request->validate([
            'namaMember' => 'required|string|max:255',
            'pic' => 'required|string|max:255',
            'tlp' => 'required|string|max:15',
            'namaBank' => 'nullable|string|max:255',
            'noRekening' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'nullable|string|max:255',
            'kota' => 'required|string|max:255',
            'careworkshop_id' => 'nullable|integer', // Anda dapat menyesuaikan validasi ini dengan tipe data yang sesuai
            'status' => 'nullable|integer', // Anda dapat menyesuaikan validasi ini dengan tipe data yang sesuai
        ]);
        $member = Member::find( $id_member);
        $member->nama_member = $request->input('namaMember');
        $member->pic = $request->input('pic');
        $member->telepon = $request->input('tlp');
        $member->nama_bank = $request->input('namaBank');
        $member->no_rekening = $request->input('noRekening');
        $member->email = $request->input('email');
        $member->alamat_lengkap = $request->input('alamat');
        $member->kota = $request->input('kota');
        $member->careworkshop_id = $request->input('careworkshop_id');
        $member->status = $request->input('status');
        $member->save();
        return redirect()->route('member.index')
        ->with('success', 'Data berhasil diperbarui');
    }
    public function destroy($id)
{
    // Mengambil data yang akan dihapus berdasarkan ID
    $member = Member::find($id);

   
    
    $member->delete();

    return redirect()->route('member.index')
        ->with('success', 'Data berhasil dihapus');
}
public function cetak_pdf()
    {
    $members = Member::all();
    $pdf = PDF::loadView('member_pdf', compact('members'));

    return  $pdf->stream();
    }

}
