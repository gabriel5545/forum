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

        DB::table("leikstjori")->insert([
            ["nafn" =>"jón jónsson" , "thjoderindi" => "Íslenskur"],
            ["nafn" =>"carl ulfrik" , "thjoderindi" => "svitjod"],
            ["nafn" =>"eric colafin" , "thjoderindi" => "Bandaræikinn"],
            ["nafn" =>"Gandalf" , "thjoderindi" => "Middle earth"],
            ]);

        DB::table("DvD")->insert([
            ["title" =>"james bond" , "adal_leikari" => "bond james" , "utgafa" => 2005 , "verd" => 2009 , "flokkur" => "spenna" , "leikstjori_ID" => 2  ],
            ["title" =>"areplane fun" , "adal_leikari" => "Íslenskur" , "utgafa" => 1998 , "verd"  => 3009 , "flokkur" => "gaman" , "leikstjori_ID" => 1  ],
            ["title" =>"the hobbit" , "adal_leikari" => "gandalf" , "utgafa" => 2010 , "verd"  => 4009 , "flokkur" => "fantasy" , "leikstjori_ID" => 4  ],
            ["title" =>"my little pony" , "adal_leikari" => "Íslenskur" , "utgafa" => 2017 , "verd"  => 5009 , "flokkur" => "horror" , "leikstjori_ID" => 3  ],
            ]);
        // git add. git commit git push
    }
}
