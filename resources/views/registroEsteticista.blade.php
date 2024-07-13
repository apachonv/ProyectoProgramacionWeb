{{-- Indica la vista que vamos a extender (layouts.landing) --}}
@extends('layouts.landing')

{{-- Indica que contenido se va a introducir (titulo) --}}
@section('title', 'RegistroEsteticista')

<div>
    {{-- Indica que se incluye una sección (navegador) --}}
    @include('layouts._partials.headerLimpio')
</div>
<div>
    {{-- Indica que contenido se va a introducir (contenido) --}}
    @section('content')
        <main>
            <div class="container">
                <h1 style="font-family: 'Times New Roman', serif">Esteticista</h1>
            </div>
            <div class="container">
                <form>
                    <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nombre" required
                                style="background-color: rgb(224, 234, 223); border-radius: 0" />
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
                        <label class="col-sm-2 col-form-label">Formato: PDF-PNG-JPG</label>
                        <label for="imagenCedula" class="col-sm-6 btn btn-success"
                            style="background-color: rgb(55, 108, 48);">
                            Cargar imagen de la cédula por ambas caras
                            <input id="imagenCedula" type="file" accept=".pdf,.png,.jpg" multiple style="display: none;">
                        </label>
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
