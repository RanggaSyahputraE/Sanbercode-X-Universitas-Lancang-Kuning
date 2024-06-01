@extends('layout.master')

@section('judul', 'Add New Cast')

@section('content')
    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
