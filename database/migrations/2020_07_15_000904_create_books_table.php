<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->unsignedBigInteger('autor_id');
            $table->string('title');
            $table->text('desc');
            $table->string('cover')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autors')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
