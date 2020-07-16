<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('pure_password');
            $table->integer('department_id')->nullable();
            $table->integer('role_id');
            $table->string('degree')->nullable();
            $table->string('email')->nullable();
            $table->string('picture')->default('/images/users/user.jpg');
            $table->boolean('active')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('123'),
                'pure_password'=> '123',
                'role_id' => 1,
                'department_id' => null,
                'degree' => null,
                'email' => null,
                'active' => true
            ], 
            //  [
            //     'name' => 'teacher',
            //     'username' => 'teacher',
            //     'password' => Hash::make('123'),
            //     'pure_password'=> '123',
            //     'department_id' => 1,
            //     'role_id' => 2,
            //     'degree' => 'jkhj',
            //     'email' => 'gfhgfh@fdgf.com',
            //     'active' => false
            // ],   [
            //     'name' => 'student',
            //     'username' => 'student',
            //     'password' => Hash::make('123'),
            //     'pure_password'=> '123',
            //     'department_id' => 1,
            //     'role_id' => 3,
            //     'degree' => 'jkhj',
            //     'email' => 'gfhgfh@fdgf.com',
            //     'active' => false
            // ],
            
        ]);

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
