<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner = new \App\Models\Banner();
        $banner->user_id = 1;
        $banner->name = "แมวๆๆๆ";
        $banner->url = "https://pbs.twimg.com/media/EcesYuNU0AAxiSy.jpg";
        $banner->save();


    }
}
