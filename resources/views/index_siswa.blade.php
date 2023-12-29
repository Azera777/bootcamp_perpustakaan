@extends('layouts.main_index')
@section('main_index')
    {{-- content --}}
    <div class="container-fluid py-4">
        <div class="row my-4">
            <div class="col-lg-11 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Peminjaman Buku</h6>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <button class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-href="{{ route('pinjam_buku') }}" data-bs-target="#createBuku">
                                    Pinjam Buku
                                </button>                                
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var modalTriggerButton = document.querySelector('[data-bs-target="#createBuku"]');
                                        modalTriggerButton.addEventListener('click', function() {
                                            var modalHref = modalTriggerButton.getAttribute('data-bs-href');
                                            window.location.href = modalHref;
                                        });
                                    });
                                </script>
                            </div>                            
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Kelas</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama Buku</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Waktu Pinjam</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trx as $data)
                                        <tr>
                                            <td>
                                                <div class="avatar-group">
                                                    {{ $data->id }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $data->siswa->nama }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <h6 class="mb-0 text-sm">{{ $data->siswa->kelas }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <h6 class="mb-0 text-sm">{{ $data->buku->judul }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <h6 class="mb-0 text-sm">{{ $data->created_at }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <div class="avatar-group d-flex">
                                                        <button type="button" class="btn btn-warning"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editModal_{{ $data->siswa->id }}"
                                                            data-trx-id="{{ $data->siswa->id }}">
                                                            details
                                                        </button>
                                                        @include('partials.siswa.details_modal_siswa')
                                                    </div>
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
        </div>
    </div>
@endsection
