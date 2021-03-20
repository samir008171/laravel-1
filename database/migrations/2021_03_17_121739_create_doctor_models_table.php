<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id('iUserID');
            $table->string('vFirstName');
            $table->string('vLastName');
            $table->string('vMobile');
            $table->string('vAlternateNo');
            $table->string('vEmail');
            $table->string('vAlternateEmail');
            $table->string('vPassword');
            $table->string('vProfileimg');
            $table->enum('eRole',['Admin','Doctor'])->default('Doctor');
            $table->enum('eStatus',['Active','Inactive'])->default('Active');
            $table->enum('isDelete',['Yes','No'])->default('No');
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
        Schema::dropIfExists('doctor_models');
    }
}
