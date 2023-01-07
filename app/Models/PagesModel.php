<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table = 'pembelian';
    protected $allowedFields = ['nama_pembeli', 'nama_laptop', 'alamat', 'nohp'];
}
