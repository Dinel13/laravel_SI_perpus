<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReturnAndReaciverOnBorrowHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borrow_history', function (Blueprint $table) {
            
            $table->dateTime('dikembalikan')->nullable()->default(null)->after('book_id');
            $table->bigInteger('admin')->nullable()->default(null)->after('dikembalikan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrow_history', function (Blueprint $table) {
            $table->dropColumn('dikembalikan');
            $table->dropColumn('admin');
            
        });
    }
}
