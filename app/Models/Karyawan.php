<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Karyawan extends Model
{
    use hasFactory;
    protected $guarded = ['karyawan_id'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'karyawan_id', 'karyawan_id');
    }
}
