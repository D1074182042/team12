<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class youtubersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName() {
        $yt_name = $this->generateRandomString(rand(2, 15));
        $yt_name = strtolower($yt_name);
        $yt_name = ucfirst($yt_name);
        return $yt_name;
    }

    public function generateRandomPosition()
    {
        $education = ['國立臺灣戲曲學院', '輔仁大學', '真理大學', '國立臺灣藝術大學', '臺灣首府大學', '國立臺灣師範大學', '淡江大學',
            '大同大學', '臺北城市科技大學', '莊敬高職', '馬偕護專', '美和科技大學', '未知', '三重商工',
            '國立交通大學', '國立清華大學', '羅東高商', '聖母醫護管理專科', '南強工商'];
        return $education[rand(0, count($education) - 1)];
    }

    public function generateRandomNationality() {
        $country = ['美國', '日本', '臺灣', '韓國', '中國'];
        return $country[rand(0, count($country)-1)];

    }
    public function run()
    {
        for ($i=0; $i<500; $i++)
        {
            $yt_name = $this->generateRandomName();
            $education = $this->generateRandomPosition();
            $country = $this->generateRandomNationality();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('youtubers')->insert([
                'yt_name' => $yt_name,
                'c_ID' => rand(1, 25),
                'education' => $education,

                'year' => rand(20,55),
                'country' => $country,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
