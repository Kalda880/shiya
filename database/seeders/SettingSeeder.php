<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title'  => 'shia',
            'logo'   => 'logo.png',
            'favicon'=> 'favicon.png',
            'footer_logo' => 'footer_logo.png',
            'footer_text' => 'footer_text',
            'email'  => 'info@shia.com',
            'phone'  => '123456789',
            'address'=> 'address',
            'facebook' => 'facebook',
            'twitter'  => 'twitter',
            'instagram'=> 'instagram',
            'linkedin' => 'linkedin',
        ]);

    }
}
