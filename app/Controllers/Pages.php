<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function kontak()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('pages/kontak');
        echo view('layout/footer');
    }

    public function produk()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('pages/produk');
        echo view('layout/footer');
    }

    public function testimoni()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        echo view('pages/testimoni');
        echo view('layout/footer');
    }

    public function pembelian()
    {
        echo view('layout/header');
        echo view('layout/navbar');
        return view('pages/pembelian',);
        echo view('layout/footer');
    }

    public function save()
    {
        $this->PagesModel->save([
            'nama_pembeli' => $this->request->getVar('nama_pembeli'),
            'nama_laptop' => $this->request->getVar('nama_laptop'),
            'alamat' => $this->request->getVar('alamat'),
            'nohp' => $this->request->getVar('nohp')
        ]);
        session()->setFlashdata('pesan0', 'Terimakasih telah berbelanja di toko kami.');
        return redirect()->to('/pages/pembelian');
    }
}
