@extends('../layouts/app');
@section('content')
    <!-- 内容顶部的分类 -->
    <div style="background-color:#F5F5F5;height:60px;line-height:60px;">
        <div style="margin:0 auto;width:1200px;background-color:white;height:60px;line-height:60px;padding-left:20px;padding-right:20px;">
            <div style="float:left;" class="menu_child">
                <foreach name="about_item_list" item="about_item">
                    <if condition="$about_item.is_1st eq 1">
                        <if condition="$about_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/About/index?type={$about_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$about_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/About/index?type={$about_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$about_item.name}</a>
                        </if>
                        
                    <else/>
                        <if condition="$about_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/About/index?type={$about_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$about_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/About/index?type={$about_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$about_item.name}</a>
                        </if>
                        
                    </if>  
                </foreach>

            </div>
    
            <div style="float:right;">
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">您所在的位置&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">首页&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">关于我们&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#f09105;">{$cur_page_name}</a>
            </div>
        </div>
    </div>

    <!-- 文章标题 时间 浏览次数 -->
    <div style="background-color:#F5F5F5;padding-bottom:20px;padding-top:20px;">
        <div style="display:flex;flex-direction:column;justify-content:center;;align-items:center;margin:0 auto;width:1200px;padding-left:20px;padding-right:20px;background-color:white;">
            <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;width:100%;border-bottom:1px solid #F5F5F5;padding-bottom:4px;border-bottom:1px solid #F5F5F5;padding-bottom:20px;padding-top:36px;margin-bottom:36px;">
                <p style="color:#333333;font-size:22px;">{$article_title}</p>
                <div style="display:flex;flex-direction:row;">
                     <span style="color:#555555;font-size:12px;">{$article_create_date}</span>   
                    <span  style="color:#555555;font-size:12px;">浏览次数:<script type="text/javascript" src="__CONTROLLER__/update_view_count?type={$type}"></script>次</span>
                </div>
            </div>
            <div style="line-height:20px;">
                <p>{$article_content}</p>
            </div>
            <div style="display:flex;flex-direction:row;justify-content:flex-start;width:100%;padding-bottom:14px;padding-top:70px;">
                <span style="color:#999999;font-size:14px;">(撰稿人:河南法帮法律咨询服务有限公司)</span>
            </div>
        </div>
    </div>
@endsection