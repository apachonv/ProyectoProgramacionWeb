<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //up() contiene la informacion que necesita el sistema para crear la tabla
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('idBookings')->unique();
            $table->integer('cedulaUsers');
            $table->foreign('cedulaUsers')->references('cedulaUsers')->on('users');
            $table->date('fechaBookings');
            $table->time('horaBookings');
            $table->timestamps();
        });
    }

    //down() contiene la información necesaria para poder retroceder todo lo que se hizo en el up()
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
