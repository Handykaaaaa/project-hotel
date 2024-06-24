@extends('admin.app')

@section('content')
    <div class="p-5 h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">Tipe Kamar</h1>
        <a href="{{ url('create_user') }}">
            <button class="btn btn-info btn-md">Tambah User</button>
        </a>
        <div class="overflow-auto rounded-lg shadow">
            <table class="w-full ">
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
@endsection
