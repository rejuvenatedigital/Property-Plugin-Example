<?php namespace Rejuvenate\Properties\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('rejuvenate_properties_properties', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rejuvenate_properties_properties');
    }
}
