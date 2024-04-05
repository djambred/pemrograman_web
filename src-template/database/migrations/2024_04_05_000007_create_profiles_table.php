<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->longText('description')->nullable();
            $table->string('faximile');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
