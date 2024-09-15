
	//移动端页脚
	$(".join_us .tit_area").click(function(){
		if($(this).parent().hasClass("sublist_show")){
			$(this).parent().removeClass("sublist_show");
		}else{
			$(this).parent().addClass("sublist_show");
		}
	});

	$(".contact_us .tit_area").click(function(){
		if($(this).parent().hasClass("sublist_show")){
			$(this).parent().removeClass("sublist_show");
		}else{
			$(this).parent().addClass("sublist_show");
		}
	});

	$(".legal_info .tit_area").click(function(){
		if($(this).parent().hasClass("sublist_show")){
			$(this).parent().removeClass("sublist_show");
		}else{
			$(this).parent().addClass("sublist_show");
		}
	});


	if($('.video1')[0]){
		//banner
		var isBanner = false;
		var isBannerI = 0;

		var u = navigator.userAgent;
		if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1) {//安卓手机
			$('.video1').hide();
			$('.banner_txt').addClass('animation');
			} else if (u.indexOf('iPhone') > -1) {//苹果手机
				document.addEventListener("WeixinJSBridgeReady", function () {
					   $('#video')[0].play()
				}, false);
				} else if (u.indexOf('Windows Phone') > -1) {//winphone手机
					$('.video1').hide();
					$('.banner_txt').addClass('animation');
			}



		$('.video1')[0].onplaying = function (){
			$('.banner_txt').addClass('animation');
			isBanner = true;
		}


		setInterval(function (){
			if(isBanner){
				if($('.video1')[0].currentTime < 0.5){
					if(isBannerI){
						$('.banner_txt .hook_area').addClass('animation1');
					}
					$('.banner_txt .hook_area').removeClass('animation2');
					$('.banner_txt .hook_area').removeClass('animation3');
					$('.banner_txt .hook_area').removeClass('animation4');
				}

				if($('.video1')[0].currentTime > 2.7){
					isBannerI = 1;
					$('.banner_txt .hook_area').addClass('animation2');
				}
				if($('.video1')[0].currentTime > 4.5){
					$('.banner_txt .hook_area').addClass('animation3');
				}
				if($('.video1')[0].currentTime > 6.4){
					$('.banner_txt .hook_area').addClass('animation4');
				}
			}

		},1000/24);
	}
// 检测是否为移动设备  
var isMobile = /Mobi|Android/i.test(navigator.userAgent);  
  
var wechatBtn = document.querySelector('.wechat-btn');  
var wechatCode = document.querySelector('.wechat-code');  
var qqBtn = document.querySelector('.qq-btn');  
var qqCode = document.querySelector('.qq-code');  
  
// PC端的鼠标悬停事件处理  
if (!isMobile) {  
    wechatBtn.addEventListener('mouseover', function(event) {  
        wechatCode.style.display = 'block';  
    });  
    wechatBtn.addEventListener('mouseout', function(event) {  
        wechatCode.style.display = 'none';  
    });  
    qqBtn.addEventListener('mouseover', function(event) {  
        qqCode.style.display = 'block';  
    });  
    qqBtn.addEventListener('mouseout', function(event) {  
        qqCode.style.display = 'none';  
    });  
}  
  
// 移动端的点击事件处理  
if (isMobile) {  
    wechatBtn.addEventListener('click', function(event) {  
        event.preventDefault();  
        var isCodeVisible = wechatCode.style.display === 'block';  
        wechatCode.style.display = isCodeVisible ? 'none' : 'block';  
    });  
    qqBtn.addEventListener('click', function(event) {  
        event.preventDefault();  
        var isCodeVisible = qqCode.style.display === 'block';  
        qqCode.style.display = isCodeVisible ? 'none' : 'block';  
    });  
}  
