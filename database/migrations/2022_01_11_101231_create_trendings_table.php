<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trendings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('posted_by')->unsigned();
            $table->foreign('posted_by')->references('id')
                ->on('admin_users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('trendings');
    }
}
