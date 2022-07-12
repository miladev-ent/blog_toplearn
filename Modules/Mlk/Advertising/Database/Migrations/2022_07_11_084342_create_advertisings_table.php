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
        Schema::create('advertisings', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Mlk\User\Models\User::class);
            $table->text('imagePath');
            $table->string('imageName');
            $table->string('link')->nullable();
            $table->string('title');
            $table->enum('location', Mlk\Advertising\Models\Advertising::$locations);
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
        Schema::dropIfExists('advertisings');
    }
};
