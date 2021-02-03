@extends('base')
@section('title')
    Lista de Categorias
@endsection
@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 style="text-align: center">Lista de Categorias</h1>

    <div class="card">
        <div class="card-header">
            <form action="{{ route('category.search') }}" method="POST" class="d-flex">
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
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th colspan="3" style="text-align: center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($categories) >= 1)
                @foreach ($categories as $category)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td width="10px">
                                    <a href="{{ route('category.show', $category->id) }}"
                                        class="btn btn-sm btn-outline-info">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('category.edit', $category->id) }}"
                                        class="btn btn-sm btn-outline-primary">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{ route('category.destroy', $category) }}" method="post">
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
                            <td colspan="6" style="text-align: center">{{ 'No existen registros' }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
