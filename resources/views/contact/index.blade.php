@extends('../layouts/app');
@section('content')
    <!-- 内容顶部的分类 -->
    <div style="background-color:#F5F5F5;height:60px;line-height:60px;">
        <div style="margin:0 auto;width:1200px;background-color:white;height:60px;line-height:60px;padding-left:20px;padding-right:20px;">
            <div style="float:left;" class="menu_child">
                <foreach name="contact_item_list" item="contact_item">
                    <if condition="$contact_item.is_1st eq 1">
                        <if condition="$contact_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/Contact/index?type={$contact_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$contact_item.name}</a>
                        <else/>
                            <a class="menu_child_not_selected" href="__APP__/Contact/index?type={$contact_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;text-decoration:none;">{$contact_item.name}</a>
                        </if>
                    <else/>
                        <if condition="$contact_item.is_selected eq 1">
                            <a class="menu_child_selected" href="__APP__/Contact/index?type={$contact_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$contact_item.name}</a>
                        <else/>    
                            <a  class="menu_child_not_selected" href="__APP__/Contact/index?type={$contact_item.type}" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:16px;padding-left:70px;text-decoration:none;">{$contact_item.name}</a>
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
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#525f69;">联系我们&gt;</a>
                <a href="#" style="height:32px;line-height:32px;width:100%;vertical-align:middle;font-size:12px;color:#f09105;">{$cur_page_name}</a>
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
    <!-- 联系方式 -->
    <if condition="$type eq 1">
        <div style="background-color:#F5F5F5;padding-bottom:20px;padding-top:20px;">
            <div style="display:flex;flex-direction:column;justify-content:center;;align-items:flex-start;margin:0 auto;width:1200px;padding-left:20px;padding-right:20px;background-color:white;">
                <div style="display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;width:100%;border-bottom:1px solid #F5F5F5;padding-bottom:4px;border-bottom:1px solid #F5F5F5;padding-bottom:20px;padding-top:36px;margin-bottom:36px;">
                    <div style="display:flex;flex-direction:row;justify-content:center;">
                        <image src="__PUBLIC__/imgs/contact_us/phone_icon.png"></image>
                        <span style="padding-left:8px;font-size: 20px;">
                            <a href="tel:0371--55681929">{$company_phone}</a>
                        </span>
                    </div>
                    <div style="display:flex;flex-direction:row;padding-top:16px;">
                        <image src="__PUBLIC__/imgs/contact_us/fax_icon.png"></image>
                        <span style="padding-left:8px;font-size: 20px;">
                            <a href="tel:13526760155">{$company_fax}</a>
                        </span>
                    </div>
                    <!-- <div style="display:flex;flex-direction:row;padding-top:16px;">
                        <image src="__PUBLIC__/imgs/contact_us/email_icon.png"></image>
                        <span style="padding-left:8px;">{$company_email}</span>
                    </div> -->
                    <div style="display:flex;flex-direction:row;padding-top:16px;padding-bottom:32px;">
                        <image src="__PUBLIC__/imgs/contact_us/map_icon.png"></image>
                        <span style="padding-left:8px;font-size: 20px;">{$company_addr}</span>
                    </div>
                    <div style="width:700px;height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>
                </div>
            </div>
        </div>
    <else/>
        <!-- 在线留言 -->
        <div style="background-color:#F5F5F5;padding-bottom:20px;padding-top:20px;">
            <div style="display:flex;flex-direction:column;justify-content:center;;align-items:center;margin:0 auto;width:1200px;padding-left:20px;padding-right:20px;background-color:white;padding-bottom:30px;">
                <div style="display:flex;flex-direction:row;align-items:center;justify-content:space-between;width:100%;border-bottom:1px solid #F5F5F5;padding-bottom:4px;border-bottom:1px solid #F5F5F5;padding-bottom:20px;padding-top:36px;margin-bottom:36px;height:46px;line-height:46px;width:100%;">
                    <div style="display:inline;width:50%;">
                        <span style="font-size:14px;color:#555555;">姓名</span>
                        <input id="leave_msg_name" type="text" name="name" style="padding-left:8px;border:1px solid #D7D7D7;margin-left:10px;" placeholder="请输入您的姓名"
                        />
                    </div>
                    <!-- <div style="display:inline;width:36%;">
                        <span style="font-size:14px;color:#555555;">邮箱</span>
                        <input id="leave_msg_email" type="text" name="email" style="padding-left:8px;border:1px solid #D7D7D7;margin-left:10px;width:80%;" placeholder="请输入您的邮箱"
                        />
                    </div> -->
                    <div style="display:inline;width:50%;">
                        <span style="font-size:14px;color:#555555;">电话</span>
                        <input id="leave_msg_phone" type="text" name="phone" style="padding-left:8px;border:1px solid #D7D7D7;margin-left:10px;width:86%;" placeholder="请输入您的电话"
                        />
                    </div>
                </div>
                <div style="display:flex;flex-direction:row;width:100%;">
                    <span style="font-size:14px;">留言</span>
                    <textarea id="leave_msg_content" style="border:1px solid #F5F5F5;width:94%;margin-left:2%;height:148px;resize : none;" placeholder="请输入您的留言内容"></textarea>
                </div>
                <div style="margin-top:56px;display:flex;flex-direction:row;justify-content:flex-start;align-items:center;width:100%;padding-left:4%;">
                    <input id="submit_leave_msg" type="button" value="提交" style="width:200px;height:50px;border-radius:4px;background-color:#116BBE;color:white;">
                    <span style="font-size:20px;color:red;margin-left:20px;" class="feedback_res"></span>
                </div>
            </div>
        </div>
    </if>
@endsection

    