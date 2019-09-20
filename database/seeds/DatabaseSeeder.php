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
        $this->call(UserinfosSeeder::class);
        $this->call(BaseSeeder::class);
        $this->call(CategoryEqusSeeder::class);
        $this->call(CategoryLicsSeeder::class);
    }
}
