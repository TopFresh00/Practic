<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @throws Exception
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('is_admin')->default(false);
        });
        DB::table('users')->insert(
            [
                [
                    'name'=>'TopFresh00',
                    'email'=>'podsitkin.kirill1996@gmail.com',
                    'password'=>Hash::make('qwerty'),
                    'remember_token'=>null,
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                    'is_admin'=>true
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('truncate table users');
        Schema::dropIfExists('users');
    }
}
