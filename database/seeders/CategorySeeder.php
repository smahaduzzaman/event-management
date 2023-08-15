<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Conference'],
            ['name' => 'Workshop'],
            ['name' => 'Seminar'],
            ['name' => 'Team Building'],
            ['name' => 'Trade Shows / Expos'],
            ['name' => 'Corporate Dinners'],
            ['name' => 'Product Launches'],
            ['name' => 'Corporate Board Meetings'],
            ['name' => 'Year-End Functions'],
            ['name' => 'Charity events'],
            ['name' => 'Networking'],
            ['name' => 'Golf Days'],
            ['name' => 'Incentive Trips'],
            ['name' => 'Awards Evenings'],
            ['name' => 'Gala Dinners'],
            ['name' => 'Team Building'],
            ['name' => 'Corporate Family Days'],
        ];

        Category::insert($categories);
    }
}
