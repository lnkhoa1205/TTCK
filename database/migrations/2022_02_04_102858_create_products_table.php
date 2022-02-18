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
            $table->id();
            $table->string('name_product');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->restrictOnDelete();
            $table->string('trademark');//nhãn hiệu
            $table->string('origin');//nơi sản xuất
            $table->string('video')->nullable();
            $table->text('description');//mô tả 
            $table->text('size_product')->nullable();//mô tả kích thước
            $table->integer('ship');//lựa chọn kho 
            $table->bigInteger('warehouse_id')->unsigned()->nullable();//địa chỉ kho chứa hàng
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->restrictOnDelete();
            $table->integer('choose');//lựa chọn nhiều hoặc một
            $table->integer('guarantee');//bảo hành
            $table->string('time_guar')->default(0);// thời gian bảo hành
            $table->integer('warranty_form')->default(0);//hình thức bảo hành
            $table->integer('type_guar')->default(0);//loại bảo hành
            $table->string('image_main');//ảnh mặc định
            $table->string('slug');
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
