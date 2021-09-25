<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_event',
        'nama',
        'email',
        'tanggal_lahir',
        'alamat'
    ];
}
