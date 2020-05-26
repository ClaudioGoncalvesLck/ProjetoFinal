@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        @foreach ($planos as $plano)
        <div class="col-md-6 col-sm-12 col-lg-4">
            <div class="plano-item">
                <h1 class="text-uppercase font-weight-bold  text-center">{{ $plano->name }}</h1>
                <p>Preço original: <del>{{ $plano->original_price }}</del></p>
                <p>Desconto: {{ $plano->discount_price }}</p>
                <p style="margin-bottom: 50px">Duração: {{ $plano->duration }} meses</p>
                <form action="/checkout" method="POST">
                    @csrf
                    <input name="plano_id" value="{{ $plano->id }}" type="hidden">
                    <button class="btn btn-primary" type="submit">Choose</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection