<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Invoice;
use App\Models\user_details;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create([
            'id' => '2',
            'qty' => '15',
            'user_id' => '1',
            'amount' => '15000',
            'total_amount' => '25000',
            'tax_percentage' => '15',
            'tax_amount' => '2540.21',
            'net_amount' => '23695.74',
            'invoice_date' => '2023-09-26',
            'customer_name' => 'Sherin S Mathew',
            'customer_email' => 'sherin@gmail.com',
            'file_upload' => 'abc.pdf', 
        ]);
    }
}
