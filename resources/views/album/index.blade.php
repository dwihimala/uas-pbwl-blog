@extends('layouts.app')

@section('content') 
    
    <div class="container">

        <h3>
            DATA ALBUM
            <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>TEXT</th>
                <th>ID PHOTO</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row->id_album }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->text }}</td>
                    <td>{{ $row->id_photo }}</td>
                    <td><a href="{{ url('album/' . $row->id_album . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ url('/album/' . $row->id_album) }}" method="POST">
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