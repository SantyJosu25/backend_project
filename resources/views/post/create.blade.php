@extends('base')
@section('title')
    Creación de Post
@endsection
@section('content')

    <h1 style="text-align: center">Creación de Post</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group has-feedback">
                    <label class="form-label">Categoria</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">Seleccione la Categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Resumen</label>
                    <textarea class="form-control" name="summary" id="summary" rows="2"></textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div style="text-align: center">
                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                    <a href="{{ route('post.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
