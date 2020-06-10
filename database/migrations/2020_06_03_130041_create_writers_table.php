<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //title title_bang slug phone email address detail_info
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_bang');
            $table->string('slug');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->text('detail_info');
            $table->string('image')->nullable();
            $table->string('image_origin_name')->nullable();
            $table->integer('created_by');
            $table->integer('status')->default('1');
            $table->integer('updated_by')->nullable();
            $table->index('slug', 'idx_writer_slug');
            $table->index('title', 'idx_writer_name');
            $table->index('title_bang', 'idx_writer_name_bang');
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
        Schema::dropIfExists('writers');
    }
}
