<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "full_name"=>"بشار مكي العيساوي",
            "email"=>"bashar_sh77@uomustansiriyah.edu.iq",
            "password"=>bcrypt(11111111),
            "university"=>"Al_Mustansiriyah",
            "collage"=>"Sciences",
            "section"=>"computer science",
           
            "status"=>1
            
        ]);
        User::create([
            "full_name"=>"بسام باسم جميل .",
            "email"=>"dr.balkindy@uomustansiriyah.edu.iq",
            "password"=>bcrypt(11111111),
            "university"=>"Al_Mustansiriyah",
            "collage"=>"Sciences",
            "section"=>"computer science",
           
            "status"=>1
            
        ]);
        User::create([
            "full_name"=>"مصعب رياض عبد الرزاق",
            "email"=>"m.shaibani@uomustansiriyah.edu.iq",
            "password"=>bcrypt(11111111),
            "university"=>"Al_Mustansiriyah",
            "collage"=>"Sciences",
            "section"=>"computer science",
           
            "status"=>1
            
        ]);
        User::create([
            "full_name"=>"الاء سنان عباس",
            "email"=>"alaa.alkhafaji@uomustansiriyah.edu.iq",
            "password"=>bcrypt(11111111),
            "university"=>"Al_Mustansiriyah",
            "collage"=>"Sciences",
            "section"=>"computer science",
           
            "status"=>1
            
        ]);
    }
}