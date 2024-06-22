@extends('admin.layout.app')

@section('title', 'Detail Room')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="font-weight-bold">Detail Room</h3>
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="mb-4 toolbar">
                            <a href="{{ route('adminroom.index') }}">
                                <button class="btn btn-info btn-md">Kembali</button>
                            </a>
                        </div> --}}
                        <div class="room-info">
                            <h4>{{ $room->name }}</h4>
                            <img class="img-fluid" src="{{ asset('uploads/'.$room->featured_photo) }}" alt="">
                            <p>{{ 'Rp ' . number_format($room->price, 2, ',', '.') }} per malam</p>
                            <p>{{ $room->description }}</p>
                            <p>Total Kamar: {{ $room->total_rooms }}</p>
                            <p>Total Tempat Tidur: {{ $room->total_beds }}</p>
                            <p>Total Kamar Mandi: {{ $room->total_bathrooms }}</p>
                            <p>Total Tamu yang Dapat Menginap: {{ $room->total_guests }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
