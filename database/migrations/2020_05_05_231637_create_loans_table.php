<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('client_id');
            $table->string('cantidad');
            $table->string('nopago');
            $table->string('cuota');
            $table->string('totalpagar');
            $table->string('fechaministracion');
            $table->string('fechavencimiento');
            

            $table->timestamps();

            $table->foreign('client_id')
                ->references('id')
                ->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
