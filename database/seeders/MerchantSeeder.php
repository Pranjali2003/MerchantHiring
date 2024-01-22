<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merchant;
class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Merchant::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '123-456-7890',
            'address' => '123 Main St, City, Country',
            // Add other fields as needed
        ]);
    }
}
