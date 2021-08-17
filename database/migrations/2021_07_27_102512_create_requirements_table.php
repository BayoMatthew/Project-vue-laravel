<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requirement_type');
           // $table->unsignedBigInteger('category_id');
            //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('category_id')->constrained();
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
        Schema::dropIfExists('requirements');
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });
        // Schema::table('users', function (Blueprint $table) {
        //     $table->dropColumn(['votes', 'avatar', 'location']);
        // });
        
    }
}
