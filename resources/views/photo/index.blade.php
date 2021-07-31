@extends('layouts.app')

@section('content') 
    
    <div class="container">

        <h3>
            DATA PHOTO
            <a href="{{ url('/photo/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>TANGGAL</th>
                <th>JUDUL</th>
                <th>TEXT</th>
                <th>ID POST</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->id_photo }}</td>
                    <td>{{ $row->date }}</td>
                    <td>{{ $row->title }}</td>
                    <td>{{ $row->text }}</td>
                    <td>{{ $row->id_post }}</td>
                    <td><a href="{{ url('photo/' . $row->id_photo . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ url('/photo/' . $row->id_photo) }}" method="POST">
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