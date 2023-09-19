@extends('layout/index')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Data Jasa</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('jasa.update', $jasa->id_jasa) }}">
                            @csrf
                            @method('POST')
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">SPK</label>
                                        <input type="text" name="spk" class="form-control" id="exampleInputEmail1"
                                            value="{{ $jasa->spk }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Jasa</label>
                                        <input type="text" name="nama_jasa" class="form-control" id="exampleInputEmail1"
                                            value="{{ $jasa->nama_jasa }}">
                                    </div>
                                </div>
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jenis Kerja</label>
                                        <input type="text" name="jenis_kerja" class="form-control"
                                            id="exampleInputEmail1" value="{{ $jasa->jenis_kerja }}"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-row">
                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Biaya Jasa</label>
                                        <input type="text" name="biaya" class="form-control" id="exampleInputEmail1"
                                            value="{{ $jasa->biaya }}" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col-md-4 flex-item">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Template jasa</label>
                                        <input type="text" name="template_jaasa" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $jasa->template_jasa }}">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 flex-item">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Status</label>
                                    <div class="form-group">
                                        <select name="status" class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="{{ $jasa->template_jasa }}" selected>
                                                {{ $jasa->template_jasa }}</option>
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('jasa.index') }}" class="btn btn-warning"> <i class="ti ti-back"></i>
                                back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
