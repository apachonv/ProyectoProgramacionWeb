{{-- Indica la vista que vamos a extender (layouts.landing) --}}
@extends('layouts.landing')

{{-- Indica que contenido se va a introducir (titulo) --}}
@section('title', 'Somos')

<div>
    {{-- Indica que se incluye una sección (navegador) --}}
    @include('layouts._partials.headerInicio')
</div>
<div>
    {{-- Indica que contenido se va a introducir (contenido) --}}
    @section('content')
        <h1>Somos</h1>
    @endsection
</div>
