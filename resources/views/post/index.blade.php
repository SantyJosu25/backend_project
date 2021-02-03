@extends('base')
@section('title')
    Lista de Posts
@endsection
@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 style="text-align: center">Lista de Posts</h1>

    <div class="card">
        <div class="card-header">
            <form action="{{ route('post.search') }}" method="POST" class="d-flex">
                @csrf
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-outline-info" type="submit"><span class="fas fa-search" aria-hidden="true"></span> Buscar</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th colspan="3" style="text-align: center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($posts) >= 1)
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">
                                    <img src="{{ asset('storage') . '/' . $post->image }}" alt="imagen post" width="100">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td width="10px">
                                    <a href="{{ route('post.show', $post->id) }}"
                                        class="btn btn-sm btn-outline-info">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('post.edit', $post->id) }}"
                                        class="btn btn-sm btn-outline-primary">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('post.destroy', $post) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('¿Desea eliminar este registro?')">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5 " style="text-align: center">{{ 'No existen registros' }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse">
            <form action="{{ route('post.search') }}" method="POST" class="d-flex">
                @csrf
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-outline-info" type="submit"><span class="fas fa-search" aria-hidden="true"></span> Buscar</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</nav> --}}
