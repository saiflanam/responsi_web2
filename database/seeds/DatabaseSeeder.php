<?php

use Illuminate\Database\Seeder;
use App\Jobs;
use App\Employees;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create();
    }
}
