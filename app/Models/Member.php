<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Member extends Model
{
    protected $table = 'member_table';
    protected $primaryKey = 'id_member'; 
    protected $fillable = [
        'id_member',
        'kode_member',
        'nama_member',
        'kota',
        'alamat_lengkap',
        'pic',
        'telepon',
        'email',
        'nama_bank',
        'atas_nama',
        'careworkshop_id',
        'status',
        'no_rekening'
    ];
    public static function generateUniqueMemberCode()
    {
        do {
            $code = 'MEM' . random_int(10, 99).strtoupper(Str::random(2)); 
        } while (self::where('kode_member', $code)->exists());

        return $code;
    }
}
