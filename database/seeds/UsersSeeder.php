<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Usuários criados com sucesso!');

        DB::table('users')->delete();
        //        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
            ['name' => 'José Cage', 'email' => 'josecage@doesangueapp.dev', 'username' => 'josecage', 'bio' => 'Analista de Sistemas', 'password' => bcrypt('1234567')],
            ['name' => 'Jó Cage', 'email' => 'jocage@doesangueapp.dev', 'username' => 'jocage', 'bio' => 'Desenvolvedor web', 'password' => bcrypt('1234567')],
            ['name' => 'User Demo', 'email' => 'demo@doesangueapp.dev', 'username' => 'userdemo', 'bio' => 'Test Driver', 'password' => bcrypt('1234567')],
            ]
        );
    }
}
