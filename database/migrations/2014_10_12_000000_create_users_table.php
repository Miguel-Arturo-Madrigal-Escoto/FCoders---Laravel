<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                        // Integer Unsigned Increment
            $table->string('name');              // Varchar ('name', tamaño)
            $table->string('email')->unique();   // Varchar ('email', tamaño) Unique
            $table->timestamp('email_verified_at')->nullable(); // Timestamp ('email_verified_at'), puede ser nulo
            $table->string('password');          // Varchar ('password', tamaño) 
            $table->rememberToken();             // Varchar ('remember_token', tamaño->100), utilizado para recordar la sesión del usuario
            $table->timestamps();                // Timestamps (created_at, updated_at), cuando se crean registros
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
