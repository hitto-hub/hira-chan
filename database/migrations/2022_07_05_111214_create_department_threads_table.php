<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_threads', function (Blueprint $table) {
            $table->id();
            $table->string('thread_id');
            $table->integer('message_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->text('message');
            $table->boolean('is_validity')->default(true);
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
        Schema::dropIfExists('department_threads');
    }
}
