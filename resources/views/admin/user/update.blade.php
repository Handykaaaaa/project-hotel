@extends('admin.app')

@section('title', 'Create Room')

@section('content')
    <div class="p-5 h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">UPDATE</h1>
        <form action="{{ url('edit_user',$data->id) }}" method="Post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Nama</label>
                <input type="text" name="name" id="" value="{{ $data->name }}">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email" id="" value="{{ $data->email }}">
            </div>

            <div>
            <div>
                <input type="submit" name="Add Room" id="">
            </div>
        </form>
    </div>
@endsection
