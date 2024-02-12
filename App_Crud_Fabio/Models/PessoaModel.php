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

        Schema::create('pessoas', function (Crud $table) {
            $table->id();
            $table->string("nome", 50);
            $table->integer("cpf", 11);
            $table->string("email", 30);
            $table->string("perfil", 30);
            $table->string("endereco", 30);
            $table->string("cep", 30);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};