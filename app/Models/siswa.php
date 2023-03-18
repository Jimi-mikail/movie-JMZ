<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['pemasukan', 'departemen', 'user'];
    public function pemasukan()
    {
        return $this->hasMany(Pemasukan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }
}
