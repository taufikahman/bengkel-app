<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spk extends Model
{
    public $timestamps = false;
    protected $table = 'spk';
    protected $primaryKey = 'id_spk'; 
    protected $fillable = [
        'id_spk',
        'id_member',
        'ticket_no',
        'keterangan',
        'no_hp',
        'reff_no',
        'kondisi_spk',
    ];
}
