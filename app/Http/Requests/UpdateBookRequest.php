<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul'        => 'required|string|min:3|max:255',
            'penulis'      => 'required|string|min:3|max:255',
            'isbn'         => 'required|string|unique:books,isbn,' . $this->book->id,
            'harga'        => 'nullable|numeric|min:0',
            'tahun_terbit' => 'nullable|integer|min:1900|max:2099',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required'        => 'Judul buku wajib diisi.',
            'judul.min'             => 'Judul minimal 3 karakter.',
            'penulis.required'      => 'Nama penulis wajib diisi.',
            'penulis.min'           => 'Nama penulis minimal 3 karakter.',
            'isbn.required'         => 'ISBN wajib diisi.',
            'isbn.unique'           => 'ISBN sudah terdaftar di sistem.',
            'harga.numeric'         => 'Harga harus berupa angka.',
            'harga.min'             => 'Harga tidak boleh negatif.',
            'tahun_terbit.integer'  => 'Tahun terbit harus berupa angka.',
        ];
    }
}