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
        <div class="col-lg-10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card text-center">
                            <div class="card-body">
                              <h5 class="card-title">Premium</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-primary">Gerir</a>
                            </div>
                            <div class="card-footer text-muted">
                              Ativo
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card text-center">
                            <div class="card-body">
                              <h5 class="card-title">Basic</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-primary">Gerir</a>
                            </div>
                            <div class="card-footer text-muted">
                              Ativo
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection