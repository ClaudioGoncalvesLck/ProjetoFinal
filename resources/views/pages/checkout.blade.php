@extends('layouts.app')

@section('content')

<div class="container">
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
    <script>
        $(function() {
    $('#myModal').modal('show');
});
    </script>
    @endif
    <div class="col-md-6 offset-md-3 text-center">
        <h1 class="text-white">Plano adicionado com sucesso</h1>
    </div>
</div>
@endsection