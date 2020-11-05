<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtubers', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('yt_name')->comment('成員');
            $table->foreignId("c_ID")->comment('頻道編號');
            $table->tinyInteger('year')->comment('年齡');
            $table->string('education')->comment('學歷');
            $table->string('country')->comment('國家');
            $table->foreign('c_ID')
                ->references('id')
                ->on('channels')
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
        Schema::dropIfExists('youtubers');
    }
}
