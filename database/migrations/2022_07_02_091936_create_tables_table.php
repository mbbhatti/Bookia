<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->unsignedInteger('minimum_capacity')->default(0);
            $table->unsignedInteger('maximum_capacity')->default(0);
            $table->boolean('active')->default(0);
            $table->foreignId('restaurant_id')
                ->constrained('restaurants')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('dining_area_id')
                ->constrained('dining_areas')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('tables');
    }
}
