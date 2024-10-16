<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Wedding Party',
                'description' => 'Wedding Party description',
                'price' => 150000,
                'image' => null,
                'status' => 'active',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Birthdy Party',
                'description' => 'Birthday Party description',
                'price' => 50000,
                'image' => null,
                'status' => 'active',
            ],
        ]);
    }
}
