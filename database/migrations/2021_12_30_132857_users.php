<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->id();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 255)->unique();
            $table->text('password');
            $table->string('phone', 20)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('email_verification_code')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->text('phone_verification_code')->nullable();
            $table->text('profile_picture')->nullable();
            $table->integer('default_organisation_id')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('status')->default(0)->comment('0: Inactive, 1:Active');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
