@extends('../layouts/app');
@section('content')
    <!-- 内容顶部的分类 -->
    <div style="background-color:#F5F5F5;height:60px;line-height:60px;">
        <div style="margin:0 auto;width:1200px;background-color:white;height:60px;line-height:60px;padding-left:20px;padding-right:20px;">
            <div style="float:left;" class="menu_child">
                <foreach name="expert_item_list" item="expert_item">
                    <if condition="$expert_item.type eq 1">
                        <if condition="$expert_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/Expert/index?type={$expert_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$expert_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/Expert/index?type={$expert_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$expert_item.name}</a>
                        </if>
                    <else/>
                        <if condition="$expert_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/Expert/index?type={$expert_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$expert_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/Expert/index?type={$expert_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$expert_item.name}</a>
                        </if>
                        
                    </if>
                </foreach>
                <!-- <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">专家辅助人a</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">专家辅助人</a> -->
            </div>
    
            <div style="float:right;">
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">您所在的位置&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">首页&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">专家团队&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#f09105;">{$cur_page_name}</a>
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
            <foreach name="expert_list" item="expert_item">
                <a href="__APP__/Expert/item?id={$expert_item.id}" style="display:flex;flex-direction:row;background-color:white;padding-left:20px;padding-right:20px;height:280px;align-items:center;width:100%;text-decoration:none;margin-bottom:20px;">
                    <div style="padding-right:40px;">
                        <image src="__PUBLIC__/{$expert_item.thumb_img}" style="width:140px;height:200px;"></image>
                    </div>
                    <div style="display:flex;flex-direction:column;margin-left:20px;justify-content:center;">
                        <p style="font-size:22px;color:#333333;">{$expert_item.name}</p>
                        <p style="font-size:18px;color:#444444;">{$expert_item.title}</p>
                        <p style="font-size:18px;color:#444444;">{$expert_item.brief}</p>
                    </div>
                </a>
            </foreach>
            
            <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;padding-top:20px;padding-bottom:20px;margin-top:20px;background-color:white;padding-left:20px;padding-right:20px;width:1200px;">
                <div class="pagination-default clearfix">
                    <a href="__APP__/Expert/index?type={$expert_type}&p=1" class="first pagination-item">| &lt;&lt;</a>
                    <a href="__APP__/Expert/index?type={$expert_type}&p={$pre_page_num}" class="pre pagination-item ">&lt;</a>
                    <foreach name="page_list" item="page_item">
                        <if condition="$page_item.is_cur eq 1">
                            <span class="pagination-current pagination-item">{$page_item.num}</span>
                            <else/>
                            <a href="__APP__/Expert/index?type={$expert_type}&p={$page_item.num}" class="pagination-item">{$page_item.num}</a>
                        </if>
                    </foreach>
                    <a href="__APP__/Expert/index?type={$expert_type}&p={$next_page_num}" class="next pagination-item ">&gt;</a>
                    <a href="__APP__/Expert/index?type={$expert_type}&p={$last_page_num}" class="last pagination-item ">&gt;&gt;|</a>
                    <span>(共{$expert_count}个)</span>
                </div>
            </div>

            <!-- <div style="display:flex;flex-direction:row;background-color:white;padding-left:20px;padding-right:20px;height:280px;align-items:center;width:100%;">
                <div style="padding-right:40px;">
                    <image src="__PUBLIC__/imgs/expert_item.png" style="width:140px;height:200px;"></image>
                </div>
                <div style="display:flex;flex-direction:column;margin-left:20px;justify-content:center;">
                    <p style="font-size:22px;color:#333333;">陈先生</p>
                    <p style="font-size:18px;color:#444444;">主任法医</p>
                    <p style="font-size:18px;color:#444444;">公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心</p>
                </div>
            </div>

            <div style="display:flex;flex-direction:row;background-color:white;padding-left:20px;padding-right:20px;height:280px;align-items:center;width:100%;">
                <div style="padding-right:40px;">
                    <image src="__PUBLIC__/imgs/expert_item.png" style="width:140px;height:200px;"></image>
                </div>
                <div style="display:flex;flex-direction:column;margin-left:20px;justify-content:center;">
                    <p style="font-size:22px;color:#333333;">陈先生</p>
                    <p style="font-size:18px;color:#444444;">主任法医</p>
                    <p style="font-size:18px;color:#444444;">公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心公安部物证鉴定中心</p>
                </div>
            </div> -->
        </div>
    </div>
@endsection

    