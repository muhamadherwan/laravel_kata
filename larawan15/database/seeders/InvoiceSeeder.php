<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::create([
            'invoice_number' => 'INV-20230310-001',
            'title' => 'First Invoice',
            'customer_id' => 1,
            'user_id' => 1
        ]);
        Invoice::create([
            'invoice_number' => 'INV-20230310-002',
            'title' => 'Second Invoice',
            'customer_id' => 2,
            'user_id' => 2
        ]);
        Invoice::create([
            'invoice_number' => 'INV-20230310-003',
            'title' => 'Third Invoice',
            'customer_id' => 1,
            'user_id' => 1
        ]);
        Invoice::create([
            'invoice_number' => 'INV-20230310-004',
            'title' => 'Forth Invoice',
            'customer_id' => 3,
            'user_id' => 2
        ]);
        Invoice::create([
            'invoice_number' => 'INV-20230310-005',
            'title' => 'Fifth Invoice',
            'customer_id' => 1,
            'user_id' => 1
        ]);
    }
}
