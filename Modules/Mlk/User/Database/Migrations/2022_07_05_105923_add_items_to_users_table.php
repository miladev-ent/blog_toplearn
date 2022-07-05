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
        Schema::table('users', static function (Blueprint $table) {
            $table->string('telegram')->nullable()->unique();
            $table->string('linkedin')->nullable()->unique();
            $table->string('twitter')->nullable()->unique();
            $table->string('instagram')->nullable()->unique();
            $table->text('bio')->nullable();
            $table->string('imageName')->nullable();
            $table->string('imagePath')->nullable();
            $table->enum('status', Mlk\User\Models\User::$statuses)
            ->default(Mlk\User\Models\User::STATUS_ACTIVE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', static function (Blueprint $table) {
            $table->dropColumn('telegram');
            $table->dropColumn('linkedin');
            $table->dropColumn('twitter');
            $table->dropColumn('instagram');
            $table->dropColumn('bio');
            $table->dropColumn('imageName');
            $table->dropColumn('imagePath');
            $table->dropColumn('status');
        });
    }
};
