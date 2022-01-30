<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'username' => 'VertexAdmin',
            'password' => Hash::make('adminvertex123@'),
            'role_id' => 1
        ]);

        User::create([
            'username' => 'VertexUser',
            'password' => Hash::make('uservertex123@'),
            'role_id' => 2
        ]);
    }
}
