@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Post</h3>
    <form action="{{ url('/post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="">SLUG</label>
            <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">ID CATEGORY</label>
            <input type="text" name="id_cat" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        
</form>
</div>

@endsection