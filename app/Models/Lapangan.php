<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $fillable = [
        'nama',
        'harga_per_jam',
        'tipe',
        'lokasi',
        'deskripsi',
        'gambar',
        'status'
    ];

    public function bookings() {
        return $this->hasMany(Lapangan_book::class);
    }
}
