<div class="col">
    <div class="card h-80"
        style="
            border-width: 1.5px;
            border-color: rgb(224, 234, 223);
            background-color: rgb(253, 255, 247);
            ">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('assets/logo.png') }}" class="img-fluid h-100 rounded-start" alt="..." />
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title">{{ $nombreEsteticista }}</h5>
                    <p class="card-text" style="color: rgb(55, 108, 48); font-weight: bold">
                        {{ $precioServicio }}
                    </p>
                    <button class="btn" type="button"
                        style="
                        width: 80%;
                        background-color: rgb(255, 255, 255);
                        border-color: rgb(224, 234, 223);
                        border-width: 2.5px;
                        border-radius: 30px;
                        font-weight: bold;
                        "
                        onclick="window.location.href='{{ route('reservarUsuario') }}'">
                        Reserva
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
