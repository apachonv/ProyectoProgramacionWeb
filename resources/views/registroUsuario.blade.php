{{-- Indica la vista que vamos a extender (layouts.landing) --}}
@extends('layouts.landing')

{{-- Indica que contenido se va a introducir (titulo) --}}
@section('title', 'RegistroUsario')
<div>
    {{-- Indica que se incluye una sección (navegador) --}}
    @include('layouts._partials.headerLimpio')
</div>
<div>
    {{-- Indica que contenido se va a introducir (contenido) --}}
    @section('content')
        <main>
            <div class="container">
                <h1 style="font-family: 'Times New Roman', serif">Usuario</h1>
            </div>
            <div class="container">
                <form action="">
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nombre" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" onchange="alerta()" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label for="cedula" class="col-sm-2 col-form-label">Cedula:</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="cedula" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="correo" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="contraseña" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label for="confirmarContraseña" class="col-sm-2 col-form-label">Confirmar contraseña:</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="confirmarContraseña" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label class="col-sm-2 col-form-label">Dirección:</label>
                        <div class="col-sm-2">
                            <label for="barrio" class="form-label">Barrio:</label>
                            <input type="text" class="form-control" id="barrio" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                        <div class="col-sm-2">
                            <label for="numero" class="form-label">Número:</label>
                            <input type="number" class="form-control" id="numero" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                        <div class="col-sm-2">
                            <label for="tipo" class="form-label">Tipo:</label>
                            <input type="text" class="form-control" id="tipo" placeholder="Cra/Cll/Gta/Cond"
                                required style="background-color: rgb(224, 234, 223); border-radius: 0" />
                        </div>
                    </div>
                    <br />
                    <div class="row mb-3">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-success" style="background-color: rgb(55, 108, 48)">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    @endsection
</div>
