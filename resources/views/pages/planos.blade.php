@extends('layouts.app')

{{-- @section('content')
    @foreach ($planos as $plano)
        <p>
            {{$plano->name}}
        </p>
    @endforeach
@endsection --}}

@section('content')     
    <div class="container">
        <div class="row">
            @foreach ($planos as $plano)
                <div class="col-md-4">
                    <div class="plano-item">
                        <h1 class="text-uppercase font-weight-bold  text-center">{{ $plano->name }}</h1>   
                        <p >Preço original: <del>{{ $plano->original_price }}</del></p>
                        <p>Desconto: {{ $plano->discount_price }}</p>  
                        <p>Duração: {{ $plano->duration }} meses</p> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
{{-- @foreach ($users as $user) --}}
{{-- <p>
{{ $user->name }}
</p> --}}
{{-- @endforeach     --}}

