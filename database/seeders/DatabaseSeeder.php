<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skills;
use App\Models\Tag;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Skills::factory(10)->create();

        Tag::factory(10)->create();

        Category::factory(10)->create();

        $this->call([
            DesignerTableSeeder::class,
            SettingSeeder::class,
            UsersTableSeeder::class,
        ]);

        $this->call(LaratrustSeeder::class);
    }
}
