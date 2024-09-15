		
					<div class="about">
						<div class="container">
							<div class="about-wrap">
								<div class="about-content">
									<div class="about-content1">
									<span class="tag">
										服务商介绍
									</span>
									<h3>
									关于DNSPod
									</h3>
										<div class="section-content clearfix"><ul class="partner-list fast-link"><li class="fast-link-item"><a href="https://www.dnspod.cn/"><img src="/static/img/serve/DNSPod.svg" alt="RanCloud"></a></li></ul></div>
									<p>
								DNSPod是国内提供智能DNS产品的网站，致力于为各类网站提供高质量的电信、网通、教育网双线或者三线智能DNS免费解析。目前DNSPod已经是国内最大的免费DNS解析产品提供商
							</div>
								
							
								
									<a class="btn btn-primary btn-lg" href="https://www.dnspod.cn/">
										前往服务商官网
									</a>
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
];  
  
// 打乱服务商列表的顺序  
shuffle($originalList);  
  
// 输出随机排序后的服务商列表  
echo "<span class='tag1'>服务商产品</span>";  
echo "<h6>排名不分先后顺序，系统随机排序</h6>";  
echo "<div class='section-content clearfix'>";  
echo "<ul class='partner-list fast-link'>";  
  
foreach ($originalList as $item) {  
    // 根据服务商名称选择图标格式和链接  
    $iconUrl = ''; // 初始化图标路径  
    $domainUrl = ''; // 初始化链接地址  
  
    if (strpos($item, '腾讯') !== false) {  
        $iconUrl = '/static/img/serve/tencent-cloud.svg'; // 腾讯云图标路径  
        $domainUrl = 'https://cloud.tencent.com/'; // 腾讯云官网  
    } elseif (strpos($item, 'DNSPod') !== false) {  
        $iconUrl = '/static/img/serve/DNSPod.svg'; // DNSPod图标路径  
        $domainUrl = 'https://www.dnspod.cn/'; // DNSPod官网  
    }

  
    echo "<li class='fast-link-item'><a href='$domainUrl'><img src='$iconUrl' alt='$item'></a></li>";  
}  
  
echo "</ul>";  
echo "</div>";  
?>
							</div>
						</div>
					</div>