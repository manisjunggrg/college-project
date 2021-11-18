<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->longText('description');
            $table->unsignedInteger('parent_id', false)
                ->default(0)
                ->comment('0 For parent and other id for sub-category belongs to parent category');
            $table->string('slug')->index();
            $table->string('banner')->nullable();
            $table->string('icon')->nullable();
            $table->integer('order', false)->default(0)->comment('It is used while sorting');
            $table->integer('level', false)->default(0)->comment('Depth of the category');
            $table->boolean('status')->default(1)->comment('1 For active & O for inactive');
            $table->boolean('is_shown')->default(1)->comment('1 indicates to show and 0 for hide');
            $table->string('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->foreignId('created_by')->constrained('users');
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
        Schema::dropIfExists('categories');
    }
}
