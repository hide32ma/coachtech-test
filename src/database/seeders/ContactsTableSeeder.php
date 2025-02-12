<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// データベースに直接アクセスするための道具を使うための準備
use Illuminate\Support\Facades\DB;

// Contactはデータベースのcontactsテーブルを操作する為の道具 それを使う為に記述する
use App\Models\Contact;


class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 追記
        Contact::factory()->count(35)->create();
    }
}
