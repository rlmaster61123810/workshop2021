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
        $post->thumbnail = "https://pbs.twimg.com/media/EjdXZ4nXgAEYdit.jpg";
        $post->title = "ข่าวท่านศาสดา";
        $post->description = "ชมรมคนชอบหมี";
        $post->detail = "วันพระวันเจ้าไม่เวันกันเลย";
        $post->save();
    }
}
