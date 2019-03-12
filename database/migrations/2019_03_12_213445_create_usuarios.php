<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('rol')->nullable();
            $table->string('fotourl')->nullable();
            $table->timestamps();
        });

		DB::table('usuarios')->insert([
	            'name' => 'Juan Carlos Quintaniña Robles',
	            'email' => 'example@example.com',
	            'rol' => 'usuario administrador vendedor',
	            'fotourl' => 'http://api.randomuser.me/portraits/men/58.jpg'
	        ]
	    );

		DB::table('usuarios')->insert([
	            'name' => 'Mariana Rojas Rialdo',
	            'email' => 'mariana213@example.com',
	            'rol' => 'vendedor',
	            'fotourl' => 'https://api.randomuser.me/portraits/women/68.jpg'
	        ]
	    );

		DB::table('usuarios')->insert([
	            'name' => 'Pepe Carlos Esternico Rimac',
	            'email' => 'pepecarlos29@example.com',
	            'rol' => 'vendedor',
	            'fotourl' => 'https://api.randomuser.me/portraits/men/29.jpg'
	        ]
	    );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
