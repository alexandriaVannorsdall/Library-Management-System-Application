<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Library::factory(15)->create();
    }
}
