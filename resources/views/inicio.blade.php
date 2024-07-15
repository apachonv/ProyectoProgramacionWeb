{{-- Indica la vista que vamos a extender (layouts.landing) --}}
@extends('layouts.landing')

{{-- Indica que contenido se va a introducir (titulo) --}}
@section('title', 'Inicio')
<div>
    {{-- Indica que se incluye una sección (navegador) --}}
    @include('layouts._partials.headerInicio')
</div>
<div>
    {{-- Indica que contenido se va a introducir (contenido) --}}
    @section('content')
        @component('_components.carousel')
            @slot('categoria', 'Coloracion cabello')
            @slot('id', 'coloracionCabello')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Corte cabello')
            @slot('id', 'corteCabello')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Diseño cejas')
            @slot('id', 'diseñoCejas')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Extensiones cabello')
            @slot('id', 'extensionesCabello')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Extensiones pestañas')
            @slot('id', 'extensionesPestañas')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Manicura')
            @slot('id', 'manicura')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Maquillaje')
            @slot('id', 'maquillaje')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Pedicura')
            @slot('id', 'pedicura')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Peinados')
            @slot('id', 'peinados')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Tinte cejas/pestañas')
            @slot('id', 'tinteCejasPestañas')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Tratamientos capilares')
            @slot('id', 'tratamientosCapilares')
        @endcomponent
        @component('_components.carousel')
            @slot('categoria', 'Uñas acrilicas/gel')
            @slot('id', 'uñasAcrilicasGel')
        @endcomponent
    @endsection
</div>
