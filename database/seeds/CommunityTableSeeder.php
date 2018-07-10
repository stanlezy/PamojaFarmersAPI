<?php

use Illuminate\Database\Seeder;
use App\Community;
class CommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Community::truncate();
        $faker =\Faker\Factory::create();
        for ($i =0; $i<50;$i++){
            Community::create([
                'Name' =>$faker->name,
                'User_id'=>$faker->randomDigitNotNull,
                'Type'=>$faker->name,
                'Reason'=>$faker->sentence
            ]);
        }

    }
}
