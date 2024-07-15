<div class="container">
    <h1 style="font-family: 'Times New Roman', serif">{{ $categoria }}</h1>
</div>
<div id="{{ $id }}" class="carousel slide" data-bs-interval="false">
    <br>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-sm-4">
                    @component('_components.card')
                        @slot('nombreEsteticista', 'Esteticista1')
                        @slot('precioServicio', '50.000')
                    @endcomponent
                </div>
                <div class="col-sm-4">
                    @component('_components.card')
                        @slot('nombreEsteticista', 'Esteticista2')
                        @slot('precioServicio', '50.000')
                    @endcomponent
                </div>
                <div class="col-sm-4">
                    @component('_components.card')
                        @slot('nombreEsteticista', 'Esteticista3')
                        @slot('precioServicio', '50.000')
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-sm-4">
                    @component('_components.card')
                        @slot('nombreEsteticista', 'Esteticista4')
                        @slot('precioServicio', '50.000')
                    @endcomponent
                </div>
                <div class="col-sm-4">
                    @component('_components.card')
                        @slot('nombreEsteticista', 'Esteticista5')
                        @slot('precioServicio', '50.000')
                    @endcomponent
                </div>
                <div class="col-sm-4">
                    @component('_components.card')
                        @slot('nombreEsteticista', 'Esteticista6')
                        @slot('precioServicio', '50.000')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <br>
</div>
