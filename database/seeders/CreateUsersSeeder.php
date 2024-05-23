<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@email.com',
                'type' => 0,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'type' => 1,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Dosen',
                'email' => 'dosen@email.com',
                'type' => 2,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@email.com',
                'type' => 3,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Tendik',
                'email' => 'tendik@email.com',
                'type' => 4,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Admin Akademik',
                'email' => 'akademik@email.com',
                'type' => 5,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Admin Keuangan',
                'email' => 'keuangan@email.com',
                'type' => 6,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Direktur',
                'email' => 'direktur@email.com',
                'type' => 7,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Wakil Direktur 1',
                'email' => 'wd1@email.com',
                'type' => 8,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Wakil Direktur 2',
                'email' => 'wd2@email.com',
                'type' => 9,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Wakil Direktur 3',
                'email' => 'wd3@email.com',
                'type' => 10,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Admin LPPM',
                'email' => 'lppm@email.com',
                'type' => 11,
                'password' => bcrypt('12345'),
            ],
            [
                'name' => 'Admin SDM',
                'email' => 'sdm@email.com',
                'type' => 12,
                'password' => bcrypt('12345'),
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
