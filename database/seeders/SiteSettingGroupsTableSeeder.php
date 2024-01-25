<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSettingGroup;

class SiteSettingGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'label'=>"إعدادات عامة",
            'id'=>1,
            "seqno"=>1
        ];
        if(!SiteSettingGroup::find(1)){
            SiteSettingGroup::create($data);
        }
        $data=[
            'label'=>"سوشيال ميديا",
            'id'=>2,
            "seqno"=>2
        ];
        if(!SiteSettingGroup::find(2)){
            SiteSettingGroup::create($data);
        }
    }
}
