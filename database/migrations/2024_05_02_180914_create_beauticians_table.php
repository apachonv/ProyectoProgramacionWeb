<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //up() contiene la informacion que necesita el sistema para crear la tabla
    public function up(): void
    {
        Schema::create('beauticians', function (Blueprint $table) {
            $table->id();
            $table->integer('cedulaBeauticians')->unique();
            $table->string('nombreBeauticians');
            $table->string('emailBeauticians')->unique();
            $table->string('passwordBeauticians');
            $table->integer('cedulaAdministrators');
            $table->foreign('cedulaAdministrators')->references('cedulaAdministrators')->on('administrators');
            $table->timestamps();
        });
    }

    //down() contiene la información necesaria para poder retroceder todo lo que se hizo en el up()
    public function down(): void
    {
        Schema::dropIfExists('beauticians');
    }
};
