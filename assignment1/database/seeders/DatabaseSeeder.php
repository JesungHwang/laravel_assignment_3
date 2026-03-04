<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

public function run(): void
{
    DB::table('assignment_1')->insert([
        [
            'prodName' => 'Keyboard',
            'prodDesc' => 'Mechanical keyboard',
            'prodCode' => 101,
            'prodCost' => 120.00,
        ],
        [
            'prodName' => 'Mouse',
            'prodDesc' => 'Wireless mouse',
            'prodCode' => 102,
            'prodCost' => 45.00,
        ],
        [
            'prodName' => 'Monitor',
            'prodDesc' => '27 inch display',
            'prodCode' => 103,
            'prodCost' => 300.00,
        ],
    ]);
}
