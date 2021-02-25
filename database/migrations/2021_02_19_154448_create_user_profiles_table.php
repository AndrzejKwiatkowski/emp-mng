<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('street', 255)->nullable();
            $table->string('post_code')->nullable();
            $table->date('brith_day')->nullable();
            $table->integer('phone')->nullable();
            $table->string('job_title', 255)->nullable();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropForeign('user_profiles_user_id_foreign');
            $table->dropIndex('user_profiles_user_id_index');
        });
        Schema::dropIfExists('user_profiles');
    }
}
