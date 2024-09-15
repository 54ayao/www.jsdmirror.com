<link href="/static/css/notice.css" rel="stylesheet">
<link href="/static/css/wz.css" rel="stylesheet">

    </div>
   </div>
   <div class="msg-d-wrap">
    <div class="msg-d-hd">
     <h1>关于近期被多个地区盗刷资源平台现已开启临时屏蔽措施</h1>
    </div>
    <div class="msg-d-bd">
     <span style="font-size: 14px;">尊敬的JSDMirror用户：&nbsp; &nbsp; &nbsp; &nbsp;</span>
     <div>
      <span style="font-size: 14px;">&nbsp; &nbsp; &nbsp; &nbsp;您好！</span>
     </div>
     <div>
      <span style="font-size: 14px;">&nbsp; &nbsp; &nbsp;&nbsp;  2024 年 7 月至今，中国境内有大量各类网站，在每天晚上固定时间，受到 IP 来自<span style="font-weight: bold; color: rgb(255, 0, 0);">山西太原联通、江苏常州联通、山东济南联通、山东青岛联通、山西临汾联通、北京cloudvsp.com、江苏无锡移动、福建厦门移动、山东临沂电信、辽宁沈阳联通、
</span>等地的固定网段的恶意流量攻击。</span>
     </div>
     <div>
      <span style="font-size: 14px;"><h3>现象：</h3></span>
     </div>
     <div>
      <span style="font-size: 14px;"><span style="font-weight: normal;">受害网站来源广泛，有白山、阿里、腾讯、七牛、又拍、网宿等国内其他 CDN 服务商的用户。攻击者会挑选体积较大的静态文件，例如视频、字体文件、安装包、体积较大的图片或脚本等，在攻击期间，不断请求这个文件，消耗受害网站的 CDN 流量。</span><span style="font-weight: normal;">：</span></span>
     </div>
     <div>
      <span style="font-size: 14px;">在7月3号开始 jsdmirror成为为受害者，在不设置访问控制措施的情况下，每晚可受到约 200 ~ 300GB 的恶意流量。</span></span>
     </div>
     <div>
      <span style="font-size: 14px;">2.网友们推测此类攻击可能与运营商省间结算政策施行后，某些地区的高上传家宽用户（例如 PCDN 等）为了躲避运营商封杀，降低“上传/下载”比例，人为刷下载流量的行为有关，JSDmirror分析了CDN的日志发现这些请求额外携带了XFF的客户端IP，XFF客户端IP显示是境外比如说美国，中国香港，新加坡，韩国，日本等等但是 用户IP和XFFIP归属地不一致，初步猜测用户使用了代理池可能配置有误错误的传递了用户的真实IP</span>
    <img src="1720542813079.jpg" alt="JSDMirror" class="responsive-image">

     </div>
     <div>
      <span style="font-size: 14px; font-weight: normal;"><h3>应对</h3></span>
     </div>
     <div>
      <span style="font-size: 14px;">添加下列 IPv4 网段至 IP 黑名单，防患于未然（这可能会影响极少数正常用户访问，但也是没办法的事情）
      <span style="font-weight: bold; color: rgb(255, 0, 0);">不影响cdn.jsdmirror.com！！！如果你在对应的IP段请联系管理员处理</span></span>
     </div>
     <div>
    <span style="font-weight: bold; color: rgb(255, 0, 0);"> 211.90.146.0/24     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">221.205.168.0/23     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">112.229.8.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">39.71.180.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.188.69.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.188.197.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.188.60.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.188.63.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">27.221.70.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">60.221.231.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">120.132.82.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">36.155.119.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">36.155.88.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">112.48.189.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">140.249.121.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">221.205.169.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.118.60.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.118.88.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.118.197.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.118.69.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.118.63.0/24</span>     <br />   
<span style="font-weight: bold; color: rgb(255, 0, 0);">119.118.65.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">112.159.22.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">124.163.208.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">124.163.207.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">183.185.14.0/24</span>     <br />
<span style="font-weight: bold; color: rgb(255, 0, 0);">180.101.81.0/24</span>     <br />



</div>
     <br />
     <br />
     <p align="right" style="margin-bottom:0px;"><a href="https://www.jsdmirror.com/" title="jsdmirror"><span style="font-size: 14px;"></span><img src="https://img.cuteapi.com/2023/08/29/Background.png" alt="JSDMirror" height="40"></a></p><br />
     <p align="right" style="margin-top:0px;line-height:10px;">2024-07-09</span></p>
    </div>
   </div>
  </div>
