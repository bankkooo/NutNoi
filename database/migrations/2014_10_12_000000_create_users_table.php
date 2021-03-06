<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
 /**
 * Run the migrations.
 *
 * @return void
 */
 public function up()
 {
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id')->start_from(100);
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
        $table->string('type')->default('default');
    });
 }
/**
 * Reverse the migrations.
 *
 * 
 * @return void
 */
 public function down()
{
    Schema::dropIfExists('users');
}
}