<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// 追記 データベースに直接アクセスするための道具を使うための準備
use Illuminate\Support\Facades\DB;

// Carbonは時間や日付を扱う時計 その時計を使うために記述
use Carbon\Carbon;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'content' => '商品のお届けについて',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'content' => '商品の交換について',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


            [
                'content' => '商品トラベル',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [   'content' => 'ショップへのお問い合わせ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [   'content' => 'その他',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
