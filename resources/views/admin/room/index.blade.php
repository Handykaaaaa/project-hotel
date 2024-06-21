@extends('admin.layout.app')

@section('title', 'Rooms')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 col-12 col-xl-8 mb-xl-2">
                    <h3 class="font-weight-bold">Informasi Room</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 toolbar">
                            <a href="{{ route('adminroom.create') }}">
                                <button class="btn btn-info btn-md">+ Tambah Room Baru</button>
                            </a>
                        </div>
                        <div class="material-datatables">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="fa-solid fa-xmark fa-xl fs-xl"></i>
                                    </button>
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                            @if (session('danger'))
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="fa-solid fa-xmark fa-xl fs-xl"></i>
                                    </button>
                                    <span>{{ session('danger') }}</span>
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="fa-solid fa-xmark fa-xl fs-xl"></i>
                                    </button>
                                    <span>{{ session('warning') }}</span>
                                </div>
                            @endif
                            <table id="datatables" class="display expandable-table" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No Kamar</th>
                                        <th>Foto</th>
                                        <th>Nama Kamar</th>
                                        <th>Harga (per malam)</th>
                                        <th class="text-right disabled-sorting">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <img class="img-fluid image-thumbnail" src="{{ asset('uploads/'.$item->featured_photo) }}" alt="">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td class="font-weight-bold">{{ 'Rp ' . number_format($item->price, 2, ',', '.') }}</td>
                                            <td class="text-right">
                                                <button class="btn btn-md text-light btn-warning" data-bs-toggle="modal" data-bs-target="#roomModal{{ $item->id }}">Lihat Detail</button>
                                                <a href="{{ route('adminroom.gallery', $item->id) }}" class="btn btn-md text-light btn-success">Galeri</a>
                                                <a href="{{ route('adminroom.edit', $item->id) }}" class="btn btn-md text-light btn-info">Edit</a>
                                                {{-- <form action="{{ route('room.destroy', $item->id) }}" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-md text-light btn-danger">Hapus</button>
                                                </form> --}}
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
