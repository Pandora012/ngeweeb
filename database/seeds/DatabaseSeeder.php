<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Pegawai', 
            'email'=> 'pegawai11@sima.com',
            'password'=> Hash::make('1sampai8')
        ]);

        User::create([
            'name'=> 'Admin', 
            'email'=> 'adminwibu@sima.com',
            'password'=> Hash::make('1sampai6')
        ]);

        User::create([
            'name'=> 'KepalaDivisi', 
            'email'=> 'kepdis666@sima.com',
            'password'=> Hash::make('gas666')
        ]);

        User::create([
            'name'=> 'Dirut', 
            'email'=> 'dirutwibu@sima.com',
            'password'=> Hash::make('megumi12345')
        ]);
    }
}
