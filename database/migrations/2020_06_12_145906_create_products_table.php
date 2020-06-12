<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
        //'merchant_id', 'publication_id', 'author_id', 'title', 'title_bang', 'isbn', 'edition', 'sku_code',
        //'category', 'sub_category', 'second_sub_category', 'order_type', 'language', 'cover_image', 'cover_collage', 'see_inside',
        //'list_price', 'discount_purchase', 'discount_sales', 'quantity', 'reorder_level', 'uom', 'status', 'approval_status',
        //'created_by', 'updated_by', 'approved_by', 'approved_at', 'detail_info'
            $table->integer('merchant_id');
            $table->integer('publication_id');
            $table->integer('author_id');
            $table->string('title');
            $table->string('title_bang');
            $table->string('isbn')->nullable();
            $table->string('edition')->nullable();
            $table->string('sku_code')->nullable();
            $table->integer('category');
            $table->integer('sub_category');
            $table->integer('second_sub_category');
            $table->integer('order_type')->default(1);
            $table->integer('language')->default(1);
            $table->string('cover_image')->nullable();
            $table->integer('cover_collage')->nullable();
            $table->integer('see_inside')->nullable();
            $table->decimal('list_price', '15','2')->default('0.00');
            $table->decimal('discount_purchase', '5','2')->default('0.00');
            $table->decimal('discount_sales', '5','2')->default('0.00');
            $table->decimal('quantity', '15','2')->default('0.00');
            $table->decimal('reorder_level', '15','2')->default('0.00');
            $table->integer('uom')->default(1);
            $table->integer('status')->default(1);
            $table->integer('approval_status')->default(1);
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('approved_by')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->text('detail_info')->nullable();

            $table->index('publication_id', 'idx_publication');
            $table->index('author_id', 'idx_author');
            $table->index('title', 'idx_prod_title');
            $table->index('title_bang', 'idx_prod_title_bang');
            $table->index('isbn', 'idx_isbn');
            $table->index('sku_code', 'idx_sku_code');
            $table->index('category', 'idx_prod_category');
            $table->index('sub_category', 'idx_prod_sub_category');
            $table->index('second_sub_category', 'idx_second_sub_category');

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
        Schema::dropIfExists('products');
    }
}
