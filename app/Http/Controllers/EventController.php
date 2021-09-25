<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::get();
        return view('pages.admin.indexevent',compact('events'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            "kode" => 'required|unique:events',
            "nama" => 'required',
            "tanggal" => 'required',
            "detail" => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/events')->with('toast_error', 'Data Unique tidak boleh sama!');
        }
        
        Event::create([
            "kode" => $request["kode"],
            "nama" => $request["nama"],
            "tanggal" => $request["tanggal"],
            "detail" => $request["detail"],
        ]);

        return redirect('/events')->with('toast_success', 'Event berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::getEvent($id);
        return response()->json($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            "kode" => Rule::unique('events')->ignore($request->id),
            "nama" => 'required',
            "tanggal" => 'required',
            "detail" => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/siswa')->with('toast_error', 'Data Unique tidak boleh sama!');
        }

        Event::where('id', $request["id"])->update([
            "kode" => $request["kode"],
            "nama" => $request["nama"],
            "tanggal" => $request["tanggal"],
            "detail" => $request["detail"]
        ]);

        return redirect('/events')->with('toast_success', 'Event berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request , $id)
    {
        //
        Event::where('id', $request["id"])->delete();
        return redirect('/events')->with('toast_success', 'Event Berhasil dihapus');

    }
}
