@extends('base')
@section('title')
    Inicio
@endsection
@section('content')
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th colspan="2" style="text-align: center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts) >= 1)
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->tittle }}</td>
                        <td>{{ $post->author }}</td>
                        <td width="10px">
                            <a href="{{ route('posts.edit', $post) }}"
                                class="btn btn-sm btn-outline-primary">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" style="text-align: center">{{ 'No existen registros' }}</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
