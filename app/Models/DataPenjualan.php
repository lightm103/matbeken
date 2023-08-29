<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenjualan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function databarang()
    {
        return $this->belongsTo(DataBarang::class, 'data_barang_id', 'id');
    }
}
