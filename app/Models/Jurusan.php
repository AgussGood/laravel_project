<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_jurusan','deskripsi','foto'];
    public $timetamps = true;

    //relasi ke tabel industri
    public function industri ()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function deleteImage(){
        if($this->foto && file_exists(public_path('storage/fasilitas'. $this->foto))) {
            return unlink(public_path('storage/fasilitas'. $this->foto));
        }
    }
}
