<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS= 0');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS= 1');
        
        DB::table('users')->insert([
            'name' => 'Caceres',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Caceres',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Henrry',
            'email' => 'admin3@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Oscar',
            'email' => 'admin4@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'Caseres',
            'email' => 'admin5@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'admin6@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'manuel',
            'email' => 'admin7@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 7
        ]);
        DB::table('users')->insert([
            'name' => 'Ana',
            'email' => 'admin8@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 8
        ]);
        DB::table('users')->insert([
            'name' => 'Maria',
            'email' => 'admin9@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 9
        ]);
        DB::table('users')->insert([
            'name' => 'Juan',
            'email' => 'admin10@gmail.com',
            'password' => bcrypt('1234'),
            'profession_id' => 10
        ]);
    }
}
