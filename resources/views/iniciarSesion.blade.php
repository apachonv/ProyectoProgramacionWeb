{{-- Indica la vista que vamos a extender (layouts.landing) --}}
@extends('layouts.landing')

{{-- Indica que contenido se va a introducir (titulo) --}}
@section('title', 'IniciarSesion')

<div>
    {{-- Indica que se incluye una sección (navegador) --}}
    @include('layouts._partials.headerLimpio')
</div>

{{-- Indica que contenido se va a introducir (contenido) --}}
@section('content')
    <main>
        <div class="container">
            <br>
            <br>
            <form>
                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                    <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="correo" required
                            style="background-color: rgb(224, 234, 223); border-radius: 0" />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                    <label for="contraseña" class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="contraseña" required
                            style="background-color: rgb(224, 234, 223); border-radius: 0" />
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
