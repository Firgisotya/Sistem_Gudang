<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use App\Traits\ApiResponse;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $barang = Barang::with('kategori', 'supplier')->get();
            return $this->apiSuccess($barang, 'Data Barang berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangRequest $request)
    {
        try {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Simpan file gambar menggunakan Laravel Storage
            $gambar->storeAs('public/barang', $nama_gambar);

            $barangData = $request->all();
            $barangData['gambar'] = $nama_gambar;

            $barang = Barang::create($barangData);
            return $this->apiSuccess($barang, 'Data Barang berhasil ditambahkan');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $barang = Barang::with('kategori', 'supplier')->findOrFail($id);
            return $this->apiSuccess($barang, 'Data Barang berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BarangRequest $request, $id)
    {
        try {
            $barang = Barang::findOrFail($id);
            $barangData = $request->except('gambar');

            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $nama_gambar = time() . '.' . $gambar->getClientOriginalExtension();

                // Simpan file gambar menggunakan Laravel Storage
                $gambar->storeAs('public/barang', $nama_gambar);

                // Hapus gambar lama jika ada
                if ($barang->gambar && file_exists(storage_path('app/public/barang/' . $barang->gambar))) {
                    Storage::delete('public/barang/' . $barang->gambar);
                }

                $barangData['gambar'] = $nama_gambar;
            }

            $barang->update($barangData);
            return $this->apiSuccess($barang, 'Data Barang berhasil diupdate');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $barang = Barang::findOrFail($id);
            Storage::delete('public/barang/' . $barang->gambar);
            $barang->delete();
            return $this->apiSuccess($barang, 'Data Barang berhasil dihapus');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }
}
