@extends('layout.app')

@section('title', 'Edit Data Buku')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Buku</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Buku</h4>
            </div>
            <div class="card-body">
                <form action="/buku/{{$buku->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" class="form-control" name="kode" value="{{$buku->kode}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{$buku->judul}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="custom-select" name="category_id">
                                    <option value="">Pilih Category</option>
                                    @foreach ($category as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $buku->category_id ? 'selected' : '' }}>{{ $category->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="penerbit_id">Penerbit</label>
                                <select class="custom-select" name="penerbit_id">
                                    <option value="">Pilih Penerbit</option>
                                    @foreach ($penerbit as $penerbit)
                                    <option value="{{ $penerbit->id }}" {{ $penerbit->id == $buku->penerbit_id ? 'selected' : '' }}>{{ $penerbit->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="isbn">Isbn</label>
                                <input type="text" class="form-control" name="isbn" value="{{$buku->isbn}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" class="form-control" name="pengarang" value="{{$buku->pengarang}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah_halaman">Jumlah Halaman</label>
                                <input type="number" class="form-control" name="jumlah_halaman" value="{{$buku->jumlah_halaman}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" class="form-control" name="stok" value="{{$buku->stok}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="number" class="form-control" name="tahun_terbit" value="{{$buku->tahun_terbit}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sinopsis">Sinopsis</label>
                                <input type="text" class="form-control" name="sinopsis" value="{{$buku->sinopsis}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <br>
                                <img src="{{asset('/storage/buku/'.$buku->foto)}}" alt="{{asset('/storage/buku/'.$buku->foto)}}" style="width: 150px" class="rounded" >
                                <br></br>
                                <input type="file" class="form-control" name="foto" value="{{$buku->foto}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection