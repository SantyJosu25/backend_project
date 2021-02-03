<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid">
        <a style="color: aliceblue" class="navbar-brand js-scroll-trigger" href="{{ route('home') }}">Inicio</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a style="color: aliceblue" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('category.index') }}">Lista de Categorias</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('category.create') }}">Crear Categoria</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: aliceblue" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Posts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('post.index') }}">Lista de Posts</a></li>
                        <li><a class="dropdown-item" href="{{ route('post.create') }}">Crear Post</a></li>
                    </ul>
                </li>
            </ul>
    </div>
</nav>
<style>
    nav{
        padding: 25px 50px 75px;
        background: linear-gradient(#555353,#494848d2);
    }
</style>
