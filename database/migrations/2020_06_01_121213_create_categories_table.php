<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent');
            $table->string('title');
            $table->string('title_bang');
            $table->string('slug')->unique();
            $table->text('detail_info');
            $table->integer('created_by');
            $table->integer('updated_by');

            $table->index('parent', 'idx_category_parent');
            $table->index('title', 'idx_title');
            $table->index('title_bang', 'title_bang');

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
        Schema::dropIfExists('categories');
    }
}
