<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    public $timestamps = false;
    protected $table = 'jasa';
    protected $primaryKey = 'id_jasa'; 
    protected $fillable = [
        'id_jasa',
        'spk',
        'nama_jasa',
        'nama_parts_suplier',
        'type_parts',
        'type_parts_satuan',
        'type_parts_supplier',
        'input_users',
        'status',
        'jenis_kerja' ,
        'biaya',
        'template_jasa', 
    ];
}
