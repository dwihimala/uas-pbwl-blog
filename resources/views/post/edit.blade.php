@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Post</h3>
    <form action="{{ url('/post/' . $row->id_post) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="date" class="form-control" value="{{ $row->date }}">
        </div>
        <div class="form-group">
            <label for="">SLUG</label>
            <input type="text" name="slug" class="form-control" value="{{ $row->slug }}">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="title" class="form-control" value="{{ $row->title }}">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="text" class="form-control" value="{{ $row->text }}">
        </div>
        <div class="form-group">
            <label for="">ID CATEGORY</label>
            <input type="text" name="id_cat" class="form-control" value="{{ $row->id_cat }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection