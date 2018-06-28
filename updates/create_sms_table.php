<?php namespace Joaquinb\Smssender\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSmsTable extends Migration
{
    public function up()
    {
        Schema::create('joaquinb_smssender_sms', function(Blueprint $table) {
            $table->increments('id');
            $table->string('to');
            $table->longText('body');
            $table->boolean('sended')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('joaquinb_smssender_sms');
    }
}
