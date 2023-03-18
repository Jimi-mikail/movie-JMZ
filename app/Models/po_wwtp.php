<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class po_wwtp extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function item_wwtp()
    {
        return $this->belongsTo(item_wwtp::class, 'item_wwtp_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
