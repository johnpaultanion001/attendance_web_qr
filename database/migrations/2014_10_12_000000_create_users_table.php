<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->date('birth_date')->nullable();
            $table->string('age')->nullable();
            $table->string('contact_number')->unique();
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->longText('address')->nullable();
            $table->string('id_picture')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->boolean('isRegistered')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
