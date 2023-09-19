<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_table')->insert([
            'kode_member' =>"1",
            'nama_member' => 'John Doe',
            'kota' => 'Jakarta',
            'alamat_lengkap' => 'Jl. Contoh No. 123',
            'pic' => 'Alice',
            'telepon' => '123456789',
            'email' => 'john@example.com',
        
        ]);
    }
}
