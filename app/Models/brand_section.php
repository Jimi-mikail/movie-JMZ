<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand_section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function barcode()
    {
        return $this->hasMany(Barcode::class);
    }
}
