@extends('layout.master')

@section('judul', 'Edit Cast')

@section('content')
    <form action="{{ route('cast.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $cast->nama }}" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{ $cast->umur }}" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" required>{{ $cast->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save Changes</button>
    </form>
@endsection
