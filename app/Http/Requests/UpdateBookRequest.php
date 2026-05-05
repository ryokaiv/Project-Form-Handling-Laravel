<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        // Ambil ID buku dari route untuk mengecualikan
        // buku saat ini dari pengecekan ISBN unique
        $bookId = $this->route('book')->id;

        return [
            'title'       => 'required|string|min:3|max:255',
            'author'      => 'required|string|max:100',
            // Unique tapi kecualikan ID buku yang sedang diedit
            'isbn'        => "required|string|unique:books,isbn,{$bookId}|max:20",
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'description' => 'nullable|string|max:1000',
        ];
    }
}