<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_industri', 'id_jurusan'];
    public $timetamps = true;

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan');
    }
}
