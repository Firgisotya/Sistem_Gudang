<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_barang' => 'required|string|max:255',
            'kategori_id' => 'required',
            'supplier_id' => 'required',
            'kode_barang' => 'required|string|unique:barang,kode_barang',
            'lokasi_barang' => 'required|string',
            'stok' => 'required|integer',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
