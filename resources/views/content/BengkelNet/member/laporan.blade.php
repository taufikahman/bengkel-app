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
                <h5 class="card-title fw-semibold mb-4">Data Member</h5>
                <div class="d-flex">
                    
                    <a href="{{ route('member_pdf') }}" class="btn btn-warning btn-sm mx-2">
                        <i class="ti ti-printy"></i> Cetak Member
                    </a>
                </div>

            </div>
            <div class="table-responsive">
                <table class="table text-nowrap table-sm fs-2">
                    <thead class="text-dark  fs-2">
                        <tr>
                           
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Kode Member </h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Nama Member</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Kota</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Alamat Lengkap</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">PIC</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Telepon</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Email</h7>
                            </th>
                            <th class="border-bottom-0">
                                <h7 class="fw-semibold mb-0">Status</h7>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $member->kode_member }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <span class="fw-normal">{{ $member->nama_member }}</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $member->kota }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $member->alamat_lengkap  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $member->pic  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $member->telepon  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $member->email  }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $member->email  }}</p>
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
