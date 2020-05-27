@extends('layouts.app')

@section('content')
<div class="content">
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
                  <div class="col-md-6">
                      <div class="main-item item-home">
                        <div class="item-top">
                          <h1>{{$plano->name }}</h1>
                        </div>
                        <div class="item-bottom">
                          <button class="btn-style"> Manage</button>
                          <form style="display: inline-block" action="/plan/remove" method="post">
                            @csrf
                            <input name="plano_id" value="{{ $plano->id }}" type="hidden">
                            <button class="btn-style" type="submit">Remove</button>
                          </form>
                          <p>{{ $plano->duration }} meses</p>
                        </div>
                      </div>
                  </div>    
                  @endforeach
                </div>
              </div>
            </div>   
          @endforeach
      </div>
  </div>

</div>


@endsection