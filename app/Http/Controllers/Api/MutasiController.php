<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MutasiRequest;
use App\Models\Barang;
use App\Models\Mutasi;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $mutasi = Mutasi::with('user', 'barang')->get();
            return $this->apiSuccess($mutasi, 'Data Mutasi berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MutasiRequest $request)
    {
        try {
            $barang = Barang::findOrFail($request->barang_id);
            $jenis_mutasi = $request->jenis_mutasi;
            $jumlah_mutasi = $request->jumlah_mutasi;

            if ($jenis_mutasi == 'masuk') {
                $barang->stok += $jumlah_mutasi;
            } elseif ($jenis_mutasi == 'keluar') {
                if ($barang->stok < $jumlah_mutasi) {
                    return $this->apiError('Stok barang tidak mencukupi', 400);
                }
                $barang->stok -= $jumlah_mutasi;
            } else {
                return $this->apiError('Jenis mutasi tidak valid', 400);
            }
            $barang->save();

            $mutasi = Mutasi::create($request->all());

            return $this->apiSuccess($mutasi, 'Mutasi berhasil ditambahkan');
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
            $mutasi = Mutasi::with('user', 'barang')->findOrFail($id);
            return $this->apiSuccess($mutasi, 'Data Mutasi berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    public function historyMutasiUser($id)
    {
        try {
            $mutasi = Mutasi::with('barang')->where('user_id', $id)->get();
            return $this->apiSuccess($mutasi, 'Data Mutasi berdsarakan user berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }

    public function historyMutasiBarang($id)
    {
        try {
            $mutasi = Mutasi::with('user')->where('barang_id', $id)->get();
            return $this->apiSuccess($mutasi, 'Data Mutasi berdsarakan barang berhasil diambil');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(MutasiRequest $request, $id)
    {
        try {
            $mutasi = Mutasi::findOrFail($id);
            $barang = Barang::findOrFail($request->barang_id);
            $jenis_mutasi = $request->jenis_mutasi;
            $jumlah_mutasi = $request->jumlah_mutasi;

            if ($jenis_mutasi == 'masuk') {
                $barang->stok += $jumlah_mutasi;
            } elseif ($jenis_mutasi == 'keluar') {
                if ($barang->stok < $jumlah_mutasi) {
                    return $this->apiError('Stok barang tidak mencukupi', 400);
                }
                $barang->stok -= $jumlah_mutasi;
            } else {
                return $this->apiError('Jenis mutasi tidak valid', 400);
            }
            $barang->save();

            $mutasi->update($request->all());

            return $this->apiSuccess($mutasi, 'Mutasi berhasil diupdate');
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
            $mutasi = Mutasi::findOrFail($id);
            $barang = Barang::findOrFail($mutasi->barang_id);
            $jenis_mutasi = $mutasi->jenis_mutasi;
            $jumlah_mutasi = $mutasi->jumlah_mutasi;

            if ($jenis_mutasi == 'masuk') {
                $barang->stok -= $jumlah_mutasi;
            } elseif ($jenis_mutasi == 'keluar') {
                $barang->stok += $jumlah_mutasi;
            }
            $barang->save();

            $mutasi->delete();
            return $this->apiSuccess(null, 'Data Mutasi berhasil dihapus');
        } catch (\Exception $e) {
            return $this->apiError($e->getMessage(), 500);
        }
    }
}
