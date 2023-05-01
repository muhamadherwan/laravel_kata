<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Lembaga Peperiksaan',
        ]);
        Customer::create([
            'name' => 'Larawan Sdn. Bhd.',
        ]);
        Customer::create([
            'name' => 'Tailwind Sdn. Bhd.',
        ]);
        Customer::create([
            'name' => 'Kementerian Belia Dan Sukan',
        ]);
    }
}
