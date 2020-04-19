@extends('layouts.app')

@section('content')
    <div class="table">
        <p>
           Olá {{ Auth::user()->name }}
        </p>
    </div>
@endsection