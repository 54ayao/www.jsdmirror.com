<style>
  
    .tag1 {  
        font-size: 24px;  
        font-weight: bold;  
        color: #333;  
        margin-bottom: 20px;  
    }  
  
    table {  
        width: 100%;  
        border-collapse: collapse;  
        margin-bottom: 20px;  
    }  
  
    th, td {  
        border: 1px solid #ddd;  
        padding: 12px;  
        text-align: left;  
    }  
  
    th {  
        background-color: #f2f2f2;  
        color: #333;  
    }  
  
    tr:nth-child(even) {  
        background-color: #f9f9f9;  
    }  
  
    tr:hover {  
        background-color: #f1f1f1;  
    }  
  
    a {  
        color: #007bff;  
        text-decoration: none;  
    }  
  
    a:hover {  
        text-decoration: underline;  
    }  
</style>
		<div class="about">  
    <div class="container">  
        <div class="about-wrap1">  
            <div class="about-content1">  
                <span class="tag1">赞助列表</span>  
             <p style="font-family: Arial, sans-serif; color: #333; line-height: 1.6; text-align: center; padding: 20px; background-color: #f4f4f9; border-radius: 8px; margin: 20px 0;"> 🎉 JSDMirror的成长之路，因您的慷慨赞助而更加璀璨！<br> 若您心怀善意，能力所及，不妨伸出援手，与我们共筑未来。<br> 💌 赞助完成后，请记得向ayao@cola.email发送邮件，附上您的网站及你的网名，以及你想说的话，确保以上内容不违反中国大陆，中国香港现行法律法规，让我们铭记这份情谊。    <br>未发送邮件就按照 热心网友+订单后5位，后续可以提供订单号来完善您的捐赠信息,目前我们每个月的成本是在400元左右   <br>收到退款的可能是某些原因我们发起了退款申请，您的心意我们收到了。所以说你们仍然可以在这个页面看到自己的，部分收款渠道我们还在沟通中。。。</p>
          
              <?php  
$donations = [  
    [  
        'id' => 6,  
        'name' => 'Miku',  
        'website' => '', 
        'website_name' => '',
        'amount' => '1.00 USD',  
        'channel' => 'paypal',  
        'date' => '2024年7月22日',  
        'message' => '无' ,   
        'notes' => '于2024年7月22日已退款，理由：paypal收取近百分之50手续费'   
    ],  
    [  
        'id' => 5,  
        'name' => '𝕭𝖓𝖖𝕯𝖟𝖏',  
        'website' => '',  
        'website_name' => '',
        'amount' => '10.00 USDT',  
        'channel' => '数字货币',  
        'date' => '2024年7月21日',  
        'message' => '无' ,   
        'notes' => '于2024年7月22日已退款，理由：备注涉嫌敏感词'   
    ],  
     [  
        'id' => 4,  
        'name' => '猫猫摸大鱼',  
        'website' => 'https://www.loliapi.com/', 
        'website_name' => 'loliapi',
        'amount' => '10.00 RMB',  
        'channel' => '支付宝',  
        'date' => '2024年7月19日',  
        'message' => '都不知道自觉给我先上到赞助上，不懂事'  ,   
        'notes' => '无'  
    ],  
     [  
        'id' => 3,  
        'name' => '栗子',  
        'website' => 'https://www.alcy.cc/', 
           'website_name' => '举个栗子',
        'amount' => '66.66 RMB',  
        'channel' => '支付宝',  
        'date' => '2024年7月19日',  
        'message' => '瑶瑶是栗子的宝贝' ,   
        'notes' => '无'   
    ],  
    
      [  
        'id' => 2,  
        'name' => '热心网友8542',  
        'website' => '',  
         'website_name' => '',
        'amount' => '1 RMB',  
        'channel' => '支付宝',  
        'date' => '2024年7月3日',  
        'message' => '感谢你们提供的免费cdn' ,   
        'notes' => '无'   
    ],  
  
    [  
        'id' => 1,  
        'name' => '热心网友0437',  
        'website' => '',  
         'website_name' => '',
        'amount' => '1 RMB',  
        'channel' => '微信',  
        'date' => '2023年1月9日',  
        'message' => 'I18n Update Mod用到' ,   
        'notes' => '无'  
    ]  
];  
  
// 开始表格HTML  
echo '<table border="1">';  
echo '<tr><th>姓名</th><th>网站链接</th><th>金额</th><th>渠道</th><th>时间</th><th>留言</th><th>备注</th></tr>';  
  
// 遍历捐赠数据并生成表格行  
foreach ($donations as $donation) {  
    echo '<tr>';  

    echo '<td>' . htmlspecialchars($donation['name']) . '</td>';  
    echo '<td>';  
    if ($donation['website'] !== '') {  
        echo '<a href="' . htmlspecialchars($donation['website']) . '">' . htmlspecialchars($donation['website_name'] ?: $donation['website']) . '</a>';  
        // 如果website_name为空，则回退到使用URL作为链接文本（但通常不推荐）  
    } else {  
        echo '无'; // 如果没有网站，则显示一个空格或留空  
    }  
    echo '</td>';    
    echo '<td>' . htmlspecialchars($donation['amount']) . '</td>';  
    echo '<td>' . htmlspecialchars($donation['channel']) . '</td>';  
    echo '<td>' . htmlspecialchars($donation['date']) . '</td>';  
    echo '<td>' . htmlspecialchars($donation['message']) . '</td>';  
       echo '<td>' . htmlspecialchars($donation['notes']) . '</td>';  
    echo '</tr>';  
}  
  
// 结束表格HTML  
echo '</table>';  
?> 
            </div>  
        </div>  
    </div>  
</div>