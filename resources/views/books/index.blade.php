@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <x-alert />

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem">
        <div>
            <div class="page-title">Daftar Buku</div>
            <div class="page-sub">Total {{ $books->total() }} buku terdaftar</div>
        </div>
        <a href="{{ route('books.create') }}" class="btn btn-primary">+ Tambah Buku</a>
    </div>

    <div class="card">
        @if($books->isEmpty())
            <div style="text-align:center; padding:3rem; color:#64748b">
                <div style="font-size:2rem">📭</div>
                <div style="margin-top:.5rem">Belum ada buku. Tambah sekarang!</div>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>ISBN</th>
                        <th>Harga</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td style="color:#64748b">{{ $loop->iteration }}</td>
                        <td style="font-weight:600">{{ $book->judul }}</td>
                        <td style="color:#94a3b8">{{ $book->penulis }}</td>
                        <td><span class="badge" style="background:#1e2538;color:#818cf8">{{ $book->isbn }}</span></td>
                        <td>{{ $book->harga ? 'Rp ' . number_format($book->harga, 0, ',', '.') : '-' }}</td>
                        <td>{{ $book->tahun_terbit ?? '-' }}</td>
                        <td style="display:flex;gap:.5rem">
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST"
                                  onsubmit="return confirm('Hapus buku ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="margin-top:1rem">{{ $books->links() }}</div>
        @endif
    </div>
@endsection