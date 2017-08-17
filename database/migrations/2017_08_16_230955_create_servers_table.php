<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
	        $table->engine = 'MyISAM';
	        $table->increments('id');
	        $table->unsignedInteger('location_id');
	        $table->string('model_name');
	        $table->string('ram_size', 6)->index();
	        $table->enum('ram_type', ['DDR3','DDR4']);
	        $table->smallInteger('storage_quantity');
	        $table->smallInteger('storage_capacity');
	        $table->enum('storage_unit', ['GB', 'TB']);
	        $table->enum('storage_type', ['SAS','SATA2','SSD']);
	        $table->double('price', 8, 2);
	        $table->enum('currency', ['USD','EUR','SGD']);
			
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('restrict');
            $table->index(['storage_capacity', 'storage_unit']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
