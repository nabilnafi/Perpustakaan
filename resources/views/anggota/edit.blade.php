@extends('layout.app')

@section('title', 'Edit Data Anggota')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Anggota</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Anggota</h4>
                </div>

                <div class="card-body">
                    <form action="/anggota/{{$anggota->id}}" method="POST">
                        @csrf
                        @method('PUT')
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" class="form-control" value="{{$anggota->kode}}">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$anggota->nama}}">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="custom-select" name="jenis_kelamin">
                    <option value="Laki-laki" {{$anggota->jenis_kelamin == 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                    <option value="Perempuan" {{$anggota->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                    </select>
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$anggota->tempat_lahir}}">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{$anggota->tanggal_lahir}}">
                </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="telpon">Telpon</label>
                    <input type="number" class="form-control" name="telpon" value="{{$anggota->telpon}}">
                </div>
                </div>

                <div class="col-md-12">
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$anggota->alamat}}">
                </div>
                </div>

                <div class="col-md-12">
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <img src="{{asset('/storage/anggota/'.$anggota->foto)}}" style="width: 150px" class="rounded">
                    <input type="file" class="form-control" name="foto" value="{{$anggota->foto}}">
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