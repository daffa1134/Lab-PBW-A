@extends('main')

@section('content')
<div class="container">
    <h1>Tambah data</h1>
    <form method="post" action="#">
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" placeholder="Judul Buku"/>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" placeholder="Pengarang"/>
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit"/>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>
@endsection


