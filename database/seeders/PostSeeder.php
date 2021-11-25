<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Post();
        $post->user_id = 1;
        $post->category_id = 1;
        $post->thumbnail = "https://i.ytimg.com/vi/_uzG-bDL8JM/maxresdefault.jpg";
        $post->title = "ข่าวลุงเสื้อม่วง";
        $post->description = "คนนะพยายามหา";
        $post->detail = "หาสีขาวๆมาใช้หน่อยได้ไหม";
        $post->save();
    }
}
