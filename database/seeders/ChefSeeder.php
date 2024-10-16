<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chef::insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Chef 1',
                'position' => 'Master Chef',
                'description' => 'Chef 1',
                'image' => 'image',
                'insta_link' => 'https://instagram.com/chef1/',
                'linked_link' => 'https://linkedin.com/chef1/'
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Chef 2',
                'position' => 'Patissier',
                'description' => 'Chef 2 description',
                'image' => 'image',
                'insta_link' => 'https://instagram.com/chef2/',
                'linked_link' => 'https://linkedin.com/chef2/'
            ],
        ]);
    }
}
