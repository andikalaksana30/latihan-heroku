@extends('templates.index')

@section('title')
    Halaman Home
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-primary d-inline" href="/product/{{ $d->id }}/edit" role="button">Edit</a>
                    <form method="POST" action="/product/{{ $d->id }}" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
