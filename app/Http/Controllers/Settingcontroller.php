<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class Settingcontroller extends Controller
{
    
    public function index(){
        $setting=Setting::first();
        return view('backend.setting.index' , ['setting' => $setting]);
    }

    // store function 
    public function save_setting( Request $request){

        $countdata = Setting::count();
        if ($countdata ==0){
                $data=new Setting();
                $data->user_auto=$request->UAP; 
                $data->recent_limit=$request->RPL; 
                $data->popular_limit=$request->PPL; 
                $data->save();
        }else{
                $firstData=Setting::first();
                $data=Setting::find($firstData->id);
                $data->user_auto=$request->UAP; 
                $data->recent_limit=$request->RPL; 
                $data->popular_limit=$request->PPL; 
                $data->save();
        }

        return redirect('admin/setting')->with('success' , 'setting data updated  successefully');

    }
}
