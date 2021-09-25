<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ApplicantController extends Controller
{
    //
    public function index(){

        $applicants = DB::table('applicants')
        ->join('events', 'applicants.kode_event', '=', 'events.kode')
        ->select('applicants.*', 'events.nama as eventname')
        ->get();
        // dd($applicants);
        return view('pages.admin.indexapplicant', compact('applicants'));
    }

    public function store(Request $request)
    {
        //
        
        $validator = Validator::make($request->all(), [
            "kode" => 'required',
            "nama" => 'required',
            "email" => 'required',
            "tanggal" => 'required',
            "alamat" => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')->with('toast_error', 'Data Unique tidak boleh sama!');
        }
        
        Applicant::create([
            "kode_event" => $request["kode"],
            "nama" => $request["nama"],
            "email" => $request["email"],
            "tanggal_lahir" => $request["tanggal"],
            "alamat" => $request["alamat"],
        ]);

        return redirect('/berhasil');
    }
}
