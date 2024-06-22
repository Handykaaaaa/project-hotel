<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class AdminRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'total_rooms' => 'required|integer|min:1',
            'total_beds' => 'required|integer|min:1',
            'total_bathrooms' => 'required|integer|min:1',
            'total_guests' => 'required|integer|min:1',
            'featured_photo' => 'required|image|max:2048',
        ]);

        // Simpan data room
        $room = new Room();
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->price = $request->input('price');
        $room->total_rooms = $request->input('total_rooms');
        $room->total_beds = $request->input('total_beds');
        $room->total_bathrooms = $request->input('total_bathrooms');
        $room->total_guests = $request->input('total_guests');

        // Simpan foto featured
        if ($request->hasFile('featured_photo')) {
            $fileName = time() . '.' . $request->file('featured_photo')->getClientOriginalExtension();
            $request->file('featured_photo')->storeAs('uploads', $fileName, 'public');
            $room->featured_photo = $fileName;
        }

        $room->save();

        // Redirect dengan pesan sukses
        return redirect()->route('adminroom.index')->with('success', 'Room baru berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Room $rooms)
    {
        return view('admin.room.show', ['room' => $rooms]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room.edit', compact('room'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Cari data room berdasarkan id
        $room = Room::findOrFail($id);

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'total_rooms' => 'required|integer|min:1',
            'total_beds' => 'required|integer|min:1',
            'total_bathrooms' => 'required|integer|min:1',
            'total_guests' => 'required|integer|min:1',
            'featured_photo' => 'nullable|image|max:2048',
        ]);

        // Update data room
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->price = $request->input('price');
        $room->total_rooms = $request->input('total_rooms');
        $room->total_beds = $request->input('total_beds');
        $room->total_bathrooms = $request->input('total_bathrooms');
        $room->total_guests = $request->input('total_guests');

        // Jika ada file foto featured yang baru, simpan dan update
        if ($request->hasFile('featured_photo')) {
            // Hapus foto sebelumnya
            // if ($room->featured_photo) {
            //     Storage::delete('public/uploads/' . $room->featured_photo);
            // }

            $fileName = time() . '.' . $request->file('featured_photo')->getClientOriginalExtension();
            $request->file('featured_photo')->storeAs('uploads', $fileName, 'public');
            $room->featured_photo = $fileName;
        }

        $room->save();

        // Redirect dengan pesan sukses
        return redirect()->route('adminroom.index')->with('success', 'Room berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function gallery($id)
    {
        $room = Room::findOrFail($id);
        $images = $room->images;

        return view('admin.room.gallery', compact('room', 'images'));
    }
}
