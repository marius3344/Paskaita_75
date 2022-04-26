<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id2');
            $table->bigInteger('votes');
            $table->binary('photo')->nullable();
            $table->boolean('confirmed')->default(true);
            $table->char('name', 100)->unique();
            $table->string('last_name', 650); //VARCHAR
            $table->dateTime('created2_at');
            $table->date('modified2_at');
            $table->decimal('amount', $precision = 5, $scale = 2);
            $table->double('amount2', 5, 2);
            $table->float('amount3', 5, 2)->invisible()->default(56.23);
            $table->enum('difficulty', ['easy', 'medium', 'hard']);
            $table->foreignId('user_id');
            //$table->foreignIdFor(User::class);
            //$table->integer('age')->autoIncrement();
            $table->time('alarm');
            $table->timestamp('added_time')->useCurrent(); //useCurrentOnUpdate()
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
        Schema::dropIfExists('flights');
    }
}
