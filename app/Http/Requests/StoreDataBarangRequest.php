<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataBarangRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required', 
            'stock' => 'required|numeric',
            'harga' => 'required|numeric',
            'foto' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nama barang tidak boleh kosong',
            'stock.required' => 'stock barang tidak boleh kosong',
            'harga.required' => 'harga barang tidak boleh kosong',
            'foto.required' => 'foto barang tidak boleh kosong',
        ];
    }
}
