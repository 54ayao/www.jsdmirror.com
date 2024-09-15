
					<div class="features">
						<div class="container">
							<div class="features-title">
								<span>
									Features
								</span>
								<h2>
									服务优势 
								</h2>
								<p>
								</p>
							</div>
							<div class="row gx-0 gx-md-5">
								<div class="col-12 col-md-3">
									<div class="single-feature">
										<div class="feature-icon">
											<i class="bi bi-clouds">
											</i>
										</div>
										<div class="feature-content">
											<h3>
												多容灾项目
											</h3>
											<p>
												使用了大厂服务，配合腾讯云IGTM监控秒级监控。故障秒切换（119.29.29.29）其他DNS需要等域名缓存TTL过期
											</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="single-feature">
										<div class="feature-icon">
											<i class="bi bi-layout-text-window-reverse">
											</i>
										</div>
										<div class="feature-content">
											<h3>
												全球CDN
											</h3>
											<p>
												让你的静态资源获得急速的响应速度，提高访问可用性
											</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="single-feature">
										<div class="feature-icon">
											<i class="bi bi-people">
											</i>
										</div>
										<div class="feature-content">
											<h3>
												统一的加速方法
											</h3>
											<p>
												和jsdelivr保持一样的加速方法，简单切换
											</p>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-3">
									<div class="single-feature">
										<div class="feature-icon">
											<i class="bi bi-layers">
											</i>
										</div>
										<div class="feature-content">
											<h3>
												提供api
											</h3>
											<p>
												提供自定义域名，缓存时间，清理缓存API，资源预热API
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="about">
						<div class="container">
							<div class="about-wrap">
								<div class="about-content">
									<div class="about-content1">
									<span class="tag">
										关于JSDMirror
									</span>
									<h3>
									免费的全球 CDN
									</h3>
									<p>
									JSDMirror 是一个免费的前端CDN系统我们与上游jsDelivr紧密集成，使我们能够自动为几乎所有开源项目提供可靠的 CDN 服务
									我们在国内有稳定的CDN供应商，虽然我们需要定期向CDN服务商结算CDN费用，这些都是小case，任何人都可以完全免费使用，但是大家不要恶意使用。
									其中全球内容需要符合中国大陆法律法规，国际站是美国那边的法律，如果违反了法律法规可能遭受到封禁
							</div>
								
							
								
									<a class="btn btn-primary btn-lg" href="about">
										查看更多
									</a>
								</div>
								<div class="about-image">
									<img src="https://api.ayao.ltd/PC" width="800"   height="550"/>
								</div>
							</div>
						</div>
					</div>
				
			<div class="about"> 
      <div class="container"> 
       <div class="about-wrap1"> 
        <div class="about-content1"> 
 <?php  
// 原始服务商列表   
$originalList = [  

    'RanCloud',
       '火毅盾',    
];  
  
// 打乱服务商列表的顺序  
shuffle($originalList);  
  
// 输出随机排序后的服务商列表  
echo "<span class='tag1'>赞助商</span>";  
echo "<h6>排名不分先后顺序，系统随机排序</h6>";  
echo "<div class='section-content clearfix'>";  
echo "<ul class='partner-list fast-link'>";  
  
foreach ($originalList as $item) {  
    // 根据服务商名称选择图标格式和链接  
    $iconUrl = ''; // 初始化图标路径  
    $domainUrl = ''; // 初始化链接地址  
  
if (strpos($item, 'RanCloud') !== false) {  
        $iconUrl = '/static/img/serve/RanCloud.png'; // RanCloud图标路径  
        $domainUrl = '/service/RanCloud/'; // RanCloud官网  
    }
     elseif (strpos($item, '火毅盾') !== false) {  
        $iconUrl = '/static/img/serve/hydun.png'; // 火毅盾图标路径  
        $domainUrl = '/service/hydun/'; // 火毅盾官网  
    }

  
    echo "<li class='fast-link-item'><a href='$domainUrl'><img src='$iconUrl' alt='$item'></a></li>";  
}  
  
echo "</ul>";  
echo "</div>";  
?>
    
			
		 
        </div> 
       </div> 
      </div> 
     </div>	
				
					<div class="about"> 
      <div class="container"> 
       <div class="about-wrap1"> 
        <div class="about-content1"> 
 <?php  
// 原始服务商列表  
$originalList = [  
    '腾讯云',  
    'DNSPod',  
    '白山云',  
    'RanCloud',
    '火毅盾',    
];  
  
// 打乱服务商列表的顺序  
shuffle($originalList);  
  
// 输出随机排序后的服务商列表  
echo "<span class='tag1'>服务商</span>";  
echo "<h6>排名不分先后顺序，系统随机排序</h6>";  
echo "<div class='section-content clearfix'>";  
echo "<ul class='partner-list fast-link'>";  
  
foreach ($originalList as $item) {  
    // 根据服务商名称选择图标格式和链接  
    $iconUrl = ''; // 初始化图标路径  
    $domainUrl = ''; // 初始化链接地址  
  
    if (strpos($item, '腾讯') !== false) {  
        $iconUrl = '/static/img/serve/tencent-cloud.svg'; // 腾讯云图标路径  
        $domainUrl = '/service/TencentCloud/'; // 腾讯云官网  
    } elseif (strpos($item, 'DNSPod') !== false) {  
        $iconUrl = '/static/img/serve/DNSPod.svg'; // DNSPod图标路径  
        $domainUrl = '/service/DNSPod/'; // DNSPod官网  
    } elseif (strpos($item, '白山') !== false) {  
        $iconUrl = '/static/img/serve/baishan.png'; // 白山云图标路径  
        $domainUrl = '/service/BS/'; // 白山云官网  
    }
 elseif (strpos($item, '火毅盾') !== false) {  
        $iconUrl = '/static/img/serve/hydun.png'; // 火毅盾图标路径  
        $domainUrl = '/service/hydun/'; // 火毅盾官网  
    }
  
    echo "<li class='fast-link-item'><a href='$domainUrl'><img src='$iconUrl' alt='$item'></a></li>";  
}  
  
echo "</ul>";  
echo "</div>";  
?>
        
        </div> 
       </div> 
      </div>  </div> 
      </div>  
  <div class="about">
     <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center"><span class="mb-2 block text-lg font-semibold text-primary">团队成员</span>

                <p class="text-base text-body-color dark:text-dark-6">JSDMirror团队是一个xxxx的团队，致力于xxxx。</p>
            </div>
        </div>
    </div>
    <div class="-mx-4 flex flex-wrap justify-center">
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]"><a href="https://www.ayao.ltd"><img src="https://q1.qlogo.cn/g?b=qq&nk=202835956&s=640" alt="team image" class="h-[120px] w-[120px] rounded-full"><span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span></div>
                <div class="text-center">	
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">Eagle Yao</h4>
                    <h5 class="category text-primary lang" key="team-position-owner">
														前端/运营
													</h5>
													<p class="description">
														这是一位比后端都懒得运营，
														<del>
															一个功能都要拖好久好久
														</del>
														<strong>
															也就是腾讯云用户群里面被叫瑶瑶（瑶妹）那位	</strong>发邮件或者说QQ,微信没看到的的可以试试在腾讯云用户群问问总有人认识我的
														</a>
											
                </div>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]"><img src="https://q1.qlogo.cn/g?b=qq&nk=940376430&s=640" alt="team image" class="h-[120px] w-[120px] rounded-full"></div>
                <div class="text-center">
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">⁡⁡</h4>
                    <h5 class="category text-primary lang" key="team-position-owner">
														维护
													</h5>
																										<p class="description">
														这是一位神秘的人，负责参与前端系统开发和迭代
														<del>
															剩下的不知
														</del>
                </div>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]"><a href="https://www.9kr.cc"><img src="https://img.cuteapi.com/2023/11/22/_20231122111701.jpg" alt="team image" class="h-[120px] w-[120px] rounded-full"><span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span></div>
                <div class="text-center">
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">KR</h4>
                    <h5 class="category text-primary lang" key="team-position-owner">
													后端开发
													</h5>
													<p class="description">
														常年在编写后端相关服务，
														<strong>
															是个优秀的后端，
														</strong>
														，
														<del>
															但也是划水多年的咸鱼鸽子一枚
														</del>
														，
														<strong>
															其口头禅
														</strong>
														，
														<del>
															下次一定，基本上每天都在说
														</del>
														<strong>
															也就是腾讯云用户群里面被叫元元那位	</strong></a>
                </div>
            </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]"><img src="https://q1.qlogo.cn/g?b=qq&nk=2095746151&s=640" alt="team image" class="h-[120px] w-[120px] rounded-full"><span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span></div>
                <div class="text-center">
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
															冉҈҉҈҉҈҉҈҉҈茹
														</h4>
                      <h5 class="category text-primary lang" key="team-position-owner">
														社群管理
													</h5>
														<p class="description">
														E人
														<strong>
															人美声甜，一推就倒
														</strong>
														，
														<del>
															说白了的是个MTF
														</del>
														，
														<strong>
															不是(((
														</strong>
                </div>
            </div>
        </div>
         <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">	<a href="https://www.loliapi.com/"><img src="https://q1.qlogo.cn/g?b=qq&amp;nk=2519719113&amp;s=640" alt="team image" class="h-[120px] w-[120px] rounded-full"><span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span></div>
                <div class="text-center">
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
																猫猫摸大鱼
														</h4>
                      <h5 class="category text-primary lang" key="team-position-owner">
														社群管理
													</h5>
														<p class="description">
														
															爱喝摸鱼生椰拿铁的屑猫猫
													
														<strong>
															也就是腾讯云用户群里面被叫猫猫那位	</strong>	</a>	</div>
												</div>
                </div>
          
        
         <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
            <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">	<a href="https://www.acg.ltd/"><img src="https://q1.qlogo.cn/g?b=qq&amp;nk=208230039&amp;s=640" alt="team image" class="h-[120px] w-[120px] rounded-full"><span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span></div>
                <div class="text-center">
                    <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
																sola
														</h4>
                      <h5 class="category text-primary lang" key="team-position-owner">
														社群管理
													</h5>
														<strong>
															咕咕咕
														</strong>	</a>	</div>
												</div>
                </div>
    </div>
<BR> <BR>  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap justify-center">
        <div class="w-full px-4">
      <div class="mx-auto mb-[60px] max-w-[485px] text-center"><span class="mb-2 block text-lg font-semibold text-primary">近期公告</span>
                <p class="text-base text-body-color dark:text-dark-6">一些关于jsdmirror的最新公告将发布在这里</p>
            </div>
        </div>
    </div>
    <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="wow fadeInUp group mb-10" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="mb-8 overflow-hidden rounded-[5px]"><a class="block" href="/notice/3/"><img src="https://www.cuteapi.com/api/acg/pc/api.php?3" alt="最近第三方投毒事件" class="w-full transition group-hover:rotate-6 group-hover:scale-125"></a></div>
                <div><span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"></span>
                    <h3><a class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl" href="/notice/3/">最近其他第三方前端站投毒事件</a></h3>
                    <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">发布时间：2024-08-03</p>
                </div>
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="wow fadeInUp group mb-10" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="mb-8 overflow-hidden rounded-[5px]"><a class="block" href="/notice/2/"><img src="https://www.cuteapi.com/api/acg/pc/api.php?2" alt="赞助可以获得的权限" class="w-full transition group-hover:rotate-6 group-hover:scale-125"></a></div>
                <div><span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"></span>
                    <h3><a class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl" href="/notice/2/">赞助可以获得的权限</a></h3>
                    <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">发布时间：2024-07-24</p>
                </div>
            </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="wow fadeInUp group mb-10" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="mb-8 overflow-hidden rounded-[5px]"><a class="block" href="/notice/1/"><img src="https://www.cuteapi.com/api/acg/pc/api.php?1" alt="关于近期全国重新大量PCDN节点盗刷情况" class="w-full transition group-hover:rotate-6 group-hover:scale-125"></a></div>
                <div><span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"></span>
                    <h3><a class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl" href="/notice/1/">关于近期全国重新大量PCDN节点盗刷情况</a></h3>
                    <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">发布时间：2024-07-09</p>
                </div>
            </div>
        </div>
      
                </div>
            </div>
        </div>
    </div> </div>
           