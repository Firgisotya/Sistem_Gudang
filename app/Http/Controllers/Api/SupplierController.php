<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $supplier = Supplier::with('barang')->get();
            return $this->apiSuccess($supplier, 'Data Supplier berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplierRequest $request)
    {
        try {
            $supplier = Supplier::create($request->all());
            return $this->apiSuccess($supplier, 'Data Supplier berhasil ditambahkan');
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
            $supplier = Supplier::with('barang')->findOrFail($id);
            return $this->apiSuccess($supplier, 'Data Supplier berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplierRequest $request, $id)
    {
        try {
            $supplier = Supplier::findOrFail($id);
            $supplier->update($request->all());
            return $this->apiSuccess($supplier, 'Data Supplier berhasil diupdate');
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
            $supplier = Supplier::findOrFail($id);
            $supplier->delete();
            return $this->apiSuccess(null, 'Data Supplier berhasil dihapus');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }
}
