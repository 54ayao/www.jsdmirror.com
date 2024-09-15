<?php

// 版本迭代信息数组  
$versions = [
    ['version' => 'V1.0', 'date' => '2024-06-20', 'description' => "JSDMirror首页上线"],
    ['version' => 'V1.1', 'date' => '2024-06-20', 'description' => "更新首页"],
    ['version' => 'V1.2', 'date' => '2024-06-20', 'description' => "更新关于我们"],
    ['version' => 'V1.3', 'date' => '2024-06-20', 'description' => "更新赞助商页面"],
    ['version' => 'V1.4', 'date' => '2024-06-20', 'description' => "更新支持邮箱"],
    ['version' => 'V1.5', 'date' => '2024-06-20', 'description' => "删除一部分友情链接"],
    ['version' => 'V1.6', 'date' => '2024-06-25', 'description' =>"优化服务商页面增加服务商详情信息"],
    ['version' => 'V1.7', 'date' => '2024-07-02', 'description' =>"独享策略上线"],
    ['version' => 'V1.8', 'date' => '2024-07-09', 'description' =>"公告系统上线"],
    ['version' => 'V1.9', 'date' => '2024-07-20', 'description' =>"赞助页面已经上线辣"],
    ['version' => 'V2.0', 'date' => '2024-09-15', 'description' =>"更新了首页，剩下的明天写"],
];

// 获取最新版本信息  
$latestVersion = end($versions);