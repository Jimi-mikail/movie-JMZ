<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class npb extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function item()
    {
        return $this->hasMany(form::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function kabag()
    {
        return $this->hasOne(User::class, 'kabag_id');
    }

    static function checkout()
    {
        $kabag = User::where('departemen_id', auth()->user()->departemen_id)->where('is_admin', 5)->first();
        $data = npb::create([
            "departemen_id" => auth()->user()->departemen_id,
            "user_id" => auth()->user()->id,
            'kabag_id' => $kabag->id,
            "status" => 1
        ]);
        return $data->id;
    }
}
