@extends('layout.app')

@section('title', 'Edit Data Category')

@section('content')
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Category</h4>
                </div>

                <div class="card-body">
                <form action="/category/{{$category->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" class="form-control" value="{{$category->kode}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{$category->nama}}">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"> Update</i></button>
                </form>
            </div>
        </div>

        </section>
    </div>
@endsection