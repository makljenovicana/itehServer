<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {

        // User::truncate();
        // Order::truncate();
        // Product::truncate();


        $this->call([
            UsersSeeder::class,
            ProductSeeder::class,
            // Dodajte ostale seedere ovde...
        ]);

        User::factory()->count(10)->create();
        Product::factory()->count(3)->create();
        Order::factory()->count(4)->create();

        



        // User::factory()->create([

        //     'name' => 'Karl Nikl',
        //     'email' => 'karl@example.com',
        // ]);
    }
}
