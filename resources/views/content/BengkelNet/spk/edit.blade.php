@extends('layout/index')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Data spk</h5>
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kode Member</label>
                                        <input type="text"   name="kode_member" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->kode_member }}">
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Ticket No</label>
                                        <input type="text" name="ticket_no" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $spk->ticket_no }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Insured Name</label>
                                        <input type="text" name="insured_name" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $member->nama_member }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $spk->keterangan }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                                        <input type="text" name="no_hp" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $spk->no_hp }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ReffNo</label>
                                        <input type="text" name="reff_no" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $spk->reff_no }}">
                                    </div>
                                </div>

                            </div>


                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kondisi SPK</label>
                                        <input type="text" name="kondisi_spk" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $spk->kondisi_spk }}">
                                    </div>
                                </div>
                                <div class="row flex-row">
                                    <div class="col-md-4 flex-item">
                                        <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('spk.index') }}" class="btn btn-warning"> <i class="ti ti-back"></i> back</a>
                                        </div>
                                    </div>
                                </div>
                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    @endsection
    
