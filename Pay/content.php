<style>  
    .tab {  
        display: none;  
    }  
      
    .tab.active {  
        display: block;  
    }  
      
    .tab-header {  
        cursor: pointer;  
        padding: 10px;  
        border-bottom: 2px solid transparent;  

        background-color: #f5f5f5;  
        transition: background-color 0.3s ease, color 0.3s ease, border-bottom-color 0.3s ease;  
        margin-right: 10px;  
    }  
      
    .tab-header:last-child {  
        margin-right: 0;  
    }  
      
    .tab-header.active {  
        color: #fff;  
        background-color: #4CAF50;  
        border-bottom-color: #4CAF50;  
    }  
      
    .tab-header:hover {  
        background-color: #ddd;  
        color: #000;  
    }  
      
    .tab-headers {  
        display: flex;  
        justify-content: center;  
        align-items: center;  
        margin-bottom: 20px;  
    }  
      
    .image-container {  
        display: flex;  
        justify-content: center;  
        align-items: center;  
        padding: 10px;  
  
    }  
      
  .image-container img {  
        display: block; /* 将图片设置为块级元素 */  
        margin-left: 1%; /* 将左边外边距设置为自动 */  
        margin-right: 1%; /* 将右边外边距设置为自动 */  
        max-width: 100%; /* 设置图片的最大宽度为100% */  
        height: auto; /* 设置图片的高度自适应 */  
    }  
  
    /* 设置.tab-headers容器为flex布局并居中显示 */  
    .tab-headers {  
        display: flex;  
        justify-content: center;  
        align-items: center;  
        margin-bottom: 20px;  
        flex-wrap: wrap; /* 允许按钮换行 */  
    }  
  
    /* 设置.tab-header元素的宽度 */  
  .tab-header {    
    width: 95px; /* 设置按钮的宽度为100px */  
    margin-right: 5px; /* 设置按钮的右边距为10px */    
    margin-left: 5px; /* 设置按钮的左边距为10px */    
    margin-bottom: 15px; /* 设置按钮的下边距为10px */    
    text-align: center; /* 设置文本居中 */    
}
  
    /* 新增的媒体查询 */  
    @media screen and (min-width: 992px) {  
        .tab-headers {  
            flex-wrap: nowrap; /* 禁止按钮换行 */  
        }  
    }  


    /* 设置图片的样式 */  
    .image-container img {  
        max-width: 100%; /* 设置图片的最大宽度为100% */  
        height:  auto !important;/* 设置图片的高度自适应 */  
    }  
   /* 图片原始尺寸为 1080x1680 */  
  @media screen and (max-width: 1080px) {  
    .image-container img {  
        width: 600;  
        height: auto; 
        transform: scale(1.0);  
    }  
}  

/* 在宽度为 768px 的屏幕下缩小图片至 40% */  
@media screen and (max-width: 768px) {  
    .image-container img {  
        width: 100%;  
        height: auto;  
        transform: scale(1.0);  
    }  
}  
  
/* 在宽度为 600px 的屏幕下缩小图片至 30% */  
@media screen and (max-width: 600px) {  
    .image-container img {  
        width: 100%;  
        height: auto;  
        transform: scale(1.0);  
    }  
}  
  
/* 在宽度为 400px 的屏幕下缩小图片至 20% */  
@media screen and (max-width: 400px) {  
    .image-container img {  
        width: 100%;  
        height: auto;  
        transform: scale(1.0);  
    }  
}
</style>

	<div class="about">
						<P>
							
						</p>
						<div class="container">
							<div class="about-wrap1">
								<div class="about-content1">
									<span class="tag1">
										赞助方法
									</span>
									<P>
							
						</p>
						

 
    <div class="tab-headers">  
        <div class="tab-header active" onclick="showTab(1)">支付宝</div>  
        <div class="tab-header" onclick="showTab(2)">微信</div>  
        <div class="tab-header" onclick="showTab(3)">QQ</div>  
        <div class="tab-header" onclick="showTab(4)">云闪付</div>  
        <div class="tab-header" onclick="showTab(5)">对公转账</div>  
        <div class="tab-header" onclick="showTab(6)">PayPal</div>  
        <div class="tab-header" onclick="showTab(7)">USTD</div>  
    </div>  
    <!-- 新增的图片容器 -->  
    <div class="image-container">  
        <div id="tab1" class="tab active">  
        <img src="/Pay/Alipay.jpg" alt="支付宝" style="height:630px; width: 405px;">  
        </div>  
        <div id="tab2" class="tab">  
            <img src="/Pay/Wechat.jpg" alt="微信" style="height:720px; width: 450px;">  
        </div>  
        <div id="tab3" class="tab">  
            <img src="/Pay/QQ.jpg" alt="QQ" style="height: 50px; width: 50px;">  
        </div>  
        <div id="tab4" class="tab">  
            <img src="/Pay/unionpay.jpg" alt="unionpay" style="height: 50px; width: 50px;">  
        </div>  
        <div id="tab5" class="tab">  
          <br>待填写
                   <br>
        </div>  
        <div id="tab6" class="tab">  
            <img src="/Pay/PayPal.jpg" alt="PayPal" style="height: 50px; width: 50px;">  
        </div>  
        <div id="tab7" class="tab">  
            <img src="/Pay/USTD.jpg" alt="USTD" style="height: 50px; width: 50px;">  
        </div>  
    </div>  
    <script>  
        function showTab(tabIndex) {  
            // 隐藏所有TAB和TAB头  
            var tabs = document.getElementsByClassName('tab');  
            var tabHeaders = document.getElementsByClassName('tab-header');  
            for (var i = 0; i < tabs.length; i++) {  
                tabs[i].classList.remove('active');  
                tabHeaders[i].classList.remove('active');  
            }  
            // 显示选中的TAB和TAB头  
            var selectedTab = document.getElementById('tab' + tabIndex);  
            var selectedTabHeader = document.getElementsByClassName('tab-header')[tabIndex - 1];  
            selectedTab.classList.add('active');  
            selectedTabHeader.classList.add('active');  
        }  
    </script>

						<a class="btn btn-primary btn-lg" href="/top">
										排行榜
									</a>	</div>
								
							</div>
						
					</div>
								
						</div>	
							
								
					