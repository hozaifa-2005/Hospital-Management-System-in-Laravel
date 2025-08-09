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
        Schema::create('surgery_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surgery_id');
            $table->string('item_used');
            $table->integer('quantity');
            $table->text('remarks')->nullable();
            $table->timestamps();

            $table->foreign('surgery_id')->references('id')->on('surgeries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surgery_logs');
    }
};
