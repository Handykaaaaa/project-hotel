@extends('admin.app')

@section('title', 'Create Room')

@section('content')
    <div class="p-5 h-screen">
        <h1 class="text-xl text-center font-semibold mb-2">Tipe Kamar</h1>
        <form action="{{ url('store_user') }}" method="Post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Nama</label>
                <input type="text" name="name" id="">
            </div>

            <div>
                <label for="">Email</label>
                <input type="text" name="email" id="">
            </div>

            <div>
                <label for="">Password</label>
                <input type="text" name="password" id="">
            </div>

            <div>
                <input type="submit" name="Add Room" id="">
            </div>
        </form>
    </div>
@endsection
