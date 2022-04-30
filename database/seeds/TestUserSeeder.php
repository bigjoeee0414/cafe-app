<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $cnt = 1; $cnt <= 20; $cnt++ ) { 
          User::create([
          'name' => 'テストユーザー' . $cnt,
          'email' => 'test' .$cnt . '@example.com',
          'password' => Hash::make('testtest'),
          ]);
        }
    }
}
