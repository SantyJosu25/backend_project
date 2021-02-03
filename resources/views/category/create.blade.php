@extends('base')
@section('title')
    Creación de Categoria
@endsection
@section('content')

    <h1 style="text-align: center">Creación de Categoria</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                    <a href="{{ route('category.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
