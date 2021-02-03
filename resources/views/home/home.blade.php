@extends('base')
@section('title') Inicio @endsection
@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-3">Santiago Anrango</h1>
    <h2 class="display-4">ABM Tareas</h2>
    <p style="color: #ffffff" class="lead">Ejercicio práctico de un ABM completo de un modelo de Post y Categoría.</p>

    <a class="btn btn-primary" href="{{ route('post.index') }}">Posts</a>
    <a class="btn btn-success" href="{{ route('category.index') }}">Categorias</a>
</div>
</main>
<style>
    div{
        color: rgb(20, 21, 22);
    }
</style>
@endsection
