<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051037',
                'nama'    => 'Ahmad Muzakki',
                'alamat' => 'Natar',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '0',
                'nama'    => 'Kamu',
                'alamat' => 'TBB',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2117051041',
                'nama'    => 'Dia',
                'alamat' => 'Kampung Baru',
                'created_at' => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}