<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $ProdukModel;
    public function __construct()
    {
        helper('form');
        $this->ProdukModel = new ProdukModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $produk = $this->ProdukModel->cari($keyword);
        } else {
            $produk = $this->ProdukModel;
        }
        $produk = $this->ProdukModel->findAll();
        $data = [
            'produk' => $produk
        ];
        echo view('layout/header');
        echo view('layout/navbar');
        return view('produk/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        return view('produk/create',);
        echo view('layout/footer');
    }

    public function save()
    {
        $this->ProdukModel->save([
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/produk');
    }

    public function delete($id)
    {
        $this->ProdukModel->delete($id);
        session()->setFlashdata('pesan1', 'Data berhasil dihapus.');
        return redirect()->to('/produk');
    }

    public function edit($id)
    {
        $produk = $this->ProdukModel->find($id);
        $data = [
            'produk' => $produk
        ];
        echo view('layout/header');
        echo view('layout/navbar');
        return view('produk/edit', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $this->ProdukModel->save([
            'id' => $id,
            'gambar' => $this->request->getVar('gambar'),
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('pesan2', 'Data berhasil diedit.');
        return redirect()->to('/produk');
    }

    public function excel()
    {
        $produk = $this->ProdukModel->getData();
        $data = [
            'produk' => $produk
        ];
        echo view('produk/excel', $data);
    }

    public function print()
    {
        $data = [
            'produk' => $this->ProdukModel->getData()
        ];
        return view('produk/print', $data);
    }

    public function import()
    {
        $file = $this->request->getFile('file_excel');
        $ext = $file->getClientExtension();

        if ($ext == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($file);
        $sheet = $spreadsheet->getActiveSheet()->toArray();

        foreach ($sheet as $x => $excel) {
            //skip field tabel
            if ($x == 0) {
                continue;
            }

            $datae = [
                'nama' =>  $excel['0'],
                'harga' =>  $excel['1'],
                'stok' =>  $excel['2'],
            ];
            $this->ProdukModel->add($datae);
        }
        session()->setFlashdata('pesan3', 'Data berhasil diimport.');
        return redirect()->to('/produk');
    }
}
