<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User();
        $user->user_type_id = 1;
        $user->name = "อาจารย์แดง";
        $user->email = "yuk@gmail.com";
        $user->password = bcrypt('123456');
        $user->username = "admin";
        $user->save();
    }
}
