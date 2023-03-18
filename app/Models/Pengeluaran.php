<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['departemen', 'kategori', 'user'];

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
}
