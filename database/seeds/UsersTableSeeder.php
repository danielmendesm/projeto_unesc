<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Daniel Mendes',
            'email'     => 'mendes@unesc.com.br',
            'password'  => bcrypt('mudar456'),
        ]);
    }
}
