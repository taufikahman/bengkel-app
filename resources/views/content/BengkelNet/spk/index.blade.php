@extends('layout/index')
@section('content')
<!--  Row 1 -->
<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card-body p-12">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Data SPK</h5><div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <a href="{{ route('spk.create') }}" class="btn btn-primary btn-sm mx-2">
                        <i class="ti ti-plus"></i> Add Spk
                    </a>
                    <a href="{{ route('spk_pdf') }}" class="btn btn-warning btn-sm mx-2">
                        <i class="ti ti-printy"></i> Cetak Spk
                    </a>
                </div>
               
               
            
            </div>
              
                <!-- <button type="button" class="btn btn-primary m-1"> <i class="ti ti-plus"></i> Add Member</button> -->
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap table-sm fs-2">
                    <thead class="text-dark  fs-2">
                        <tr>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold  mb-0">Select </h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold  mb-0">ID </h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Kode Member </h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Ticket No</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">insured Name</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Keterangan</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">No.Hp</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Reff No</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Kondisi SPK</h7>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spk as $s)
                        <tr>
                            <td class="border-bottom-0">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $s->id_spk }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <span class="fw-normal">{{ $s->kode_member }}</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $s->ticket_no }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $s->nama_member  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $s->keterangan  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $s->no_hp  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $s->reff_no  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $s->kondisi_spk  }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex">
                                    <a href="{{ route('spk.edit', ['id' => $s->id_spk]) }}" type="button"
                                        class="btn btn-outline-primary m-1 btn-sm">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                    <form method="post"
                                        action="{{ route('spk.destroy', ['id' => $s->id_spk]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger m-1 btn-sm" type="submit">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->



</script>

@endsection
