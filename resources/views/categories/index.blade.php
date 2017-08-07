@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de categorias</h3>
            @include('table.table')
        </div>
    </div>
@endsection