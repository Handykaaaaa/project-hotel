@extends('admin.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('content')
    <div class="h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">Tipe Kamar</h1>
        <a class="btn bg-green-500 p-2 mb-2 rounded cursor-pointer" data-bs-toggle="modal" data-bs-target="#ModalCreate">Buat Tipe Baru</a>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="bg-gray-300 border-2 border-gray-200">
                    <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">No</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Tipe</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Deskripsi</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Kapasitas</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Harga</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Fasilitas</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Foto</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 border-2 border-gray-200">
                    @foreach ($data as $index => $room)
                    <tr>
                        <td class="w-10 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="w-15 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $room->room_type }}</td>
                        <td class="p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{!! Str::limit($room->room_description, 25) !!}</td>
                        <td class="w-22 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $room->capacity }}</td>
                        <td class="w-23 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">Rp. {{ number_format($room->price_per_night, 0, ',', '.') }}</td>
                        <td class="w-25 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">
                            <div class="flex flex-col">
                                @php
                                    $facilities = explode(', ', $room->facility);
                                @endphp
                                @foreach ($facilities as $index => $facility)
                                    @if ($index % 2 == 0)
                                        <div class="flex">
                                    @endif
                                    <div class="flex-1 relative pl-5">
                                        <span class="absolute left-0">&bull;</span>{{ $facility }}
                                    </div>
                                    @if ($index % 2 == 1)
                                        </div>
                                    @endif
                                @endforeach
                                @if (count($facilities) % 2 != 0)
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="w-29 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">
                            <a href="" data-bs-toggle="modal" data-bs-target="#ModalImage{{ $room->id }}">Tampilkan Foto</a>
                        </td>
                        <td class="w-28 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">
                            <a class="btn bg-red-500 p-2 rounded cursor-pointer" data-bs-toggle="modal" data-bs-target="#ModalDelete{{ $room->id }}">Delete</a>
                            <a class="btn bg-blue-500 p-2 rounded cursor-pointer" data-bs-toggle="modal" data-bs-target="#ModalUpdate{{ $room->id }}">Update</a>
                        </td>
                    </tr>

                    {{-- Start Modal Image--}}
                    <div class="modal fade" id="ModalImage{{ $room->id }}" tabindex="-1" aria-labelledby="ModalImageLabel{{ $room->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalImageLabel{{ $room->id }}">Foto Kamar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img width="100%" src="/image/{{ $room->featured_photo }}" alt="Foto Kamar">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Modal Image--}}

                    {{-- Start Modal Update--}}
                    <div class="modal fade" id="ModalUpdate{{ $room->id }}" tabindex="-1" aria-labelledby="ModalUpdateLabel{{ $room->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalUpdateLabel{{ $room->id }}">Update Tipe Kamar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('edit', $room->id) }}" method="Post" enctype="multipart/form-data">
                                
                                @csrf

                            <div class="modal-body mx-3">
                                <div class="mb-3">
                                    <label>Tipe Kamar</label>
                                    <input type="text" class="form-control" name="type" id="" value="{{ $room->room_type }}">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga Per Malam</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="number" class="form-control" name="price" id="price" value="{{ $room->price_per_night }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Kapasitas</label>
                                    <input type="number" class="form-control" name="capacity" id="" value="{{ $room->capacity }}">
                                </div>
                                <div class="mb-3">
                                    <label>Fasilitas</label>
                                    <input type="text" class="form-control" name="facility" id="" value="{{ $room->facility }}">
                                </div>
                                <div class="mb-3">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control" id="" >{{ $room->room_description }}</textarea >
                                </div>
                                <div class="mb-3">
                                    <label>Foto Saat Ini</label>
                                    <img class="form-control" src="/image/{{ $room->featured_photo }}" alt="Foto Kamar" style="max-width: 25%; height: auto;">
                                </div>
                                <div class="mb-3">
                                    <label>Ganti Foto</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Modal Update--}}

                    {{-- Start Modal Delete--}}
                    <div class="modal fade" id="ModalDelete{{ $room->id }}" tabindex="-1" aria-labelledby="ModalDeleteLabel{{ $room->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalDeleteLabel{{ $room->id }}">Hapus Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Data yang dipilih akan dihapus secara permanen. Lanjutkan? </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ url('delete_room', $room->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Modal Delete--}}

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Start Modal Create--}}
    <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCreateLabel">Buat Tipe Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('store') }}" method="Post" enctype="multipart/form-data">
                
                @csrf

            <div class="modal-body mx-3">
                <div class="mb-3">
                    <label>Tipe Kamar</label>
                    <input type="text" class="form-control" name="type" id="">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga Per Malam</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="price" id="price">
                    </div>
                </div>
                <div class="mb-3">
                    <label>Kapasitas</label>
                    <input type="number" class="form-control" name="capacity" id="">
                </div>
                <div class="mb-3">
                    <label>Fasilitas</label>
                    <input type="text" class="form-control" name="facility" id="">
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" id="" ></textarea >
                </div>
                <div class="mb-3">
                    <label>Ganti Foto</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    {{-- End Modal  Create--}}
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
