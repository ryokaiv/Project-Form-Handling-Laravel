<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    /** Tampilkan daftar semua buku */
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    /** Tampilkan form tambah buku */
    public function create()
    {
        return view('books.create');
    }

    /** Simpan buku baru — validasi via StoreBookRequest */
    public function store(StoreBookRequest $request)
    {
        // $request sudah divalidasi otomatis oleh Form Request
        $book = Book::create($request->validated());

        // Set flash message SUCCESS lalu redirect
        return redirect()
            ->route('books.index')
            ->with('success', "Buku \"{$book->title}\" berhasil ditambahkan!");
    }

    /** Tampilkan form edit buku */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /** Update buku — validasi via UpdateBookRequest */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return redirect()
            ->route('books.index')
            ->with('success', "Buku berhasil diperbarui!");
    }

    /** Hapus buku */
    public function destroy(Book $book)
    {
        $title = $book->title;
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('warning', "Buku \"{$title}\" telah dihapus.");
    }
}