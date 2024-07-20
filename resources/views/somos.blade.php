{{-- Indica la vista que vamos a extender (layouts.landing) --}}
@extends('layouts.landing')

{{-- Indica que contenido se va a introducir (titulo) --}}
@section('title', 'Somos')

<div>
    {{-- Indica que se incluye una sección (navegador) --}}
    @include('layouts._partials.headerInicio')
</div>
<div class="container" style="font-family: 'Times New Roman', serif">
    <div class="container">
        <h1>Somos</h1>
        <p>
            Bienvenidos a GEORGEOUS, tu nuevo marketplace de confianza para conectar con los mejores esteticistas de
            Manizales. Nuestra misión es transformar la manera en que accedes a servicios de estética, brindándote la
            comodidad y el lujo de recibir tratamientos de alta calidad directamente en la puerta de tu hogar.
        </p>
    </div>
    <div class="container">
        <h2>Nuestra Historia</h2>
        <p>
            GEORGEOUS nació con la visión de revolucionar la industria de la belleza y el cuidado personal. Entendemos
            lo ocupada que puede ser la vida cotidiana y lo importante que es sentirte y verte bien sin sacrificar tu
            valioso tiempo. Por eso, decidimos crear una plataforma que simplifica el acceso a servicios estéticos
            profesionales, permitiéndote agendar citas con esteticistas de confianza que se desplazarán hasta tu
            residencia.
        </p>
    </div>
    <div class="container">
        <h2>Qué Ofrecemos</h2>
        <p>
            En GEORGEOUS, estamos comprometidos con ofrecer una experiencia excepcional tanto para los usuarios como
            para los esteticistas. Nuestra plataforma te permite:
        </p>
        <ul>
            <li>
                <h4>Descubrir y Reservar:</h4>
                <p>Encuentra una amplia variedad de servicios de belleza y cuidado personal ofrecidos por
                    esteticistas altamente calificados en Manizales.</p>
            </li>
            <li>
                <h4>Comodidad y Flexibilidad:</h4>
                <p>Elige el horario que mejor se adapte a tu agenda y disfruta de los
                    tratamientos en la comodidad de tu hogar.</p>
            </li>
            <li>
                <h4>Calidad y Seguridad:</h4>
                <p>Todos nuestros esteticistas pasan por un riguroso proceso de selección y
                    verificación para garantizar la mejor calidad y seguridad en cada servicio.</p>
            </li>
        </ul>
    </div>
    <div class="container">
        <h2>Nuestra Visión</h2>
        <p>
            Queremos ser el referente en servicios de estética a domicilio en Manizales, proporcionando una plataforma
            intuitiva, confiable y eficiente. En GEORGEOUS, creemos que la belleza debe ser accesible para todos, en
            cualquier momento y lugar.
        </p>
    </div>
</div>
