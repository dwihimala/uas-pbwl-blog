@extends('layouts.app')

@section('content') 
    
    <div class="container">

        <h3>
            DATA POST
            <a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>TANGGAL</th>
                <th>SLUG</th>
                <th>JUDUL</th>
                <th>TEXT</th>
                <th>ID CATEGORY</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->id_post }}</td>
                    <td>{{ $row->date }}</td>
                    <td>{{ $row->slug }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->text }}</td>
                    <td>{{ $row->id_cat }}</td>
                    <td><a href="{{ url('post/' . $row->id_post . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ url('/post/' . $row->id_post) }}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            @csrf
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection