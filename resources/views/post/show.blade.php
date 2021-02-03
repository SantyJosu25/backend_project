@extends('base')
@section('title')
    Vista del Post
@endsection
@section('content')
@if (session('info'))
<div class="alert alert-success alert-dismissible fade show">
    <strong>{{ session('info') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <h1 style="text-align: center">Vista del Post</h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                @method('head')
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label><br>
                    <img src="{{ asset('storage') . '/' . $post->image }}" alt="imagen post" width="200"><br>
                    <input type="file" id="image" name="image"disabled>
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Resumen</label>
                    <textarea class="form-control" name="summary" id="summary" rows="2"
                        disabled>{{ $post->summary }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" id="description" name="description" rows="2"
                        disabled>{{ $post->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}"
                        disabled>
                </div>
                <div style="text-align: center">
                    <a href="{{ route('post.index') }}" class="btn btn-outline-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
