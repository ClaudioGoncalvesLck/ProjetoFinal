@extends('layouts.app')


@section('content')
<div class="content">

    <div class="container">
        <div class="row">
            @foreach ($planos as $plano)
            <div class="col-md-6 col-sm-12 col-lg-4">
                <div class="main-item">
                    <div class="item-top">
                    <h1 class="text-uppercase font-weight-bold  text-center">{{ $plano->name }}</h1>    
                    </div>
                    <div class="item-bottom">
                        <p>Preço original: <del>{{ $plano->original_price }}</del></p>
                        <p>Desconto: {{ $plano->discount_price }}</p>
                        <p>Duração: {{ $plano->duration }} meses</p>
                        <form action="/checkout" method="POST">
                            @csrf
                            <input name="plano_id" value="{{ $plano->id }}" type="hidden">
                            <button class="btn-style" type="submit">Choose</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            @foreach ($planos as $plano)
            <div class="col-md-6 col-sm-12 col-lg-4">
                <div class="main-item">
                    <div class="item-top">
                    <h1 class="text-uppercase font-weight-bold  text-center">{{ $plano->name }}</h1>    
                    </div>
                    <div class="item-bottom">
                        <p>Preço original: <del>{{ $plano->original_price }}</del></p>
                        <p>Desconto: {{ $plano->discount_price }}</p>
                        <p>Duração: {{ $plano->duration }} meses</p>
                        <form action="/checkout" method="POST">
                            @csrf
                            <input name="plano_id" value="{{ $plano->id }}" type="hidden">
                            <button class="btn-style" type="submit">Choose</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection