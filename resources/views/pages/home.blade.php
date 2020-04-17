@extends('layouts.app')

@section('content')
    <div class="table">
        <p>
            {{ Auth::user()->name }}
        </p>


        @foreach ($users as $user)
        <div class="table-item">
            <p>
                {{ user()->name }}
            </p>
            <div class="item-details">
                @foreach ($product->categories as $category)
                    <p style="color: red;">{{ $category->name }}</p>
                @endforeach
            </div>
        </div>
    @endforeach



    </div>
@endsection