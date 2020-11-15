<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('admin_cate')->unsigned();
            $table->integer('user_cate')->unsigned();
            $table->string('balance');
            $table->string('total_income');
            $table->string('total_expenses');
            $table->string('note');

            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            // $table->foreign('admin_cate')->references('id')->on('admincategory')->onDelete('cascade');
            // $table->foreign('user_cate')->references('id')->on('usercategory')->onDelete('cascade');
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
        Schema::dropIfExists('transactions');
    }
}
