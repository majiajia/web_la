<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="applicabledevice" content="pc,mobile">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="location" content="province=河南;city=郑州">
	<meta name="description" content="河南法帮法律咨询服务有限公司是一家扎根于河南的法律咨询服务机构.为您处理包括交通事故、工伤、借贷和工程欠款等案件,咨询电话:0371-55681929.">
    <meta name="keywords" content="郑州交通事故,河南交通事故,交通事故律师">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>@yield('title')|河南法帮法律咨询服务有限公司,值得信任的交通事故专家</title>

    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="{{ url('css/style/index.css') }}" rel="stylesheet">
    <style>
    .news_category_not_selected {
        background-color:#D2D2D2;
    }
    /* .news_category_selected {
        
    } */
    .news_category_item {
        height: 70px;
        background-color:#F09105;
        color: grey;
        padding:4px;
    }
    .news_category_default {
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        align-items:center;
        margin:0 auto;
        width:64%;
        margin-top:30px;
        margin-bottom:30px;
    }
    .hover_display {
        display: none;
    }

    .about_us_more {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100px;
        height: 32px;
        background-color: white;
        border: 1px solid #116bbe;
        text-decoration: none;
    }
    .about_us_more .span {
        color:#116bbe;
    }
    
    .about_us_more:hover {
        color:white;
        background-color: #116bbe;
        text-decoration: none;
    }
    </style>
<script>
	(function () {
    var url = location.href;
    // replace www.test.com with your domain
    if ( (url.indexOf('jiaotong.hnfabang.cn') != -1) && navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i) ) {
        var newUrl = url.replace('http://jiaotong', 'http://mjiaotong');
        location.href = newUrl;
    }
})();
</script>


</head>

<body>
    <!-- 页面顶部公司名字和联系方式 -->
    @section('top_company_name_contant')
        <div style="display:flex;flex-direction:row;justify-content:space-between;margin:0 auto;width:64%;height:110px;">
            <div style="display:flex;flex-direction:row;align-items:center;" >
                <a href="{{route('index') }}">
    <img class="lazy" data-original="{{ URL::asset('imgs/logo.png') }}" alt="河南交通事故,郑州交通事故" style="width:64px;height:64px;" />
                </a>
                <a href="{{ route('index') }} ">
                <span style="font-size:40px;">{{ $company_name }}</span>
                </a>
            </div>
            <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
            <div style="font-size:32px;color:#333333;font-weight: bold;"><a href="tel:{{ $company_phone }}"><i>{{ $company_phone }}</i></a> / <a href="tel:{{ $company_mobile_phone }}"><i>{{ $company_mobile_phone }}</i></a></div>
                <div style="font-size:16px;color:#555555;">马上联系法帮,解决你的交通事故难题</div>
            </div>
        </div>    
    @show
    
    @section('top_banner')
    <div style="height:590px;background:url('imgs/banner/about.png') no-repeat ;background-size:100%;width:100%;height:590px;width:1920px;height:590px;">
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:64%;;height:64px;padding-left:120px;">
            <ul id="nav">
                <li>
                    <a href="{{ route('index') }}" style="height:64px;line-height:64px;width:100%;vertical-align:middle;font-size:16px;" class="menu_1st">首页</a>
                </li>
                <li>
                    <a href="{{ route('case') }}" style="height:64px;line-height:64px;width:100%;vertical-align:middle;font-size:16px;" class="menu_1st">案例分析</a>
                </li>
                
                <li>
                    <a href="{{ route('expert') }} " style="height:64px;line-height:64px;width:100%;vertical-align:middle;font-size:16px;" class="menu_1st">专家团队</a>
                    <ul>
                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('expert',['type'=>'1']) }} " style="height:22px;line-height:22px;font-size:14px;width:100%;">专家团队</a>
                        </li>
                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('expert',['type'=>'2']) }} " style="height:22px;line-height:22px;font-size:14px;width:100%;vertical-align:middle;">律师团队</a>
                        </li>
                        <li style="background:url('imgs/banner_sanjiao.png');display:flex;flex-direction:row;justify-content:center;align-items:center;">
                        
                        </li>
                    </ul>
                </li>
                
                
                <li>
                    <a href="{{ route('about')}} " style="height:64px;line-height:64px;width:100%;vertical-align:middle;font-size:16px;"
                        class="menu_1st">关于我们</a>
                    <ul>
                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('about',['type'=>'1'])}}" style="height:22px;line-height:22px;font-size:14px;width:100%;">企业介绍</a>
                        </li>
                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('about',['type'=>'2'])}}" style="height:22px;line-height:22px;font-size:14px;width:100%;vertical-align:middle;">企业文化</a>
                        </li>

                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('about',['type'=>'3'])}}" style="height:22px;line-height:22px;font-size:14px;width:100%;vertical-align:middle;">公司风采</a>
                        </li>
                        <li style="background:url('imgs/banner_sanjiao.png');display:flex;flex-direction:row;justify-content:center;align-items:center;">

                        </li>
                    </ul>
                </li>

                <li>
                        <a href="{{ route('contact') }} " style="height:64px;line-height:64px;width:100%;vertical-align:middle;font-size:16px;" class="menu_1st">联系我们</a>
                    <ul>
                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('contact',['type'=>'1']) }}" style="height:22px;line-height:22px;font-size:14px;width:100%;">联系方式</a>
                        </li>
                        <li style="background-color:#116DBE;display:flex;flex-direction:row;justify-content:center;align-items:center;">
                            <a href="{{ route('contact',['type'=>'2']) }}" style="height:22px;line-height:22px;font-size:14px;width:100%;vertical-align:middle;">在线留言</a>
                        </li>
                        <li style="background:url('imgs/banner_sanjiao.png');display:flex;flex-direction:row;justify-content:center;align-items:center;border-bottom:none;">
                            <span></span>
                        </li>
                    </ul>
                </li>
            </ul> 
        </div>
    </div>        
    @show
    <!-- 页面顶部banner 图 -->

    <div style="display:flex;flex-direction:column;width:100%;margin:0 auto;">
        @yield('content')
    </div>
    
    <!-- 联系我们 -->    
    @section('bottom_contact')
        <div>
            <div style="display:flex;flex-direction:column;align-items:center;border-bottom:none;border:none;font-size:32px;width:32%;margin:0 auto;">
                <div>免费获取法律咨询,快速解决交通事故难题</div>
                <div>
                    <a href="tel:{{ $company_phone }}">{{ $company_phone }}</a> /
                    <a href="tel:{{ $company_mobile_phone }}">{{ $company_mobile_phone }}</a>
                </div>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;margin:0 auto;width:64%;padding-left:10%;padding-right: 10%;padding-top:50px;padding-bottom:50px;background:url('imgs/bottom_bg.png') no-repeat;">
            <div style="display:flex;flex-direction:row;padding-bottom:12px;">
                <span style="color:white;font-size:20px;">河南法帮,值得信任的交通事故处理专家!</span>
            </div>
            <div style="display:flex;flex-direction:row;">
                <div style="display:flex;flex-direction:row;align-items:center;">
                    <div class="iconglobal iconglobal-phone" style="margin-right: 8px;"></div>
                    <span style="font-size:14px;color:#ffffff;">电话 :</span>&nbsp;&nbsp;
                    <span style="font-size:14px;color:#ffffff;">{{ $company_phone }}</span>
                </div>
                <div style="display:flex;flex-direction:row;align-items:center;">
                    <div class="iconglobal iconglobal-fax" style="margin-right: 8px;"></div>
                    <span style="font-size:14px;color:#ffffff;">手机 :</span>&nbsp;&nbsp;
                <span style="font-size:14px;color:#ffffff;"> {{ $company_mobile_phone }}</span>
                </div>
                <div style="display:flex;flex-direction:row;align-items:center;">
                    <div class="iconglobal iconglobal-address" style="margin-right: 8px;"></div>
                    <span style="font-size:14px;color:#ffffff;">地址 :</span>&nbsp;&nbsp;
                <span style="font-size:14px;color:#ffffff;">{{ $company_address }}</span>
                </div>
            </div>
        </div>
        
        <div style="display: flex;flex-direction: row;justify-content: center;background-color: white;color: black;">
            <span style="margin-right: 20px;">&copy; 河南法帮法律咨询服务有限公司 版权所有</span>
        <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">{{ $company_beian }}</a>
        </div>
    @show
    
    
    <!--</div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>     
    <script src="https://cdn.bootcss.com/jquery_lazyload/1.9.3/jquery.lazyload.js"></script>
    <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload({effect: "fadeIn"});
        });
    </script>
    <script type=text/javascript>
        function menuFix() {
            var sfEls = document.getElementById("nav").getElementsByTagName("li");
            for (var i=0; i<sfEls.length; i++) {    
                sfEls[i].onmouseover = function() {
                    this.className+= (this.className.length>0? " ": "") + "sfhover";
                }
                sfEls[i].onMouseDown=function() {
                    this.className+=(this.className.length>0? " ": "") + "sfhover";
                }
                sfEls[i].onMouseUp=function() {
                    this.className+=(this.className.length>0? " ": "") + "sfhover";
                }
                sfEls[i].onmouseout=function() {
                    this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"),"");
                }
            }            
        }
        window.onload=menuFix;
        </script>
        
        <script>
        $(".success_case_item").hover(
            function(event) {
                var id = event.currentTarget.dataset.id;
                $(this).find(".not_hover").addClass("hover_display");
                $(this).find(".is_hover").removeClass("hover_display");
            },
            function(event) {
                console.log(event.currentTarget.dataset.id);
                $(this).find(".is_hover").addClass("hover_display");
                $(this).find(".not_hover").removeClass("hover_display");
            }
        )
        $(".news_category_item").click(function(event) {
            $type = parseInt(event.currentTarget.dataset.type);
            $(".news_category_item").removeClass('news_category_selected');
            $(".news_category_item").addClass('news_category_not_selected');
            $(this).addClass("news_category_selected");
            if ($type == 1) {
                $(".news_category_study").removeClass("hover_display");
                $(".news_category_lawer_news").addClass("hover_display");
                $(".news_category_law_item").addClass("hover_display");
            } else if ($type == 2) {
                $(".news_category_study").addClass("hover_display");
                $(".news_category_lawer_news").removeClass("hover_display");
                $(".news_category_law_item").addClass("hover_display");
            } else if ($type == 3) {
                $(".news_category_study").addClass("hover_display");
                $(".news_category_lawer_news").addClass("hover_display");
                $(".news_category_law_item").removeClass("hover_display");
            }
        })
        </script>
<script>
    (function () {
        var src = (document.location.protocol == "http:") ?
            "http://js.passport.qihucdn.com/11.0.1.js?5ca36b717235858c7038773dc52bbcf0" :
            "https://jspassport.ssl.qhimg.com/11.0.1.js?5ca36b717235858c7038773dc52bbcf0";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();
</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MYZZTjyxozomxorYeX3oxUSe"></script>
    <script>
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
                        map = new BMap.Map("map");
                    map.centerAndZoom(new BMap.Point(113.783784,34.752814),16);
    }
    function setMapEvent(){
                        map.enableScrollWheelZoom();
                    map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
                        target.addEventListener("click", function () {
                            target.openInfoWindow(window);
                        });
                    }
    function addMapOverlay(){
      var labels = [
        {position: {lng: 113.783497,lat:34.751716},content:"河南法帮法律咨询服务有限公司"}
      ];
      for(var index = 0; index < labels.length; index++){
        var opt = {position: new BMap.Point(labels[index].position.lng,labels[index].position.lat )};
        var label = new BMap.Label(labels[index].content,opt);
        map.addOverlay(label);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
    </script>
    <script>
    $("#submit_leave_msg").click(function(){
        var $name = $("#leave_msg_name").val();
        var $leave_msg_email = $("#leave_msg_email").val();
        var $leave_msg_phone = $("#leave_msg_phone").val();
        var $leave_msg_content = $("#leave_msg_content").val();

        $.ajax({
            type: "post",
            url: '__URL__/save_user_leave_msg',
            dataType: 'json',
            data: {
                name:$name,
                email:$leave_msg_email,
                phone:$leave_msg_phone,
                content:$leave_msg_content,
            },
            success: function (res) {
                $status = parseInt(res.status) ;
                $msg = res.msg;
                $(".feedback_res").html($msg);
                $("#leave_msg_content").val("");
                $("#leave_msg_name").val("");
                $("#leave_msg_phone").val("");
                $("#leave_msg_email").val("");
            }
        })
    });
    </script>
</body>
</html>
