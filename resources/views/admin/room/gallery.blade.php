@extends('admin.layout.app')

@section('title', 'Room Gallery')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 col-12 col-xl-8 mb-xl-2">
                    <h3 class="font-weight-bold">Gallery for Room: {{ $room->name }}</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 toolbar">
                            <a href="{{ route('adminroom.index') }}">
                                <button class="btn btn-info btn-md">Kembali ke Daftar Room</button>
                            </a>
                            <a href="{{ route('room.image.create', $room->id) }}">
                                <button class="btn btn-success btn-md">+ Tambah Foto Baru</button>
                            </a>
                        </div>
                        <div class="row">
                            @foreach ($images as $image)
                                <div class="col-md-3 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('uploads/' . $image->file_name) }}" class="card-img-top" alt="{{ $image->file_name }}">
                                        <div class="card-body">
                                            <form action="{{ route('room.image.destroy', $image->id) }}" method="POST" style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-md text-light btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
