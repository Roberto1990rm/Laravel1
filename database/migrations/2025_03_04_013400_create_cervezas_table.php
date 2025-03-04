<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cervezas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('graduacion', 4, 2);
            $table->decimal('precio', 8, 2);
            $table->string('origen');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }
    
    

    public function down(): void {
        Schema::dropIfExists('cervezas');
    }
};

