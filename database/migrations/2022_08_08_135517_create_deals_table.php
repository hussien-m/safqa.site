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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('title',250);
            $table->text('description');
            $table->string('image',250);
            $table->double('price');
            $table->enum('price_condition',[
                'مثل سعر الصفقة',
                'اقل من سعر الصفقة',
                'اكبر من سعر الصفقة',
                'على السوم'
            ]);

            $table->enum('status',[
                'جديدة',
                'قيد التنفيذ',
                'مكتملة',
                'ملغية'
            ])->default('جديدة');

            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('region_id');

            $table->unsignedBigInteger('deal_type_id');
            $table->unsignedBigInteger('deal_target_id');

            $table->unsignedBigInteger('category_id');


            $table->foreign('user_id')
                  ->on('users')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('country_id')
                  ->on('countries')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('city_id')
                  ->on('cities')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('region_id')
                  ->on('regions')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('deal_type_id')
                  ->on('deal_types')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('deal_target_id')
                  ->on('deal_targets')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('category_id')
                  ->on('categories')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');



            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('deals');
    }
};
