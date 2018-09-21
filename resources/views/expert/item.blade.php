@extends('../layouts/app');
@section('content')
    <!-- 联系我们 -->
<!-- 联系我们 -->
<div>
    <div style="display:flex;flex-direction:column;align-items:center;border-bottom:none;border:none;font-size:32px;width:32%;margin:0 auto;">
        <div>免费获取法律咨询,快速解决交通事故难题</div>
        <div>
            <a href="tel:0371-55681929">0371-55681929</a> /
            <a href="tel:18695872678">18695872678</a>
        </div>
    </div>
</div>
<div style="display:flex;flex-direction:column;justify-content:space-between;align-items:center;margin:0 auto;width:64%;padding-left:10%;padding-right: 10%;padding-top:50px;padding-bottom:50px;background:url(__PUBLIC__/imgs/bottom_bg.png) no-repeat;">
    <div style="display:flex;flex-direction:row;padding-bottom:12px;">
        <span style="color:white;font-size:20px;">河南法帮,值得信任的交通事故处理专家!</span>
    </div>
    <div style="display:flex;flex-direction:row;">
        <div style="display:flex;flex-direction:row;align-items:center;">
            <div class="iconglobal iconglobal-phone" style="margin-right: 8px;"></div>
            <span style="font-size:14px;color:#ffffff;">电话 :</span>&nbsp;&nbsp;
            <span style="font-size:14px;color:#ffffff;">0371-55681929</span>
        </div>
        <div style="display:flex;flex-direction:row;align-items:center;">
            <div class="iconglobal iconglobal-fax" style="margin-right: 8px;"></div>
            <span style="font-size:14px;color:#ffffff;">手机 :</span>&nbsp;&nbsp;
            <span style="font-size:14px;color:#ffffff;">18695872678</span>
        </div>
        <div style="display:flex;flex-direction:row;align-items:center;">
            <div class="iconglobal iconglobal-address" style="margin-right: 8px;"></div>
            <span style="font-size:14px;color:#ffffff;">地址 :</span>&nbsp;&nbsp;
            <span style="font-size:14px;color:#ffffff;">河南省郑州市郑东新区商都路与中兴南路建正东方中心A2408</span>
        </div>
    </div>
</div>
<div style="display: flex;flex-direction: row;justify-content: center;background-color: white;color: black;">
    <span style="margin-right: 20px;">&copy; 河南法帮法律咨询服务有限公司 版权所有</span>
    <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">豫ICP备18005257号</a>
</div>
    
    
    <!-- <div style="height:60px;background-color:#F09105;">
        <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin:0 auto;width:1200px;">
            <div style="display:flex;flex-direction:column;">
                <span>&copy;河南法帮法律咨询服务河南法帮法律咨询服务 </span>
                <span>豫ICP备15030388号-2</span>
            </div>
            <div style="display:flex;flex-direction:column;">
                <span>网址:http://hnfabang.cn</span>
                <span>地址:河南省郑州市郑东新区中兴南路与商都路交叉口建正东方中心A2408</span>
            </div>
            <div style="display:flex;flex-direction:column;">
                <span>热线:0371-55681929</span>
                <span>邮箱:390@qq.com</span>
            </div>
            <div style="display:flex;flex-direction:column;">
                <span>邮编:450000</span>
                <span>传真:0371-55681929</span>
            </div>
        </div>
    </div> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>     <script src="https://cdn.bootcss.com/jquery_lazyload/1.9.3/jquery.lazyload.js"></script>     <script type="text/javascript">         $(function() {             $("img.lazy").lazyload({effect: "fadeIn"});         });     </script>
    
    <script type=text/javascript>
        function menuFix() {
         var sfEls = document.getElementById("nav").getElementsByTagName("li");
         for (var i=0; i<sfEls.length; i++) {
            sfEls[i].onmouseover=function() {
                this.className+=(this.className.length>0? " ": "") + "sfhover";
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
    (function () {
        var src = (document.location.protocol == "http:") ?
            "http://js.passport.qihucdn.com/11.0.1.js?5ca36b717235858c7038773dc52bbcf0" :
            "https://jspassport.ssl.qhimg.com/11.0.1.js?5ca36b717235858c7038773dc52bbcf0";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
    })();
</script>
</body>
</html>

@endsection

    