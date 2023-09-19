<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    public $timestamps = false;
    protected $table = 'parts';
    protected $primaryKey = 'id_parts'; 
    protected $fillable = [
        'id_parts',
        'spk',
        'nama_parts',
        'jenis_kerja',
        'biaya_jasa',
        'input_user',
        'type_parts',
        'status',
        
    ]; 
}
