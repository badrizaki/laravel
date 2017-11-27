<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable()->comment('name from user');
            $table->string('username', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->string('roleCode', 50)->default('MBR')->comment('Role Code for user type (SUP/Super Admin,MKG/Marketing,Member/MBR)')->index();
            $table->tinyInteger('emailConfirmed')->default(1)->nullable()->comment('email active, 0:not active, 1:active')->index();
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
