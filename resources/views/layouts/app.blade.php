<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Books')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #0f1117; color: #e2e8f0; min-height: 100vh; }
        .navbar { background: #1a1f2e; border-bottom: 1px solid #2d3748; padding: 1rem 2rem; display: flex; align-items: center; gap: 1rem; }
        .navbar-brand { font-size: 1.2rem; font-weight: 700; color: #818cf8; text-decoration: none; }
        .navbar a { color: #94a3b8; text-decoration: none; font-size: .9rem; }
        .navbar a:hover { color: #e2e8f0; }
        .container { max-width: 1000px; margin: 2rem auto; padding: 0 1.5rem; }
        .btn { padding: .5rem 1.2rem; border-radius: 8px; border: none; cursor: pointer; font-size: .88rem; font-weight: 600; text-decoration: none; display: inline-block; transition: all .15s; }
        .btn-primary { background: #818cf8; color: #fff; }
        .btn-primary:hover { background: #6366f1; }
        .btn-warning { background: #f59e0b; color: #fff; }
        .btn-warning:hover { background: #d97706; }
        .btn-danger { background: #ef4444; color: #fff; }
        .btn-danger:hover { background: #dc2626; }
        .btn-secondary { background: #374151; color: #e2e8f0; }
        .btn-secondary:hover { background: #4b5563; }
        .alert { padding: .85rem 1.2rem; border-radius: 10px; margin-bottom: 1.5rem; display: flex; align-items: center; gap: .75rem; font-size: .9rem; }
        .alert-success { background: #052e16; border: 1px solid #16a34a; color: #86efac; }
        .alert-warning { background: #2d1b00; border: 1px solid #d97706; color: #fcd34d; }
        .alert-error   { background: #2d0a0a; border: 1px solid #ef4444; color: #fca5a5; }
        .alert-info    { background: #0c1a2e; border: 1px solid #3b82f6; color: #93c5fd; }
        .card { background: #1a1f2e; border: 1px solid #2d3748; border-radius: 14px; padding: 1.5rem; margin-bottom: 1.5rem; }
        .card-title { font-size: 1.1rem; font-weight: 700; margin-bottom: 1.2rem; color: #e2e8f0; }
        .form-group { margin-bottom: 1.2rem; }
        .form-label { display: block; font-size: .85rem; font-weight: 600; color: #94a3b8; margin-bottom: .4rem; }
        .form-control { width: 100%; padding: .6rem .9rem; background: #0f1117; border: 1px solid #2d3748; border-radius: 8px; color: #e2e8f0; font-size: .9rem; outline: none; transition: border .15s; }
        .form-control:focus { border-color: #818cf8; }
        .form-control.is-invalid { border-color: #ef4444; }
        .invalid-feedback { color: #f87171; font-size: .8rem; margin-top: .3rem; }
        table { width: 100%; border-collapse: collapse; }
        thead th { background: #0f1117; padding: .75rem 1rem; text-align: left; font-size: .8rem; text-transform: uppercase; letter-spacing: .05em; color: #64748b; }
        tbody td { padding: .85rem 1rem; border-top: 1px solid #2d3748; font-size: .88rem; }
        tbody tr:hover { background: #1e2538; }
        .badge { padding: 3px 10px; border-radius: 20px; font-size: .75rem; font-weight: 600; }
        .page-title { font-size: 1.5rem; font-weight: 700; margin-bottom: .3rem; }
        .page-sub { color: #64748b; font-size: .88rem; margin-bottom: 1.5rem; }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('books.index') }}" class="navbar-brand">📚 Laravel Books</a>
        <a href="{{ route('books.index') }}">Daftar Buku</a>
        <a href="{{ route('books.create') }}" style="margin-left:auto">+ Tambah Buku</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>