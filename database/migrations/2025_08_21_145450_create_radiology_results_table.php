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
        Schema::create('radiology_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id');
            $table->string('image_path');
            $table->text('report')->nullable();
            $table->unsignedBigInteger('technician_id');
            $table->timestamp('uploaded_at')->useCurrent();
            $table->timestamps();

            $table->foreign('request_id')->references('id')->on('radiology_requests')->onDelete('cascade');
            $table->foreign('technician_id')->references('id')->on('radiology_technicians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radiology_results');
    }
};
