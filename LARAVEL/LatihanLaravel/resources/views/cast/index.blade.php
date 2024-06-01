@extends('layout.master')

@section('judul', 'Cast List')

@section('content')
    <a href="{{ route('cast.create') }}" class="btn btn-primary">Add New Cast</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($casts as $cast)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td>
                        <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
