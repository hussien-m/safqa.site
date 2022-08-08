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
        Schema::create('deal_targets', function (Blueprint $table) {
            $table->id();

            $table->text('target_deal');

            $table->enum('user_pay',['dealer','user']);

            $table->unsignedBigInteger('deal_type_id');

            $table->foreign('deal_type_id')
                  ->on('deal_types')
                  ->references('id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('deal_targets');
    }
};
