@extends('admin.layout.app')

@section('title', 'Edit Room')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 col-12 col-xl-8 mb-xl-2">
                    <h3 class="font-weight-bold">Edit Room</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('adminroom.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $room->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $room->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $room->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="total_rooms">Total Kamar</label>
                                <input type="number" class="form-control" id="total_rooms" name="total_rooms" value="{{ $room->total_rooms }}" required>
                            </div>
                            <div class="form-group">
                                <label for="total_beds">Total Tempat Tidur</label>
                                <input type="number" class="form-control" id="total_beds" name="total_beds" value="{{ $room->total_beds }}" required>
                            </div>
                            <div class="form-group">
                                <label for="total_bathrooms">Total Kamar Mandi</label>
                                <input type="number" class="form-control" id="total_bathrooms" name="total_bathrooms" value="{{ $room->total_bathrooms }}" required>
                            </div>
                            <div class="form-group">
                                <label for="total_guests">Total Tamu</label>
                                <input type="number" class="form-control" id="total_guests" name="total_guests" value="{{ $room->total_guests }}" required>
                            </div>
                            <div class="form-group">
                                <label for="featured_photo">Foto Utama</label>
                                <input type="file" class="form-control-file" id="featured_photo" name="featured_photo">
                                <img src="{{ asset('uploads/' . $room->featured_photo) }}" alt="{{ $room->name }}" class="img-fluid image-thumbnail mt-2">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('adminroom.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
