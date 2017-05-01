<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--360浏览器优先以webkit内核解析-->
    <title>主页示例</title>
    <link rel="shortcut icon" href="flamez/favicon.ico"> 
    <?=Html::cssFile('@web/flamez/css/bootstrap.min14ed.css?v=3.3.6')?>
    <?=Html::cssFile('@web/flamez/css/font-awesome.min93e3.css?v=4.4.0')?>
    <?=Html::cssFile('@web/flamez/css/animate.min.css')?>
    <?=Html::cssFile('@web/flamez/css/style.min862f.css?v=4.1.0')?>
    
    

</head>

<body class="gray-bg">
    <div class="row  border-bottom white-bg dashboard-header">
        <div class="col-sm-5"style="font-size:24px;">
            <h4 style="font-size:36px;">后台操作指南：</h4>
            <ol>
                <li>左侧是菜单栏可以根据需求打开</li>
                <li>点击头部绿色按钮菜单可收起</li>
                <li>右上方可以选择关闭不用的操作</li>
                <li>点击主题可以跟换自己喜欢的页面色彩格局</li>
                <li>谢谢使用</li>
                <li>还有更多操作有待您的发掘</li>
                <li>更多……</li>
            </ol>
        </div>

    </div>
   
    <?=Html::jsFile('@web/flamez/js/jquery.min.js?v=2.1.4')?>
    <?=Html::jsFile('@web/flamez/js/bootstrap.min.js?v=3.3.6')?>
    <?=Html::jsFile('@web/flamez/js/plugins/layer/layer.min.js')?>
    <?=Html::jsFile('@web/flamez/js/content.min.js')?>
    <?=Html::jsFile('@web/flamez/js/welcome.min.js')?>
</body>
</html>
