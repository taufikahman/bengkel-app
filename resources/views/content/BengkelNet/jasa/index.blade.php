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
                <h5 class="card-title fw-semibold mb-4">Data Jasa</h5>
                <div class="d-flex">
                    <a href="{{ route('jasa.create') }}" class="btn btn-primary btn-sm mx-2">
                        
                        <i class="ti ti-plus"></i> Add Jasa
                    </a>
                    <a href="{{ route('jasa_pdf') }}" class="btn btn-warning btn-sm mx-2">
                       
                        <i class="ti ti-printy"></i> Cetak Jasa
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap table-sm fs-2">
                    <thead class="text-dark  fs-2">
                        <tr>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold  mb-0">ID </h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">SPK </h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Nama Jasa</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Biaya Jasa</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Template Jasa</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Input User</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Status</h7>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jasa as $j)
                        <tr>
                            <td class="border-bottom-0">
                                 <span class="fw-normal ">{{ $j->id_jasa }}</span>
                            </td>
                            <td class="border-bottom-0">
                                <span class="fw-normal ">{{ $j->spk }}</span>
                            </td>
                            <td class="border-bottom-0">
                                <span class="fw-normal">{{ $j->nama_jasa }}</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $j->biaya }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $j->template_jasa }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $j->input_users }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $j->status }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex">
                                    <a href="{{ route('jasa.edit', ['id' => $j->id_jasa]) }}" type="button"
                                        class="btn btn-outline-primary m-1 btn-sm">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                    <form method="post" action="{{ route('jasa.destroy', ['id' => $j->id_jasa]) }}">
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
