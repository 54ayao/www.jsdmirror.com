		
					<div class="about">
						<div class="container">
							<div class="about-wrap">
								<div class="about-content">
									<div class="about-content1">
									<span class="tag">
										服务商介绍
									</span>
									<h3>
									关于腾讯云
									</h3>
										<div class="section-content clearfix"><ul class="partner-list fast-link"><li class="fast-link-item"><a href="https://cloud.tencent.com/"><img src="/static/img/serve/tencent-cloud.svg" alt="RanCloud"></a></li></ul></div>
									<p>
								腾讯云，腾讯集团倾力打造的云计算品牌，面向全世界各个国家和地区的政府机构、企业组织和个人开发者，提供全球领先的云计算、大数据、人工智能等技术产品与服务，以卓越的科技能力打造丰富的行业解决方案，构建开放共赢的云端生态，推动产业互联网建设，助力各行各业实现数字化升级。
								<br>
								JSDMirror的基础/底层设施基本上全部架设在腾讯云云服务之上
							</div>
								
							
								
									<a class="btn btn-primary btn-lg" href="https://cloud.tencent.com">
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
    'EdgeOne',
    'lighthouse',  
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
    } elseif (strpos($item, 'EdgeOne') !== false) {  
        $iconUrl = '/static/img/serve/EdgeOne.png'; // EdgeOne图标路径  
        $domainUrl = 'https://cloud.tencent.com/product/teo'; // EdgeOne地址
    }    elseif (strpos($item, 'lighthouse') !== false) {  
        $iconUrl = '/static/img/serve/lighthouse.svg'; // EdgeOne图标路径  
        $domainUrl = 'https://cloud.tencent.com/product/lighthouse'; // EdgeOne地址
    }

  
    echo "<li class='fast-link-item'><a href='$domainUrl'><img src='$iconUrl' alt='$item'></a></li>";  
}  
  
echo "</ul>";  
echo "</div>";  
?>
							</div>
						</div>
					</div>