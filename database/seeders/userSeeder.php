<?php

namespace Database\Seeders;

use App\Models\usercompany;
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
        usercompany::create([
            'company_id' => '1',
            'user_id' => '1',
            'comany_name' => 'VijaySoftware',
            'company_location' => 'Kochi'
        ]);
    }
}
