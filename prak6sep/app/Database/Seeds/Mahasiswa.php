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
                'npm' => '2017051022',
                'nama'    => 'Satria Sapta Nugraha',
                'alamat' => 'Kota Metro',
                'desripsi' => 'Rajin',
                'created_at' => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
