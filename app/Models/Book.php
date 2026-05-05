<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Field yang boleh diisi (mass assignment)
     * Wajib diisi agar create() dan update() bekerja!
     */
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'price',
        'stock',
        'description',
    ];

    // Cast tipe data otomatis
    protected function casts(): array
    {
        return [
            'price'  => 'decimal:2',
            'stock'  => 'integer',
        ];
    }
}