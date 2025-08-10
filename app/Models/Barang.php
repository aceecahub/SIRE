<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['barang_id'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'barang_id', 'barang_id');
    }
}
