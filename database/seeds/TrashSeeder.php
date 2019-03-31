<?php

use Illuminate\Database\Seeder;

use App\Trash;

class TrashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Trash::class, 10000)->create();
    }
}
