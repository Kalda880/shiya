<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;
class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [ 
                'name' =>'ALL_PRODUCT_FREE',
                'label' =>'جميع التصميمات مجانا',
                'data_type' => 'boolean',
                'value' => 'N',
                'seqno'=>7,
                'site_setting_group_id'=>1,
       ];
      if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
       }

       $data = [ 
        'name' =>'FAVICON',
        'label' =>'favicon',
        'data_type' => 'image',
        'value' => 'favicon.png',
        'is_active'=>'N',
        'seqno'=>4,
        'site_setting_group_id'=>1,
    ];
    if(!SiteSetting::hasKey($data['name'])){
        SiteSetting::create($data);
    }

       $data = [ 
            'name' =>'LOGO',
            'label' =>'شعار المؤسسة',
            'data_type' => 'image',
            'value' => 'logo.png',
            'seqno'=>1,
            'site_setting_group_id'=>1,

        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'FOOTER_LOGO',
            'label' =>'شعار المؤسسة في الاسفل',
            'data_type' => 'image',
            'value' => 'footer_logo.png',
            'seqno'=>2,
            'site_setting_group_id'=>1,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'FOOTER_TEXT',
            'label' =>'نص في اسفل الصفحة',
            'data_type' => 'text',
            'value' => 'تصفح واكتشف العديد من المصادر المتنوعة والمميزة لدينا حيث يمكنك استخدامها بشكل مجاني مع إمكانية إعادة التصميم حسب رغبتك وتحميلها',
            'seqno'=>3,
            'site_setting_group_id'=>1,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'EMAIL',
            'label' =>'البريد الالكتروني',
            'data_type' => 'string',
            'value' => 'Shyadsn@gmail.com',
            'seqno'=>4,
            'site_setting_group_id'=>1,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'PHONE',
            'label' =>'الهاتف',
            'data_type' => 'string',
            'value' => '0553466607',
            'seqno'=>5,
            'site_setting_group_id'=>1,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }
        $data = [ 
            'name' =>'ADDRESS',
            'label' =>'العنوان',
            'data_type' => 'string',
            'value' => '',
            'seqno'=>6,
            'site_setting_group_id'=>1,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }
        $data = [ 
            'name' =>'FACEBOOK',
            'label' =>'فيسبوك',
            'data_type' => 'string',
            'value' => '',
            'seqno'=>7,
            'site_setting_group_id'=>2,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'TWITTER',
            'label' =>'تويتر',
            'data_type' => 'string',
            'value' => '',
            'seqno'=>8,
            'site_setting_group_id'=>2,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'INSTGRAM',
            'label' =>'انستغرام',
            'data_type' => 'string',
            'value' => '',
            'seqno'=>8,
            'site_setting_group_id'=>2,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }

        $data = [ 
            'name' =>'LINKEDIN',
            'label' =>'لنكدان',
            'data_type' => 'string',
            'value' => '',
            'seqno'=>10,
            'site_setting_group_id'=>2,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }
        $data = [ 
            'name' =>'SNAPCHAT',
            'label' =>'سناب شات',
            'data_type' => 'string',
            'value' => '',
            'seqno'=>11,
            'site_setting_group_id'=>2,
        ];
        if(!SiteSetting::hasKey($data['name'])){
            SiteSetting::create($data);
        }
    }
}
