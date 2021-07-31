@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->id_album) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="nama" class="form-control" value="{{ $row->nama }}">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="text" class="form-control" value="{{ $row->text }}">
        </div>
        <div class="form-group">
            <label for="">ID PHOTO</label>
            <input type="text" name="id_photo" class="form-control" value="{{ $row->id_photo }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection