<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Accounting/Finance',
            ],
            [
                'id' => 2,
                'name' => '/AdminHuman Resources',
            ],
            [
                'id' => 3,
                'name' => '/SalesMarketing',
            ],
            [
                'id' => 4,
                'name' => 'Arts/Huam/Commnication',
            ],
            [
                'id' => 5,
                'name' => 'Services',
            ],
            [
                'id' => 6,
                'name' => 'Hotel/restorant',
            ],
            [
                'id' => 7,
                'name' => 'Education/Traning',
            ],
            [
                'id' => 8,
                'name' => 'Computer/Information Technology',
            ],
            [
                'id' => 9,
                'name' => 'Engineering',
            ],
            [
                'id' => 10,
                'name' => 'Manufacturing',
            ],
            [
                'id' => 11,
                'name' => 'Building/Construction',
            ],
            [
                'id' => 12,
                'name' => 'Sciences',
            ],
            [
                'id' => 13,
                'name' => 'Healthcaare',
            ],
            [
                'id' => 14,
                'name' => 'Other',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
