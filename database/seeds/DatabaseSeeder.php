<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(StylistsTableSeeder::class);
         $this->call(ApprenticesTableSeeder::class);
         $this->call(FeedbacksPkTableSeeder::class);
         $this->call(FeedbackClientsPkTableSeeder::class);
         $this->call(OffersTableSeeder::class);
         $this->call(BlogsTableSeeder::class);
         $this->call(BlogParasTableSeeder::class);
    }
}
