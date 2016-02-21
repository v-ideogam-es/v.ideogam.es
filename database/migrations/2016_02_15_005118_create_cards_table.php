<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', ['application', 'device', 'individual', 'location', 'org']);
            $table->integer('bday')->unsigned()->nullable();
            $table->string('email')->nullable();
            $table->string('gender_identity')->nullable();
            $table->string('geo')->nullable();
            $table->string('job_title')->nullable();
            $table->string('label')->nullable();
            $table->string('logo')->nullable();
            $table->string('nickname')->nullable();
            $table->string('photo')->nullable();
            $table->string('role')->nullable();
            $table->string('sex')->nullable();
            $table->string('tel')->nullable();
            $table->string('tz')->nullable();
            $table->string('url')->nullable();
            $table->string('note')->nullable();
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
        Schema::drop('cards');
    }
}
