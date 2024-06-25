@extends('admin.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

@section('content')
    <div class="h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">Reservasi</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="bg-gray-400 border-2 border-gray-200">
                    <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">No</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Check In</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Check Out</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Fasilitas</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 border-2 border-gray-200">
                    @foreach ($data as $data)
                    <tr>
                        <td class="w-10 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="w-15 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $data->user->name }}</td>
                        <td class="w-22 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $data->user->email }}</td>
                        <td class="w-25 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $data->check_in }}</td>
                        <td class="w-25 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">{{ $data->check_out }}</td>
                        <td class="w-23 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">Rp. {{ $data->total_cost }}</td>
                        <td class="w-28 p-3 text-sm font-semibold text-gray-700 whitespace-nowrap">
                            <a onclick="return confirm('Are You Sure?')" class="btn bg-red-500 p-2 rounded cursor-pointer" href="{{ url('delete_room', $data->id) }}">Delete</a>
                            <a class="btn bg-blue-500 p-2 rounded cursor-pointer" href="{{ url('update_room',$data->id) }}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>