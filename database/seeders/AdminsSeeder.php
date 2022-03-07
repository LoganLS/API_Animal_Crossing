<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'Logan',
                'logan.lesaux@gmail.com',
                'crossing'
            ],
            [
                'Mathieu',
                'neyret.mathieu69@gmail.com',
                'laravel'
            ],
            [
                'Anaël',
                'anael.bonnafous@gmail.com',
                'opmopm'
            ],
            [
                'Théo',
                'theonicolas19@outlook.com',
                'password'
            ],
        ];

        foreach ($admins as $admin) {
            Admin::create([
                'name' => $admin[0],
                'email' => $admin[1],
                'password' => $admin[2],
            ]);
        }
    }
}
