<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_wwtp extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function po_wwtp()
    {
        return $this->hasMany(po_wwtp::class);
    }
    public function pemakaianwwtp()
    {
        return $this->hasMany(Pemakaianwwtp::class);
    }

    public static function newItem($nama_barang, $harga, $status_wwtp)
    {
        $new_item = new item_wwtp();
        $new_item->nama_barang = $nama_barang;
        $new_item->harga_po = $harga;
        $new_item->status = $status_wwtp;
        $new_item->save();
        return $new_item->id;
    }
}