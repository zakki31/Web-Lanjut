<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
<<<<<<< HEAD
    protected $allowedFields    = ['npm', 'nama', 'alamat', 'deskripsi', 'created_at', 'update_at'];
=======
    protected $allowedFields    = ['npm','nama','alamat'];
>>>>>>> 282e41e5626ed48a71f9660e870f464113a67a48

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
}
