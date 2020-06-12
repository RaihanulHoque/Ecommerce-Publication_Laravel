<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSeeInsidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_see_insides', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('book_see_insides');
    }
}
