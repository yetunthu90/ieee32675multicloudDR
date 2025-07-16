<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('course_id')->unique(); // Generated course ID
            $table->string('course_name');
            $table->integer('duration');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('capacity');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->timestamps(); // For created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
