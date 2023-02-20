<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->integer('maths1')->nullable();
            $table->integer('maths2')->nullable();
            $table->integer('maths3')->nullable();
            $table->integer('maths4')->nullable();
            $table->integer('maths5')->nullable();
            $table->integer('maths6')->nullable();
            $table->integer('maths7')->nullable();
            $table->integer('maths8')->nullable();
            $table->integer('maths9')->nullable();
            $table->integer('history1')->nullable();
            $table->integer('history2')->nullable();
            $table->integer('history3')->nullable();
            $table->integer('history4')->nullable();
            $table->integer('history5')->nullable();
            $table->integer('history6')->nullable();
            $table->integer('history7')->nullable();
            $table->integer('history8')->nullable();
            $table->integer('history9')->nullable();
            $table->integer('geography1')->nullable();
            $table->integer('geography2')->nullable();
            $table->integer('geography3')->nullable();
            $table->integer('geography4')->nullable();
            $table->integer('geography5')->nullable();
            $table->integer('geography6')->nullable();
            $table->integer('geography7')->nullable();
            $table->integer('geography8')->nullable();
            $table->integer('geography9')->nullable();
            $table->integer('english1')->nullable();
            $table->integer('english2')->nullable();
            $table->integer('english3')->nullable();
            $table->integer('english4')->nullable();
            $table->integer('english5')->nullable();
            $table->integer('english6')->nullable();
            $table->integer('english7')->nullable();
            $table->integer('english8')->nullable();
            $table->integer('english9')->nullable();
            $table->integer('literature1')->nullable();
            $table->integer('literature2')->nullable();
            $table->integer('literature3')->nullable();
            $table->integer('literature4')->nullable();
            $table->integer('literature5')->nullable();
            $table->integer('literature6')->nullable();
            $table->integer('literature7')->nullable();
            $table->integer('literature8')->nullable();
            $table->integer('literature9')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            /*$table->string('user_name')->nullable();
            $table->foreign('user_name')->references('name')->on('users')->onDelete('set null');*/

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
        Schema::dropIfExists('grades');
    }
};
