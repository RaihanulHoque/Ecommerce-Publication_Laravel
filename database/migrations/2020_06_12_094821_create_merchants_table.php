<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_bang');
            $table->integer('athorised_person');
            $table->string('slug');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->text('detail_info')->nullable();
            $table->string('image')->nullable();
            $table->integer('created_by');
            $table->integer('status')->default('1');
            $table->integer('updated_by')->nullable();
            $table->index('slug', 'idx_pbl_slug');
            $table->index('title', 'idx_pbl_name');
            $table->index('title_bang', 'idx_pbl_name_bang');
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
        Schema::dropIfExists('merchants');
    }
}
