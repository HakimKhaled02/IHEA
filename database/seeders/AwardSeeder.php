<?php

namespace Database\Seeders;

use App\Models\Award;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $awards = [
            [
                'title' => 'Excellence in Innovation',
                'description' => 'Recognizing outstanding innovation and creativity in technology solutions that have made a significant impact on the industry.',
                'category' => 'Innovation',
                'recipient' => 'John Doe',
                'date' => '2024-01-15',
                'status' => 'active',
            ],
            [
                'title' => 'Best Research Paper',
                'description' => 'Awarded for exceptional research contributions and academic excellence in the field of computer science.',
                'category' => 'Research',
                'recipient' => 'Jane Smith',
                'date' => '2024-02-20',
                'status' => 'active',
            ],
            [
                'title' => 'Outstanding Leadership',
                'description' => 'Recognizing exceptional leadership qualities and contributions to team success and organizational growth.',
                'category' => 'Leadership',
                'recipient' => 'Michael Johnson',
                'date' => '2024-03-10',
                'status' => 'active',
            ],
        ];

        foreach ($awards as $award) {
            Award::create($award);
        }
    }
}

