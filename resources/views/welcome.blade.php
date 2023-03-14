@extends('layouts.app-master')

@section('content')
    @if(session('success'))
        <div class="alert alert-primary alert-dismissible fade show mt-4" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="bg-light p-5 rounded">
        <h1>Bienvenido!</h1>
    </div>
@endsection