@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <div class="page-title">Tambah Buku</div>
    <div class="page-sub">Isi form di bawah untuk menambah buku baru</div>

    <div class="card">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label">Judul Buku *</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                       value="{{ old('judul') }}" placeholder="Masukkan judul buku...">
                @error('judul')
                    <div class="invalid-feedback">⚠ {{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Penulis *</label>
                <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror"
                       value="{{ old('penulis') }}" placeholder="Nama penulis...">
                @error('penulis')
                    <div class="invalid-feedback">⚠ {{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">ISBN *</label>
                <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror"
                       value="{{ old('isbn') }}" placeholder="Contoh: 9786020650180">
                @error('isbn')
                    <div class="invalid-feedback">⚠ {{ $message }}</div>
                @enderror
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem">
                <div class="form-group">
                    <label class="form-label">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror"
                           value="{{ old('harga') }}" placeholder="0" min="0">
                    @error('harga')
                        <div class="invalid-feedback">⚠ {{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control @error('tahun_terbit') is-invalid @enderror"
                           value="{{ old('tahun_terbit') }}" placeholder="2024" min="1900" max="2099">
                    @error('tahun_terbit')
                        <div class="invalid-feedback">⚠ {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div style="display:flex; gap:.75rem; margin-top:.5rem">
                <button type="submit" class="btn btn-primary">💾 Simpan Buku</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection