<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.type.create');
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
        $data = new Type;

        $data->room_type            = $request->type;
        $data->room_description     = $request->description;
        $data->price_per_night      = $request->price;
        $data->capacity             = $request->capacity;
        $data->facility             = $request->facility;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('image', $imagename);

            $data->featured_photo=$imagename;
        }

        $data->save();

        return redirect('show_room');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Type::find($id);
        return view('admin.room.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $data = Type::find($id);

        $data->room_type            = $request->type;
        $data->room_description     = $request->description;
        $data->price_per_night      = $request->price;
        $data->capacity             = $request->capacity;
        $data->facility             = $request->facility;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('image', $imagename);

            $data->featured_photo=$imagename;
        }

        $data->save();

        return redirect('show_room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Type::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function show_room()
    {
        $data = Type::all();

        return view('admin.room.index', compact('data'));
    }
}
