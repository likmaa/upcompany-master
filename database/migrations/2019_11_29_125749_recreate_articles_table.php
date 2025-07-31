<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('articles');
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('alias',400);
            $table->text('short_description');
            $table->mediumText('description')->nullable();
            $table->boolean('state')->default(1);
            $table->boolean('featured')->default(0);
            $table->unsignedInteger('hits')->default(0);
            $table->unsignedInteger('ordering')->default(0);
            $table->unsignedBigInteger('categorie_id')->default(1);
            $table->unsignedBigInteger('created_by')->default(1);
            $table->string('created_by_guard')->default('admin');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->string('updated_by_guard')->nullable();
            $table->dateTime('publish_up')->nullable();
            $table->dateTime('publish_down')->nullable();
            $table->text('params')->nullable();
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
            Schema::dropIfExists('articles');
        });
    }
}
