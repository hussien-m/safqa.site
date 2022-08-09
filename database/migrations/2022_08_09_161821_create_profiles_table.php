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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->on('users')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');


            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                  ->on('countries')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                  ->on('cities')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')
                  ->on('regions')
                  ->references('id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->string('image',255)->default('user.png');

            $table->string('phone',9);

            $table->boolean('verifi')->default(false);

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
        Schema::dropIfExists('profiles');
    }
};
