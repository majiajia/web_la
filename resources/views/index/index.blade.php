@extends('../layouts/app');
@section('content')
    <!-- 关于我们 -->
    <div>
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;height:32px;margin-top:20px;">
            <div style="display:flex;flex-direction:row;align-items:flex-end;border-bottom:none;border:none;height:24px;width:22%;">
                
                <span style="font-size:24px;font-weight:bold;color:#666666;padding-left:12px;line-height:24px;height:24px;">关于我们</span>
                <span style="font-size:12px;color:#a0a0a0;padding-left:4px;line-height:12px;height:12px;">ABOUT US</span>
            </div>

        </div>
    
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;margin-top:30px;margin-bottom:30px;">
            <div>
                <image src="{{ $company_img_src }}" style="width:448px;height:308px;"></image>
            </div>
            <div style="display:flex;flex-direction:column;margin-left:20px;justify-content:space-between;height:308px;">
                <div>
                    <div style="font-size:26px;">
                        <span style="font-size:26px;">{{ $company_name }} </span>
                        <span style="font-size:20px;font-weight: bold;"><strong>值得信任的交通事故处理专家</strong></span>
                    </div>
                    <img class="lazy" data-original="url('imgs/index/company_biaoyu.png')" style="width:244px;height:18px;margin-top:14px;"></img>
                    <p style="padding-top:14px;font-size:18px;color:#666666;">
                        {{ $company_brief }}
                    </p>
                </div>
                <a class="about_us_more" href="{{ route('about') }} ">
                    <span style="font-size:16px;">查看详情</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 专家团队 -->
    <div>
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;;height:32px;">
            <div style="display:flex;flex-direction:row;align-items:flex-end;border-bottom:none;border:none;height:24px;width:22%;">

                <span style="font-size:24px;font-weight:bold;color:#666666;padding-left:12px;line-height:24px;height:24px;">专家团队</span>
                <span style="font-size:12px;color:#a0a0a0;padding-left:4px;line-height:12px;height:12px;">EXPERT TEAM</span>
            </div>
            <div style="display:flex;flex-direction:row;align-items:flex-end;width:950px;height:24px;border-bottom:1px solid #EBEBEB;">
            </div>
            <a href="{{ route('expert') }} " style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:92px;height:30px;background-color:#F09105;color:white;text-decoration:none;">
                <span>更多</span>
            </a>
        </div>
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;height:262px;">
            @foreach ($expert_list as $expert_item)
                <a href="route('expert_item',['id'=>{{ $expert_item->id }}])" style="display:flex;flex-direction:row;width:32%;background-color:#F0F0F0;text-decoration:none;">
                    <div>
                        <img class="lazy" data-original="{{ $expert_item->thumb_img }}" style="width:140px;height:168px;" alt="交通事故 律师信息"></img>
                    </div>
                    <div style="display:flex;flex-direction:column;margin-left:6px;margin-right:6px;margin-top:8px;width:100%;">
                        <div style="display: box;box-align: center;background-color:#116BBE;margin-top:22px;padding-left:12px;">
                            <span style="font-size:18px;color:#fffefe;font-weight:bold;">{{ $expert_item->name }}</span>
                            <span style="font-size:14px;color:#fffefe;padding-left:12px;">{{ $expert_item->title }}</span>
                        </div>
                        <p style="margin-top:18px;color:#333333;">{{ $expert_item->brief }}</p>
                    </div>
                </a>    
            @endforeach
        </div>
    </div>
    
    <!-- 案例解读 -->
    <div id="success_cases">
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;height:32px;">
            <div style="display:flex;flex-direction:row;align-items:flex-end;border-bottom:none;border:none;height:24px;width:22%;">                
                <span style="font-size:24px;font-weight:bold;color:#666666;padding-left:12px;height:24px;line-height:24px;">案例解读</span>
                <span style="font-size:12px;color:#a0a0a0;padding-left:4px;height:12px;line-height:12px;">SUCCESS CASES</span>
            </div>
            <div style="display:flex;flex-direction:row;align-items:flex-end;width:950px;height:24px;border-bottom:1px solid #EBEBEB;">
            </div>
            <a href="{{ route('case') }}" style="display:flex;flex-direction:row;justify-content:center;align-items:center;width:92px;height:30px;background-color:#F09105;color:white;text-decoration:none;">
                <span>更多</span>
            </a>
        </div>
        <!-- 案例列表 -->
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;margin-top:30px;margin-bottom:30px;">
            @foreach ($case_list as $case_item)
                <a href="{{ route('case_item',['id'=>{{ $case_item->id }}]) }}" style="display:flex;flex-direction:column;align-items:center; width:24%;position:relative;background-color:#F5F5F5;text-decoration:none;height:284px;width:284px;"
                    class="success_case_item" data-id="{{ $case_item->id }}">
                    <div>
                        <img class="lazy" data-original="/imgs/shigu/{{ $case_item->index }}.jpg" style="width:262px;height:150px;"></img>
                        <p style="display:flex;flex-direction:row;justify-content:flex-start;width:100%;font-size:16px;padding-top:14px;padding-left:8px;">{{ $case_item->title }}</p>
                        <p style="font-size:14px;color:#333333;padding-left:8px;padding-right:8px;" align="left">{{ $case_item->brief }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>    
@endsection