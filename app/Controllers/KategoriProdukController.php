<?php

namespace App\Controllers;

use App\Models\ProductCategoryModel;

class KategoriProdukController extends BaseController
{
    protected $product_category;

    public function __construct()
    {
        $this->product_category = new ProductCategoryModel();
    }

    // Tampilkan semua data kategori
    public function index()
    {
        $data['product_category'] = $this->product_category->findAll();
        return view('v_kategori_produk', $data);
    }

    // Tampilkan form tambah kategori
    public function create()
    {
        return view('v_create_kategori');
    }

    // Simpan data baru
    public function store()
    {
        $this->product_category->save([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/kategori_produk')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $data['kategori'] = $this->product_category->find($id);

        if (!$data['kategori']) {
            return redirect()->to('/kategori_produk')->with('failed', 'Kategori tidak ditemukan.');
        }

        return view('v_edit_kategori', $data);
    }

    // Update data
    public function update($id)
    {
        $this->product_category->update($id, [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/kategori_produk')->with('success', 'Kategori berhasil diperbarui.');
    }

    // Hapus data
    public function delete($id)
    {
        $kategori = $this->product_category->find($id);

        if (!$kategori) {
            return redirect()->to('/kategori_produk')->with('failed', 'Kategori tidak ditemukan.');
        }

        $this->product_category->delete($id);
        return redirect()->to('/kategori_produk')->with('success', 'Kategori berhasil dihapus.');
    }
}
