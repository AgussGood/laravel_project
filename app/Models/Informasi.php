<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
     use HasFactory;

    protected $fillable = ['id','nama','deskripsi','foto'];
    public $timetamps = true;

     public function deleteImage(){
        if($this->foto && file_exists(public_path('storage/informasi'. $this->foto))) {
            return unlink(public_path('storage/informasi'. $this->foto));
        }
    }
}
