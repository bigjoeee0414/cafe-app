<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * データベース初期値設定の実行
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UsersTableSeeder::class,
        TestUserSeeder::class
        ]);
    }
}