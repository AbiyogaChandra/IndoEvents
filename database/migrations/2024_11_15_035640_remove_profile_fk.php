<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->dropForeign('profile_id');
            //$table->dropColumn("profile_id");
        });
        Schema::table('profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            //$table->integer('id')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('profile_id')->constrained('profiles');
        });
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropColumn("user_id");
        });
    }
};
