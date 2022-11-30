@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Tentang Saya</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    <div class="col-md-6 display-6">
        <hr />
        <p class="lead">Hallo My Friends</p>
    </div>

@endsection
