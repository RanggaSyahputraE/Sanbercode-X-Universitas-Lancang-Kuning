@extends('layout.master')

@section('judul', 'Cast Details')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $cast->nama }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Umur:</strong> {{ $cast->umur }}</p>
            <p><strong>Bio:</strong> {{ $cast->bio }}</p>
        </div>
    </div>
@endsection
