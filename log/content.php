


	<div class="about">
						<P>
							
						</p>
						<div class="container">
							<div class="about-wrap1">
								<div class="about-content1">
									<span class="tag1">
								<strong>	更新日志</strong>
									</span>
									<P>
							
						</p>
						

 
 <?php  
// 版本迭代信息数组  

  
// 输出版本迭代说明  
echo "<h2><strong>	更新日志说明</strong></h2>";  
echo "<p><strong>当前版本：</strong> " . $latestVersion['version'] . "</p>";  
echo "<p><strong>发布日期：</strong> " . $latestVersion['date'] . "</p>";  
echo "<p><strong>更新内容：</strong></p>";  
echo "<ul>";  
foreach ($versions as $version) {  
    if ($version['version'] === $latestVersion['version']) {  
        echo "<li><strong>" . $version['version'] . "</strong> - " . $version['description'] . "</li>";  
    } else {  
        echo "<li>" . $version['version'] . " - " . $version['description'] . "</li><br>";  
    }  
}  
echo "</ul>";  
?>

						</div>
								
							</div>
						
					</div>
								
							
								
					


 


	
							
								
					