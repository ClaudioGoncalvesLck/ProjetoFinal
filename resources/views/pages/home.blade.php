@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-reset">
            <div id="home-bar_id" class="home-bar col-lg-2 text-center  col-reset">
                <img src="https://pngimage.net/wp-content/uploads/2018/05/default-user-image-png-7.png" alt="" class="rounded-circle">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        @foreach ($users as $user)
          <div class="col-lg-10">
            <div class="container-fluid">
              <div class="row">
                @foreach ($user->planos as $plano)
                <div class="col-lg-6">
                  <div class="card custom-card text-center mb-5">
                    <div class="card-body">
                      <h5 class="card-title">{{$plano->name }}</h5>
                      <p class="card-text"></p>
                      <a href="#" class="btn btn-primary">Manage</a>
                      <form style="display: inline-block" action="/plan/remove" method="post">
                        @csrf
                        <input name="plano_id" value="{{ $plano->id }}" type="hidden">
                        <button class="btn btn-primary" type="submit">Remove</button>
                      </form>
                    </div>
                    <div class="card-footer text-muted"><p>{{ $plano->duration }} meses</p></div>
                  </div>
                </div>    
                @endforeach
              </div>
            </div>
          </div>   
        @endforeach
    </div>
</div>


@endsection