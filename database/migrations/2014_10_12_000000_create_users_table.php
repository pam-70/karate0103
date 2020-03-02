<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('competition_id')->nullable();//айди соревнований
            $table->integer('club_id')->nullable();//айди клуба
            $table->integer('trainer_id')->nullable();//айди тренера
            $table->string('lastname', 50)->nullable();//фам
            $table->string('firstname', 50)->nullable();//имя
            $table->string('patronymic', 50)->nullable();//отч
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_str');
            $table->string('type', 20)->nullable();//тип записи
            $table->string('gender', 20)->nullable();//пол
            $table->date('dob')->nullable();//дата рождения
            $table->integer('degree')->nullable();//степень
            $table->string('competition')->nullable();//соревнования
            $table->integer('command')->nullable();// название команды
            $table->string('club')->nullable();//название клуба
            $table->string('trainer')->nullable();//тренер
            $table->dateTime('create_dat')->nullable();
            $table->dateTime('update_dat')->nullable();
            $table->dateTime('lastlogge_dat')->nullable();
            $table->dateTime('delete_dat')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
