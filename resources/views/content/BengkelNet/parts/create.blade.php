@extends('layout/index')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Data Parts</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('parts.store') }}">
                            @csrf

                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">SPK</label>
                                        <input type="text" name="spk" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Part</label>
                                        <input type="text" name="nama_parts" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Kerja</label>
                                        <input type="text" name="jenis_kerja" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Biaya jasa</label>
                                        <input type="text" name="biaya_jasa" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Inputer User</label>
                                        <input type="text" name="inputer_user" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Type Parts</label>
                                        <input type="text" name="type_parts" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                            </div>


                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Status</label>
                                        <select name="status" class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Choose...</option>
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row flex-row">
                                    <div class="col-md-4 flex-item">
                                        <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="" class="btn btn-warning"> <i class="ti ti-back"></i> back</a>
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
