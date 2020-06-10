<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent');
            $table->string('title');
            $table->string('title_bang');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->text('detail_info');
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->index('parent', 'idx_category_parent');
            $table->index('slug', 'idx_category_slug');
            $table->index('title', 'idx_title');
            $table->index('title_bang', 'title_bang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
