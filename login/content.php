<link rel="stylesheet" href="https://ioa.zzko.cn/ioa/login.css">     <!-- 尝试加载登录组件 -->  
<link rel="stylesheet" href="https://ioa.zzko.cn/ioa/ioa.css">     <!-- 正确加载显示内容 -->  
<style>
        /* 全局通用样式 */

        html {
            font-family: 'PingFangSC-Regular', -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, Arial, "Hiragino Sans GB", "Microsoft Yahei", sans-serif;
            font-size: 16px;
            word-spacing: 1px;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            background-color: #fff;
            font-size: 14px;
            color: #000000;
     
            overflow-x: auto;
            background-color: #F4F7FC;
            position: relative;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
            margin: 0;
        }

    
        .about {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 1;
        }


    
        .about .content .title {
    
            font-size: 16px;
            color: #7A8499;
            letter-spacing: 0;
        }

        .about .content .title #doaboutName{
            padding-right: 2px;
        }

    

        .about .content .content-about {
            padding-left: 92px;
          
            font-size: 16px;
            color: #7A8499;
            letter-spacing: 0;
        }

        .about .content .content-about .one {
            margin-bottom: 16px;
            line-height: 24px;
        }

        .about .content .content-about .two {
            margin-bottom: 32px;
            line-height: 32px;
        }

        .about .content .content-about .three {
            line-height: 24px;
        }

        .about .content .content-about .skip {
            font-size: 16px;
            color: #0052D9;
            letter-spacing: 0;
            line-height: 32px;
        }
    </style>
</head>

<body>
    <div class="about">
    <div class="container">
							<div class="about-wrap1">
								<div class="about-content1">
								
    <div id="app">

            <div class="head-title"></div>
            <div class="content">
                <div class="title"><span class="sign-icon"></span><span id="doaboutName"></span> 抱歉您的请求访问失败，请尝试以下方法后再次访问</div>
                <div class="content-about">
                    <p class="two">
                        1. 打开并登录iOA进行访问，如仍无法访问，可尝试单击iOA修复工具 <br/>
                        2. 如没有安装iOA，请在这企业微信微盘内部资源文件下载，安装完成后即可访问
                    </p>
                    <p class="three">如以上方法仍未解决您的问题，请企业微信联系<a href="javascript:;" class="skip" onclick="jupmWxwork()">Eagle Yao</a></p>
                </div>
            </div>
        </div>
    </div>  </div>
    <br> <br>
    	<script src="https://ioa.zzko.cn/ioa/ioa.js"></script>  <!-- 判断是否是公司内网IP,测试资源是否正常加载 -->  
    		<script src="https://ioa.zzko.cn/ioa/iogin.js"></script>  <!-- 判断是否是公司内网IP,登录验证是否允许 -->  