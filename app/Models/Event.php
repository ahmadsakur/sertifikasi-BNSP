<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'nama',
        'detail',
        'tanggal',
    ];

    public static function getEvent($id)
    {
        $event = Event::where('id', $id)->get();
        return $event;
    }
    
}
