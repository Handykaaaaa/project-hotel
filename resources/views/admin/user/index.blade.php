@extends('admin.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('content')
    <div class="h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">Tipe Kamar</h1>
        <a class="btn bg-green-500 p-2 mb-2 rounded cursor-pointer" data-bs-toggle="modal" data-bs-target="#ModalCreate">Tambah User</a>
        <div class="table-responsive">
            <table class="w-full table table-striped table-hover table-bordered">
                <thead class="bg-gray-300 border-2 border-gray-200">
                    <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">No</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 border-2 border-gray-200">
                    @foreach ($data as $data)
                    <tr>
                        <td class="w-10 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">1</td>
                        <td class="w-15 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $data->name }}</td>
                        <td class="w-25 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $data->email }}</td>
                        <td class="w-28 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">
                            <a onclick="return confirm('Are You Sure?')" class="btn bg-red-500 p-2 rounded cursor-pointer" href="{{ url('delete_user', $data->id) }}">Delete</a>
                            <a class="btn bg-blue-500 p-2 rounded cursor-pointer" href="{{ url('update_user',$data->id) }}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Start Modal  Create--}}
    <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreateLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCreateLabel">Buat User Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('store_user') }}" method="Post" enctype="multipart/form-data">
                
                @csrf

            <div class="modal-body mx-3">
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="">
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