@extends('base')
@section('title')
    Vista de la Categoría
@endsection
@section('content')

    <h1 style="text-align: center">Vista de la Categoría</h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                @method('head')
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="2"
                        disabled>{{ $category->description }}</textarea>
                </div>
                <div style="text-align: center">
                    <a href="{{ route('category.index') }}" class="btn btn-outline-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
