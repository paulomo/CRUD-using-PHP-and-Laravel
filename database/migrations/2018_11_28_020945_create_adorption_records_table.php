<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdorptionRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adorption_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Bldg_Ministry_Official_Name');
            $table->string('Bldg_City');
            $table->string('Bldg_Postal_Code');
            $table->string('Bldg_Latitude');
            $table->string('Bldg_Longitude');
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
        Schema::dropIfExists('adorption_records');
    }
}
