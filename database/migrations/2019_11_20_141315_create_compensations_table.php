<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompensationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compensations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->string('company');
            $table->unsignedBigInteger('title_id');
            $table->string('title');
            $table->unsignedBigInteger('level_id');
            $table->string('level');
            $table->string('location');
            $table->integer('year_of_exp');
            $table->integer('year_at_comp');
            $table->decimal('yearly_salary',15)->default(0.00);
            $table->decimal('monthly_salary',15)->default(0.00);
            $table->string('bonus');
            $table->string('gender');
            $table->integer('approved');
            $table->string('certification');
            $table->decimal('total',15)->default(0.00);
            $table->timestamps();


            //foreign keys on the table
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compensations');
    }
}
