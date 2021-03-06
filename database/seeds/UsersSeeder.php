<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->command->info('Users created sucessfully!');

        DB::table('users')->delete();
        //  DB::table('users')->truncate();
        DB::table('users')->insert(
            [
            ['first_name' => 'José', 'last_name' => 'Cage', 'email' => 'josejanuario7@gmail.com', 'username' => 'josecage', 'birthdate' => '20000104', 'password' => bcrypt('123456789'), 'created_at' => Carbon\Carbon::now(), 'updated_at' => Carbon\Carbon::now()],
            ['first_name' => 'Jó', 'last_name' => 'Cage', 'email' => 'jocage@doesangue.me', 'username' => 'jocage', 'birthdate' => '19990104', 'password' => bcrypt('123456789'), 'created_at' => Carbon\Carbon::yesterday(), 'updated_at' => Carbon\Carbon::yesterday()],
            ['first_name' => 'Admin', 'last_name' => 'User', 'email' => 'admin@doesangue.me', 'username' => 'userdemo', 'birthdate' => '19950104', 'password' => bcrypt('123456789'), 'created_at' => Carbon\Carbon::tomorrow(), 'updated_at' => Carbon\Carbon::tomorrow() ]
            ]
        );
    }
}
