<?php 
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'aryasokker23@gmail.com',
            'password' => bcrypt('arya2003ok'),
            'role' => 'superadmin',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'dnasite221@gmail.com',
            'password' => bcrypt('arya2003ok'),
            'role' => 'admin',
        ]);
    }
}
