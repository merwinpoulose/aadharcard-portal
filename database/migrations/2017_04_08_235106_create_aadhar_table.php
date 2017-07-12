<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAadharTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('aadhar_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 50);
            $table->string('email',255)->unique_index();
            $table->string('alt_email',255)->nullable();
            $table->string('phone_no')->nullable();
            $table->string('mobile_no');
            $table->string('address', 255);
            $table->string('locality', 30);
            $table->string('panchayath', 30);
            $table->string('district', 30);
            $table->string('state', 30);
            $table->string('country', 30);
            $table->date('dob');
            $table->string('blood_group', 10);
            $table->string('pan_card_no', 20)->unique_index()->nullable();
            $table->string('passport_no', 20)->unique_index()->nullable();
            $table->string('voter_id', 20)->unique_index()->nullable();
            $table->string('image', 30);
            $table->enum('status', ['approved','requested','pending','rejected'])->default('requested');
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
        //
    }
}
