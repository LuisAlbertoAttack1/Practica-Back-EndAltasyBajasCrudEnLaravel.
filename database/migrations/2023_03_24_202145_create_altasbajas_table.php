<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltasbajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altasbajas', function (Blueprint $table) {
            $table->id();
            //estos se colocan depende a tus campos de table
            $table->string('Tipo');
            $table->string('Categoria');
            $table->string('Cantidad');
            $table->string('Descripcion');
            $table->string('Fecha');
            
            $table->timestamps();
            //acabando esto es el comando php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('altasbajas');
    }
}
