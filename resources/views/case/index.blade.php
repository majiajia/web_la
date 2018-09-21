@extends('../layouts/app');
@section('content')
    <!-- 内容顶部的分类 -->
    <div style="background-color:#F5F5F5;height:60px;line-height:60px;">
        <div style="margin:0 auto;width:1200px;background-color:white;height:60px;line-height:60px;padding-left:20px;padding-right:20px;">
            <div style="float:left;" class="menu_child">
                <!-- <foreach name="case_item_list" item="case_item">
                    <if condition="$case_item.type eq 1">
                        <if condition="$case_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/Case/index?type={$case_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$case_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/Case/index?type={$case_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$case_item.name}</a>
                        </if>
                    <else/>
                        <if condition="$case_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/Case/index?type={$case_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$case_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/Case/index?type={$case_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$case_item.name}</a>
                        </if>
                        
                    </if>
                </foreach> -->
                <!-- <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">专家辅助人a</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a> -->
            </div>
    
            <div style="float:left;">
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">您所在的位置:</a>
                <a href="__APP__/Index/index"" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">首页&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">交通事故案例分析</a>
                <!-- <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#f09105;">{$cur_page_name}</a> -->
                <!-- <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">您所在的位置&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">首页&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">新闻资讯&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#f09105;">政策法规</a> -->
            </div>
            <!-- <div style="display:flex;flex-direction:row;justify-content:flex-end;align-items:center;color:#525f69;font-size:12px;">
                    <p>您所在的位置</p>
                    <ul id="nav_new" style="display:flex;flex-direction:row;justify-content:flex-end;">
                        <li style="display:flex;flex-direction:row;">
                            <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;color:#525f69;font-size:12px;">首页</a> &gt;
                        </li>
                        <li style="display:flex;flex-direction:row;">
                            <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;color:#525f69;font-size:12px;">新闻咨询</a> &gt;
                        </li>
                        <li style="display:flex;flex-direction:row;">
                            <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;color:#525f69;font-size:12px;color:#f09105;">服务项目</a>
                        </li>
                    </ul>
                </div> -->
        </div>
    </div>

    
    <div style="background-color:#F5F5F5;padding-bottom:20px;padding-top:20px;">
        <div style="display:flex;flex-direction:column;justify-content:center;;align-items:center;margin:0 auto;width:1200px;">
            <foreach name="case_list" item="case_item">
                <div style="display:flex;flex-direction:row;background-color:white;padding-left:20px;padding-right:20px;height:320px;align-items:center;margin-bottom:20px;">
                    <div style="border-right:1px solid #F5F5F5;padding-right:70px;">
                        <image src="__PUBLIC__/{$case_item.thumb_img}" style="width:384px;height:244px;"></image>
                    </div>
                    <div style="display:flex;flex-direction:column;margin-left:70px;justify-content:space-between;height:244px;">
                        <div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between;">
                                <p style="color:#333333;font-size:22px;">{$case_item.title}</p>
                                <p style="color:#b4b4b4;font-size:16px;">{$case_item.create_date}</p>
                            </div>
                            <p style="color:#666666;font-size:18px;">{$case_item.brief}</p>
                        </div>
                
                        <div style="display:flex;flex-direction:row;justify-content:flex-end;">
                            <a class="more" href="__APP__/Case/item?id={$case_item.id}" style="border: 1px solid #116bbe;font-size: 12px;width: 90px;height: 32px;line-height: 32px;text-align: center;display: block;margin-top: 10px;margin-bottom: 10px;text-decoration: none;font-size:16px;">查看详情</a>
                        </div>
                    </div>
                </div>
            </foreach>
            

            <!-- <div style="display:flex;flex-direction:row;background-color:white;padding-left:20px;padding-right:20px;height:320px;align-items:center;">
                <div style="border-right:1px solid #F5F5F5;padding-right:70px;">
                    <image src="__PUBLIC__/imgs/list_item_cover.png" style="width:384px;height:244px;"></image>
                </div>
                <div style="display:flex;flex-direction:column;margin-left:70px;justify-content:space-between;height:244px;">
                    <div>
                        <div style="display:flex;flex-direction:row;justify-content:space-between;">
                            <p style="color:#333333;font-size:22px;">这是标题这是标题这是标题</p>
                            <p style="color:#b4b4b4;font-size:16px;">2018-01-25</p>
                        </div>
                        <p style="color:#666666;font-size:18px;">医学、刑侦专家、公安部物证鉴定中心原法医研究室主任、中国人民公安大学教授、一级警督陈世贤任本公司总顾问；豫尧是省内首家从事专家辅助人</p>
                    </div>
                    
                    <div style="display:flex;flex-direction:row;justify-content:flex-end;">
                        <a class="more" href="item.html" style="border: 1px solid #116bbe;font-size: 12px;width: 90px;height: 32px;line-height: 32px;text-align: center;display: block;margin-top: 10px;margin-bottom: 10px;text-decoration: none;font-size:16px;color:#116bbe;">查看详情</a>
                    </div>
            
                </div>
            </div>

            <div style="display:flex;flex-direction:row;background-color:white;padding-left:20px;padding-right:20px;height:320px;align-items:center;">
                <div style="border-right:1px solid #F5F5F5;padding-right:70px;">
                    <image src="__PUBLIC__/imgs/list_item_cover.png" style="width:384px;height:244px;"></image>
                </div>
                <div style="display:flex;flex-direction:column;margin-left:70px;justify-content:space-between;height:244px;">
                    <div>
                        <div style="display:flex;flex-direction:row;justify-content:space-between;">
                            <p style="color:#333333;font-size:22px;">这是标题这是标题这是标题</p>
                            <p style="color:#b4b4b4;font-size:16px;">2018-01-25</p>
                        </div>
                        <p style="color:#666666;font-size:18px;">医学、刑侦专家、公安部物证鉴定中心原法医研究室主任、中国人民公安大学教授、一级警督陈世贤任本公司总顾问；豫尧是省内首家从事专家辅助人</p>
                    </div>
            
                    <div style="display:flex;flex-direction:row;justify-content:flex-end;">
                        <a class="more" href="item.html" style="border: 1px solid #116bbe;font-size: 12px;width: 90px;height: 32px;line-height: 32px;text-align: center;display: block;margin-top: 10px;margin-bottom: 10px;text-decoration: none;font-size:16px;color:#116bbe;">查看详情</a>
                    </div>
            
                </div>
            </div> -->


            <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;padding-top:20px;padding-bottom:20px;margin-top:20px;background-color:white;padding-left:20px;padding-right:20px;width:1200px;">
                <div class="pagination-default clearfix">
                    <a href="__APP__/Case/index?type={$case_type}&p=1" class="first pagination-item">| &lt;&lt;</a>
                    <a href="__APP__/Case/index?type={$case_type}&p={$pre_page_num}" class="pre pagination-item ">&lt;</a>
                    <foreach name="page_list" item="page_item">
                        <if condition="$page_item.is_cur eq 1">
                            <span class="pagination-current pagination-item">{$page_item.num}</span>
                            <else/>
                            <a href="__APP__/Case/index?type={$case_type}&p={$page_item.num}" class="pagination-item ">{$page_item.num}</a>
                        </if>
                    </foreach>
                    <a href="__APP__/Case/index?type={$case_type}&p={$next_page_num}" class="next pagination-item">&gt;</a>
                    <a href="__APP__/Case/index?type={$case_type}&p={$last_page_num}" class="last pagination-item">&gt;&gt;|</a>
                    <span>(共{$case_count}个)</span>
                </div>
            </div>
        </div>

        
    </div>    
@endsection
