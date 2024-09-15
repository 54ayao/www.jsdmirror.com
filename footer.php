			<!-- 页脚区域 -->
				<div class="wrap_footer">  
    <div class="footer_con">  
        <div class="focus_us">  
            <h3 class="tit">关注我们</h3>  
            <ul class="focus_list">  
                <li>  
                  <a href="#" class="wechat-btn" onclick="showWechatCode(event)">  
    <i class="icon i_wechat"></i>  
    <img class="wechat-code" src="/static/img/wechat.jpg" alt="img" style="display:none;" />  
</a> 
                </li>  

									<li>
									    <script>  
function showQqCode(event) {  
    event.preventDefault();  
    var wechatCode = event.target.querySelector('.qq-code');  
}  
</script>  
 <script>  
function showWechatCode(event) {  
    event.preventDefault();  
    var qqCode = event.target.querySelector('.wechat-btn');  
}  
</script>  
  
					<a href="#" class="qq-btn" onclick="showQqCode(event)">  
    <i class="icon i_qq"></i>  
    <img class="qq-code" src="https://img.cuteapi.com/2023/11/21/image316544ddbc708ed0.png" alt="img" style="display: none;" />  
</a>  
									</li>
									<li>
										<a href="https://weibo.com/zeayao" target="_blank">
											<i class="icon i_weibo">
											</i>
										</a>
									</li>
									<li>
										<a href="https://space.bilibili.com/293201568" target="_blank">
											<i class="icon i_bilibili">
											</i>
										</a>
									</li>
									<li>
										<a href="https://www.github.com/54ayao" target="_blank">
											<i class="icon i_github">
											</i>
										</a>
									</li>
								</ul>
							</div>
							<div class="join_us ">
								<!-- 添加类名 sublist_show 显示子菜单 -->
								<div class="tit_area">
									<h3 class="tit">
										加入我们
									</h3>
									<i class="icon icon_arrow">
									</i>
								</div>
								<ul class="join_list">
									<li>
									<a href="" style="font-size: 15px;"> 
											邮箱：hr@cola.mail
										</a>
									</li>
								</ul>
							</div>
			<div class="contact_us">  
  <div class="tit_area">  
    <h3 class="tit"> <!-- 设置标题字体大小为20像素 -->  
      联系我们  
    </h3>  
    <i class="icon icon_arrow">  
    </i>  
  </div>  
  <ul class="contact_list">  
    <li>  
      <a href="" style="font-size: 15px;"> <!-- 设置链接字体大小为16像素 -->  
        邮箱：ayao@cola.mail  
      </a>  
    </li> 
      
     <li>  工作日时间（09:00-18:00）</li> 

 
   
      
  </ul>  
</div>
							<div class="logo_ayao">
							 <a class="navbar-logo" href="https://WWW.jsdmirror.com"><img src="https://img.cuteapi.com/2023/08/29/Background.png" switch-src="https://img.cuteapi.com/2023/08/29/Background.png" alt="JSDMirror">
							</div>
							<div class="footer_area">
								<ul class="links">
									<li class="num">
										<a href="http://beian.miit.gov.cn/">
											辽ICP备2023005487号-9
										</a>
									</li>
									<li class="num">
										<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=21028102000208">
											辽公网安备21028102000208号
										</a>
									</li>
									<li class="num">
										<a href="https://icp.gov.moe/?keyword=20245211">
											萌ICP备20245211号
										</a>
									</li>
								</ul>
<?php  
// ../footer.php 文件  
  
// 包含 log/content.php 文件以获取版本信息函数  
include('log/log.php');  
  include('logs.php'); 
// 调用 getVersion() 函数获取版本信息  
$frontendVersion = getVersion();  

?>  
  
<p class="copyright">  
    <a href="http://beian.miit.gov.cn/" class="flag_num">  
        辽ICP备2023005487号-7  
    </a>  
    <a class="num" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=21028102000208">  
        辽公网安备21028102000208号
    </a>
        <a class="flag_num" href="https://icp.gov.moe/?keyword=20225552">  
        萌ICP备20225552号  
    </a>  
<?php  
// 获取当前年份  
$currentYear = date('Y');  
  
// 在这里， 
echo '<a>&copy; 2023-' . $currentYear . ' zeyao All Rights Reserved.</a>';  
?>
    </script>
    
    <br class="flag_m" />  
    泽瑶网络 版权所有   
   前端版本号: <a href="/log"><?php echo $frontendVersion; ?></a>  
   
</p>

							</div>
							
						
							
						</div>
				
					</div>
					<div class="toast-container position-fixed p-3 top-0 start-50 translate-middle-x">
					</div>
						</main>
							</div>
								</div>
								<script src="https://cdn.jsdmirror.com/npm/jquery@3.6.0/dist/jquery.slim.js"></script>
<script src="https://cdn.jsdmirror.com/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="/static/js/app.b19de6.js"></script>
<script src="/static/js/js.js"></script>

					</body></html>