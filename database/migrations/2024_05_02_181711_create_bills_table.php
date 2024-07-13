<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //up() contiene la informacion que necesita el sistema para crear la tabla
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('idBills')->unique();
            $table->date('fechaBills');
            $table->float('totalBills');
            $table->integer('idBookings');
            $table->foreign('idBookings')->references('idBookings')->on('bookings');
            $table->integer('cedulaBeauticians');
            $table->foreign('cedulaBeauticians')->references('cedulaBeauticians')->on('beauticians');
            $table->timestamps();
        });
    }

    //down() contiene la información necesaria para poder retroceder todo lo que se hizo en el up()
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};