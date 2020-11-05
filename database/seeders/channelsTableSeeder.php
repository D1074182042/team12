<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class channelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName()
    {
        $c_name = $this->generateRandomString(rand(2, 15));
        $c_name = strtolower($c_name);
        $c_name = ucfirst($c_name);
        return $c_name;
    }

    public function generateRandomCategory() {
        $category= ['娛樂類', '生活類','教育類'];
        return $category[rand(0, count($category)-1)];
    }

    public function run()
    {
        for ($i=0; $i<25; $i++) {
            $c_name = $this->generateRandomName();
            $category = $this->generateRandomCategory();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('channels')->insert([
                'c_name' => $c_name,
                'category' => $category,
                'fans' => rand(100, 400),
                'views' => rand(100, 300),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
