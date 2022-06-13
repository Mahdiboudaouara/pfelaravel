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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->string('role')->nullable();
            $table->string('description')->nullable();
            $table->string('departement')->nullable();
            $table->string('password')->default('password');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel');
    }
};
