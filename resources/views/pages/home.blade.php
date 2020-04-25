@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-reset">
            <div id="home-bar_id" class="home-bar col-lg-2 text-center  col-reset">
                <img src="../images/user.jpg" alt="" class="rounded-0">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>
        @foreach ($users as $user)
          <div class="col-lg-10">
            <div class="container-fluid">
              <div class="row">
                @foreach ($user->planos as $plano)
                <div class="col-lg-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title">{{$plano->name }}</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Gerir</a>
                    </div>
                    <div class="card-footer text-muted">{{ $plano->duration }} meses</div>
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