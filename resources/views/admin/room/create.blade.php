@extends('admin.layout.app')

@section('title', 'Create Room')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 col-12 col-xl-8 mb-xl-2">
                    <h3 class="font-weight-bold">Create Room</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('adminroom.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga (per malam)</label>
                                <input type="number" class="form-control" id="price" name="price" min="0" required>
                            </div>
                            <div class="form-group">
                                <label for="total_rooms">Jumlah Kamar</label>
                                <input type="number" class="form-control" id="total_rooms" name="total_rooms" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="total_beds">Jumlah Tempat Tidur</label>
                                <input type="number" class="form-control" id="total_beds" name="total_beds" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="total_bathrooms">Jumlah Kamar Mandi</label>
                                <input type="number" class="form-control" id="total_bathrooms" name="total_bathrooms" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="total_guests">Jumlah Tamu</label>
                                <input type="number" class="form-control" id="total_guests" name="total_guests" min="1" required>
                            </div>
                            <div class="form-group">
                                <label for="featured_photo">Foto Utama</label>
                                <input type="file" class="form-control" id="featured_photo" name="featured_photo" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('adminroom.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
