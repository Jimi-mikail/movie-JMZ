<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class form extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function secre()
    {
        return $this->belongsTo(User::class, 'secre_id');
    }
    public function kabag()
    {
        return $this->belongsTo(User::class, 'kabag_id');
    }

    public function npb()
    {
        return $this->belongsTo(npb::class, 'npb_id');
    }

    static function checkout_id()
    {


        //check first day in a year
        $kabag = User::where('departemen_id', Auth()->user()->departemen_id)->where('is_admin', 5)->first();
        $data = form::create([
            "departemen_id" => auth()->user()->departemen_id,
            "user_id" => auth()->user()->id,
            "kabag_id" =>  $kabag->id,
            "status" => 1
        ]);

        return $data->id;
    }
}
