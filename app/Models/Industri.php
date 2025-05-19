<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_industri', 'id_jurusan','foto'];
    public $timetamps = true;

     public function deleteImage(){
        if($this->foto && file_exists(public_path('storage/industri'. $this->foto))) {
            return unlink(public_path('storage/industri'. $this->foto));
        }
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan');
    }
}
