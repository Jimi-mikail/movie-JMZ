<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    public function pemasukan()
    {
        return $this->hasMany(Pemasukan::class);
    }
    public function pengeluaran()
    {
        return $this->hasMany(Pengeluaran::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }
}
