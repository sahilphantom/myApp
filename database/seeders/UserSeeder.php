<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'first_name' => 'Ali',
            'last_name' => 'Khan',
            'email' => 'AliKhan@Gmail.com',
            'is_active' => true,
        ]);

        User::create([
            'first_name' => 'Sara',
            'last_name' => 'Noor',
            'email' => 'Sara@Noor.com',
            'is_active' => false,
        ]);

        User::create([
            'first_name' => 'Zain',
            'last_name' => 'Ahmed',
            'email' => 'Zain@Outlook.com',
            'is_active' => true,
        ]);

         User::create([
            'first_name' => 'Sahil',
            'last_name' => 'Mahmood',
            'email' => 'Sahil@.com',
            'is_active' => true,
        ]);

         User::create([
            'first_name' => 'Yusaf',
            'last_name' => 'Next',
            'email' => 'Yusafdev@.com',
            'is_active' => true,
        ]);
    }
}
