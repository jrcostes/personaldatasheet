<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprinteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname', 64);
            $table->string('firstname', 64);
            $table->string('firstnameext', 64)->nullable();
            $table->string('midname', 64);
            $table->date('birthdate');
            $table->string('sex', 64);
            $table->string('placeofBirth', 64);
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('bloodType')->nullable();
            $table->biginteger('gsisno')->nullable();
            $table->biginteger('pagibigno')->nullable();
            $table->biginteger('philhealthno')->nullable();
            $table->biginteger('sssno')->nullable();
            $table->biginteger('tinno')->nullable();
            $table->string('agencyemp')->nullable();
            $table->string('citizens')->nullable();
            $table->string('country')->nullable();
            $table->string('residential-house', 300)->nullable();
            $table->string('residential-st', 300)->nullable();
            $table->string('residential-sudv', 300)->nullable();
            $table->string('residential-brgy', 300)->nullable();
            $table->string('residential-city', 300)->nullable();
            $table->string('residential-prv', 300)->nullable();
            $table->integer('residential-zip')->nullable();
            $table->string('permanent-house', 300)->nullable();
            $table->string('permanent-st', 300)->nullable();
            $table->string('permanent-sudv', 300)->nullable();
            $table->string('permanent-brgy', 300)->nullable();
            $table->string('permanent-city', 300)->nullable();
            $table->string('permanent-prv', 300)->nullable();
            $table->integer('permanent-zip')->nullable();
            $table->string('telno', 64)->nullable();
            $table->string('mobno', 64)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('spousesn')->nullable();
            $table->string('spousefn')->nullable();
            $table->string('spousenmext')->nullable();
            $table->string('spousemn')->nullable();
            $table->string('spouseocc')->nullable();
            $table->string('spouseemp')->nullable();
            $table->string('spouseempadd')->nullable();
            $table->string('spousetel')->nullable();
            $table->string('fathersn')->nullable();
            $table->string('fatherfn')->nullable();
            $table->string('fatherext')->nullable();
            $table->string('fathermn')->nullable();
            $table->string('mothersn')->nullable();
            $table->string('motherfn')->nullable();
            $table->string('motherext')->nullable();
            $table->string('mothermn')->nullable();
            $table->string('child0')->nullable();
            $table->string('birthchild0')->nullable();
            $table->string('child1')->nullable();
            $table->string('birthchild1')->nullable();
            $table->string('child2')->nullable();
            $table->string('birthchild2')->nullable();
            $table->string('child3')->nullable();
            $table->string('birthchild3')->nullable();
            $table->string('child4')->nullable();
            $table->string('birthchild4')->nullable();
            $table->string('elemname')->nullable();
            $table->string('elemdeg')->nullable();
            $table->YEAR('attendancefrom')->nullable();
            $table->YEAR('attendanceto')->nullable();
            $table->string('elemunitLevel')->nullable();
            $table->YEAR('yeargradelem')->nullable();
            $table->string('scholarshipelem')->nullable();
            $table->string('hsname')->nullable();
            $table->string('hsdeg')->nullable();
            $table->YEAR('attendancefromhs')->nullable();
            $table->YEAR('attendancetohs')->nullable();
            $table->string('hsunitLevel')->nullable();
            $table->YEAR('yeargradhs')->nullable();
            $table->string('scholarshiphs')->nullable();
            $table->string('vocname')->nullable();
            $table->string('vocdeg')->nullable();
            $table->YEAR('attendancefromvoc')->nullable();
            $table->YEAR('attendancetovoc')->nullable();
            $table->string('vocunitLevel')->nullable();
            $table->YEAR('yeargradvoc')->nullable();
            $table->string('scholarshipvoc')->nullable();
            $table->string('colname')->nullable();
            $table->string('coldeg')->nullable();
            $table->YEAR('attendancefromcol')->nullable();
            $table->YEAR('attendancetocol')->nullable();
            $table->string('colunitLevel')->nullable();
            $table->YEAR('yeargradcol')->nullable();
            $table->string('scholarshipcol')->nullable();
            $table->string('gradname')->nullable();
            $table->string('graddeg')->nullable();
            $table->YEAR('attendancefromgrad')->nullable();
            $table->YEAR('attendancetograd')->nullable();
            $table->string('gradunitLevel')->nullable();
            $table->YEAR('yeargrad')->nullable();
            $table->string('scholarshipgrad')->nullable();
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
        Schema::dropIfExists('sheet');
    }
}
