<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tag;
use App\Models\Event;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag :: factory() 
        -> count(10) 
        -> create() 
        -> each(function($tag){

            $event = Event :: inRandomOrder() -> limit(3) -> get();
            $tag -> events() -> attach($event);

            $tag -> save();
        });
    }
}
