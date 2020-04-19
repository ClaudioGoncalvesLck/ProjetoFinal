@extends('layouts.app')

@section('content')
    <div class="table">
        <p>
            {{ Auth::user()->name }}
        </p>
        <p>
        </p>
    </div>
@endsection