@extends('layout/index')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Data Member</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('member.update', $member->id_member) }}">
                            @csrf
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Member</label>
                                        <input type="text" name="namaMember" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"  value="{{ $member->nama_member }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">PIC</label>
                                        <input type="text" name="pic" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->pic }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Telepon</label>
                                        <input type="text" name="tlp" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"value="{{ $member->telepon }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Bank</label>
                                        <input type="text" name="namaBank" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->nama_bank }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No Rekening</label>
                                        <input type="text" name="noRekening" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->no_rekening }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->email }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="alamat"   rows="3" value="{{ $member->alamat }}"></textarea>
                                </div>
                            </div>
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kota</label>
                                        <input type="text" name="kota" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->kota }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Care Workshop ID</label>
                                        <input type="text" name="careworkshop_id" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $member->careworkshop_id }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Status</label>
                                        <select name="status"  class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected value="{{ $member->status }}" >{{ $member->status }}</option>
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('member.index') }}" class="btn btn-warning"> <i class="ti ti-back"></i> back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
