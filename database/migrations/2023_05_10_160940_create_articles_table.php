<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); //созданаавтоматически
            //иливручнуюпрописать
            //$table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('body');
            $table->string('img');
            $table->timestamps();
// created_at //созданиестатьи
            // updated_at //обновлениестатьи
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
