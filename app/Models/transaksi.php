<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acce;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Acce()
    {
        return $this->hasMany(Acce::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static function checkout_id()
    {
        $data = transaksi::create([
            "departemen_id" => auth()->user()->departemen_id,
            "user_id" => auth()->user()->id,
            "status" => 1
        ]);
        return $data->id;
    }
}
