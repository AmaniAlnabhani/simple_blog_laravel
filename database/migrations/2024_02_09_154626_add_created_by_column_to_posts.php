<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                //varchar  title
                
                $table->string('title');
                $table->string('created_by');
                //text description
                $table->text('description');
                $table->timestamps(); /// created at and update at
            });
    
        });
    }
};
