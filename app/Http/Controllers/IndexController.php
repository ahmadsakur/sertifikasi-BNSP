<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $events = Event::get();
        return view('event', compact('events'));
    }

    public function show($id){
        $event = Event::getEvent($id);
        return response()->json($event);
    }

    public function berhasil(){
        return view('berhasil');
    }
    
}
