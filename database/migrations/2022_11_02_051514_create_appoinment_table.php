<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinment', function (Blueprint $table) {
            $table->id();
            $table->text('customer_name');
            $table->text('vehicle_number');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('slot_id')->unsigned()->comment('Referred from slot');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
        Schema::table('appoinment', function(Blueprint $table) {
            $table->foreign('slot_id')->references('id')->on('slot')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appoinment');
    }
}
