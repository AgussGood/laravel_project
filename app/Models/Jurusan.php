<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_jurusan'];
    public $timetamps = true;

    //relasi ke tabel telepon
    public function industri ()
    {
        return $this->hasMany(Transaksi::class);
    }
}
