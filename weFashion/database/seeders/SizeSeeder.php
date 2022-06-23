<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(['size' => 'XS']);
        Size::create(['size' => 'S']);
        Size::create(['size' => 'M']);
        Size::create(['size' => 'L']);
        Size::create(['size' => 'XL']);

    }
}
