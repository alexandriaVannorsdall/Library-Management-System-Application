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
        Schema::create('library_data', function (Blueprint $table) {
                $table->id(); // primary
                $table->string('title');
                $table->string('author');
                $table->text('description');
                $table->integer('year_published');
                $table->integer('num_of_pages');
                $table->string('genre');
                $table->timestamps(); // created_at and updated_at
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_data');
    }
};
