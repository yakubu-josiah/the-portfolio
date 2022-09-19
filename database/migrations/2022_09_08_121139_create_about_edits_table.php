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
        Schema::create('about_edits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text', 500)->nullable();
            $table->text('image')->nullable();
            $table->text('images')->nullable();
            $table->text('head')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_edits');
    }
};
