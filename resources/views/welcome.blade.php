@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    {{-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="main-item">
                    <h1 class="text-uppercase font-weight-bold text-center">Planos</h1>
                    <a href="/planos" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="main-item">
                    <h1 class="text-uppercase font-weight-bold text-center">Planos</h1>
                    <a href="/planos" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="main-item">
                    <h1 class="text-uppercase font-weight-bold text-center">Planos</h1>
                    <a href="/planos" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection