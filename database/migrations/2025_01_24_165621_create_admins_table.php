<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('admin_name', 40);
            $table->string('admin_email', 60)->unique();
            $table->string('admin_password', 255);
            $table->timestamps(); // Crea columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
