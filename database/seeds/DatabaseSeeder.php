<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => "gabriel galvez",
            'email' => "gabrielmar5545@gmail.com",
            'password' => bcrypt('allsekkipasword;)'),
        ]);

        DB::table("threads")->insert([
        	["title" =>"hvað er i matinn nuna" , "context" => "það er einginn matur fyrir eithverja fokking aumingja" , "user_id" => 1],
        	["title" =>"hvað er i matinn amorgun" , "context" => "það er einginn matur fyrir eithverja fokking aumingja hue" , "user_id" => 1],
        	["title" =>"hvað er i matinn föstudaginn" , "context" => "það er einginn matur fyrir eithverja fokking aumingja huehue" , "user_id" => 1],
        	["title" =>"hvað er i matinn laugardaginn" , "context" => "það er einginn matur fyrir eithverja fokking aumingja huehuehue" , "user_id" => 1],
        	["title" =>"hvað er i matinn sunnudaginn" , "context" => "ok þu matt fa egg" , "user_id" => 1],
        	]);
        // git add. git commit git push
    }
}
