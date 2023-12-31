<?php

namespace Database\Seeders;

use App\Models\Foo;
use Illuminate\Database\Seeder;

class FooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Foo::factory()->count(10)->create();
    }
}
