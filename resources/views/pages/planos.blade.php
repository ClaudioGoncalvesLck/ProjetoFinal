@extends('layouts.app')

@section('content')
    @foreach ($planos as $plano)
        <p>
            {{$plano->name}}
        </p>
    @endforeach
@endsection