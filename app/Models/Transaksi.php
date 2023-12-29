<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'transaksi';

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }

    public function buku(){
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }
}
