<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company as Company;
use App\LawCase as LawCase;
use App\Expert as Expert;

class IndexController extends Controller
{
    public function index() {
        $company_info = Company::where("id",'1')->limit(1)->get() ;
        foreach($company_info as $company_item) {
            // dump($company_item->name);
        }
        
        $expert_list = Expert::limit(3)->get();

        $case_list = LawCase::limit(4)->get();
        return view('index.index',[
            'company_brief'=>'这是公司简介的简略版本',
            'company_img_src' => 'http://hnxingmeng.cn/Public/images/game/lbx_main.png',
            'expert_list'=> $expert_list,
            'case_list' => $case_list,


        ]);
    }
}
