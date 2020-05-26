<div class="gradient">
    @extends('layouts.app')

    @section('content')

    <div class="container">
        <div class="hero">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center text-white">
                    <h1 class="text-uppercase font-weight-bold">
                        Escolha um plano!
                    </h1>
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="flex-center position-ref full-height">
                    <div class="main-item">
                        <h1 class="text-uppercase font-weight-bold text-center">Planos</h1>
                        <a href="/planos" class="btn btn-primary">Ver Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection