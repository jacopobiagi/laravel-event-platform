<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Tag;
use App\Models\User;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Event :: factory() 
        -> count(10) 
        -> create() 
        -> each(function($event){

            $tag = Tag :: inRandomOrder() -> limit(3) -> get();
            $event -> tags() -> attach($tag);
            $event -> save();

        });
        Event :: factory() 
        -> count(10) 
        -> make() 
        -> each(function($event){

            $user = User :: inRandomOrder() -> first();
            $event -> user() -> associate($user);
            $event -> save();

        });
    }
}
