<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Designer;
use App\Models\SiteUser;

class DesignerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteUser::create([
            'name'     => 'Designer',
            'email'    => 'designer@app.com',
            'password' => bcrypt('123456789'),
            'phone'    => '0102252222222',
            'is_customer'=>true,
            'is_designer'=>true,
            'role'=>'designer',
            'designer_status'=>true,
            'customer_status'=>true,
        ]);
    }
}
