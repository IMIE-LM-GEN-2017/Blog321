<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
            'pseudo' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('adminadmin'),
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'pseudo' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'first_name' => $faker->optional()->firstName,
                'last_name' => $faker->optional($weight = 0.75)->lastName,
                'website_url' => $faker->optional($weight = 0.20)->url,
                'portfolio_url' => $faker->optional($weight = 0.80)->url,
                'password' => bcrypt('adminadmin'),
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->words(3, true),
                'description' => $faker->realText(200, 2),
            ]);
        }
        for ($i = 0; $i < 100; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->catchPhrase,
                'content' => $faker->realText(200, 2),
                'category_id' => $faker->numberBetween(1, 10),
                'user_id' => $faker->numberBetween(1, 11),
            ]);
        }

        for ($i = 0; $i < 500; $i++) {
            DB::table('comments')->insert([
                'content' => $faker->realText(200, 2),
                'user_id' => $faker->numberBetween(1, 11),
                'post_id' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
