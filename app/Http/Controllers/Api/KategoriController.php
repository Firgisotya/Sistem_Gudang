<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $kategori = Kategori::all();
            return $this->apiSuccess($kategori, 'Data kategori berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request)
    {
        try {
            $kategori = Kategori::create($request->all());
            return $this->apiSuccess($kategori, 'Data kategori berhasil ditambahkan');
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
            $kategori = Kategori::findOrFail($id);
            return $this->apiSuccess($kategori, 'Data kategori berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, $id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->update($request->all());
            return $this->apiSuccess($kategori, 'Data kategori berhasil diubah');
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
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();
            return $this->apiSuccess(null, 'Data kategori berhasil dihapus');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }
}
