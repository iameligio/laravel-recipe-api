<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Category::class,5)->create();
        factory(App\Recipe::class,100)->create();
        factory(App\Ingredient::class,600)->create();
        factory(App\Instruction::class,600)->create();
    }
}
