<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoverCollagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cover_collages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('folder_name');
            $table->tinyInteger('status');
            $table->string('added_by');
            $table->string('updated_by');
            $table->index('product_id', 'idx_product_id');
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
        Schema::dropIfExists('cover_collages');
    }
}
