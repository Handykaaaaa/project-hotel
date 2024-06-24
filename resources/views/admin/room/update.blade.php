@extends('admin.app')

@section('title', 'Create Room')

@section('content')
    <div class="p-5 h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">UPDATE</h1>
        <form action="{{ url('edit',$data->id) }}" method="Post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Tipe Kamar</label>
                <input type="text" name="type" id="" value="{{ $data->room_type }}">
            </div>

            <div>
                <label for="">Harga Per Malam</label>
                <input type="number" name="price" id="" value="{{ $data->price_per_night}}">
            </div>

            <div>
                <label for="">Kapasitas</label>
                <input type="number" name="capacity" id="" value="{{ $data->capacity }}">
            </div>

            <div>
                <label for="">Fasilitas</label>
                <input type="text" name="facility" id="" value="{{ $data->facility }}">
            </div>

            <div>
                <label for="">Deskripsi</label>
                <textarea name="description" id="" cols="30" rows="10">{{ $data->room_description }}</textarea >
            </div>

            <div>
                <label for="">Foto Kamar</label>
                <img width="100" src="/image/{{ $data->featured_photo }}" alt="hhh">
            </div>

            <div>
                <label for="">Foto Kamar</label>
                <input type="file" name="image">
            </div>

            <div>
                <input type="submit" name="Add Room" id="">
            </div>
        </form>
    </div>
@endsection
