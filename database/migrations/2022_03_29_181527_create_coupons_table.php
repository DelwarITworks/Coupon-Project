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
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('website_id')->nullable();
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->default(1);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('discrount')->nullable();
            $table->string('promo_code')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->integer('best_offer')->nullable();
            $table->integer('new_offer')->nullable();
            $table->text('meta_tag')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
