<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }
    public function form()
    {
        return $this->hasMany(form::class);
    }
    public function item()
    {
        return $this->hasMany(item::class);
    }
}
