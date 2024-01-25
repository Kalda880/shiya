<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\SiteSettingGroup;

class SiteSettingsController extends Controller
{
    function index() {
        $group_settings = SiteSettingGroup::active()->get();
        return view("admin.settings.index",compact('group_settings'));
    }

    function update() {

        $key = request('field');
        if($row=SiteSetting::hasKey($key)){
           $row->value = request($key);
           $row->save();
        return response()->json(['success'=>true,'message'=>'تم عملية الحفظ بنجاح']);
        }
        return response()->json(['success'=>false,'message'=>'اسم الاعدادات غير موجود']);
    }
}
