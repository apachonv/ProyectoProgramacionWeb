<header>
    <nav class="navbar navbar-expand bg-body-tertiary"> <!-- fixed-top -->
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown me-2">
                        <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="background-color: rgb(55, 108, 48)">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#coloracionCabello">Coloración
                                    cabello</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#corteCabello">Corte cabello</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#diseñoCejas">Diseño cejas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#extensionesCabello">Extensiones
                                    cabello</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#extensionesPestañas">Extensiones
                                    pestañas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#manicura">Manicura</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#maquillaje">Maquillaje</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#pedicura">Pedicura</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#peinados">Peinados</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#tinteCejasPestañas">Tinte
                                    cejas/pestañas</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('inicio') }}#tratamientosCapilaresId">Tratamientos capilares</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('inicio') }}#uñasAcrilicasGel">Uñas
                                    acrilicas/gel</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-2">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar servicio/proveedor"
                                aria-label="Search" style="background-color: #dfdfdf; border-radius: 0" />
                        </form>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{ route('somos') }}">Quienes somos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown me-2">
                        <a class="btn btn-success dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="background-color: rgb(55, 108, 48)">
                            Registrarse
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('registroUsuario') }}">Usuario</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('registroEsteticista') }}">Esteticista</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item me-2">
                        <button class="btn btn-success" style="background-color: rgb(55, 108, 48); cursor: pointer;"
                            onclick="window.location.href='{{ route('iniciarSesion') }}'">
                            Iniciar sesión
                        </button>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page"
                            style="
                        font-family: 'Times New Roman', serif;
                        font-size: 20px;
                        color: rgb(55, 108, 48);
                        ">GORGEOUS
                        </a>
                    </li>
                    <li class="nav-item me-2">
                        <img src="/logo.png" alt="Logo" width="40" height="40"
                            class="d-inline-block align-text-top" />
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
