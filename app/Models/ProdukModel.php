<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $allowedFields = ['nama', 'harga', 'stok'];

    public function cari($keyword)
    {
        return $this->table('produk')->like('nama', $keyword)->orlike('harga', $keyword)->orlike('stok', $keyword);
    }

    public function getData()
    {
        $query = $this->table('produk')->query('select * from produk');
        return $query->getResult();
    }
    public function alldata()
    {
        return $this->db->table('produk')->get()->getResultArray();
    }

    public function add($datae)
    {
        $this->db->table('produk')->insert($datae);
    }
}
