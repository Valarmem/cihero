<!doctype html>
<html lang="zh-cn">
<head>
    <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui" charset="UTF-8">
    <title>加载底部</title>
    <!-- UC强制全屏 -->
    <meta name="full-screen" content="yes">
    <!-- QQ强制全屏 -->
    <meta name="x5-fullscreen" content="true">
    <style>
    *{
        margin: 0;
        padding:0;
        -webkit-tap-highlight-color:rgba(0,0,0,0);
        -webkit-text-size-adjust:none;
    }
    html{
        font-size:10px;
    }
    body{
        background-color: #f5f5f5;
        font-size: 1.2em;
    }
    .header{
        height: 44px;
        line-height: 44px;
        border-bottom: 1px solid #ccc;
        background-color: #eee;
    }
    .header h1{
        text-align: center;
        font-size: 2rem;
        font-weight: normal;
    }
    .content{
        max-width: 640px;
        margin: 0 auto;
        background-color: #fff;
    }
    .content .item{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align:center;
        -webkit-box-align:center;
        box-align:center;
        -webkit-align-items:center;
        align-items:center;
        padding:3.125%;
        border-bottom: 1px solid #ddd;
        color: #333;
        text-decoration: none;
    }
    .content .item img{
        display: block;
        width: 40px;
        height: 40px;
        border:1px solid #ddd;
    }
    .content .item h3{
        display: block;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        width: 100%;
        max-height: 40px;
        overflow: hidden;
        line-height: 20px;
        margin: 0 10px;
        font-size: 1.2rem;
    }
    .content .item .date{
        display: block;
        height: 20px;
        line-height: 20px;
        color: #999;
    }
    .opacity{
        -webkit-animation: opacity 0.3s linear;
        animation: opacity 0.3s linear;
    }
    @-webkit-keyframes opacity {
        0% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    }
    @keyframes opacity {
        0% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    }
    </style>
    <link rel="stylesheet" href="<?=base_url()?>public/css/dropload.css">
</head>
<body>
<div class="header">
    <h1>就当我是新闻页吧</h1>
</div>
<div class="content">
    <div class="lists"></div>
</div>
<!-- jQuery1.7以上 或者 Zepto 二选一，不要同时都引用 -->
<script src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>public/js/dropload.min.js"></script>
<script>
$(function(){
    // 页数
    var page = 0;
    // 每页展示5个
    var size = 5;

    // dropload
    $('.content').dropload({
        scrollArea : window,
        loadDownFn : function(me){
            page++;
            // 拼接HTML
            var result = '';
            $.ajax({
                type: 'GET',
                // url: 'http://ons.me/tools/dropload/json.php?page='+page+'&size='+size,
                url: '<?=base_url()?>/test/putjson?page='+page,
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    var arrLen = data.length;
                    if(arrLen > 0){
                        for(var i=0; i<arrLen; i++){
                            result +=   '<a class="item opacity" href="'+data[i].link+'">'
                                            +'<img src="'+data[i].pic+'" alt="">'
                                            +'<h3>'+data[i].det_descript+'</h3>'
                                            +'<span class="date">'+data[i].date+'</span>'
                                        +'</a>';
                        }
                    // 如果没有数据
                    }else{
                        // 锁定
                        me.lock();
                        // 无数据
                        me.noData();
                    }
                    // 为了测试，延迟1秒加载
                    setTimeout(function(){
                        // 插入数据到页面，放到最后面
                        $('.lists').append(result);
                        // 每次数据插入，必须重置
                        me.resetload();
                    },1000);
                },
                error: function(xhr, type){
                    alert('Ajax error!');
                    // 即使加载出错，也得重置
                    me.resetload();
                }
            });
        }
    });
});
</script>
</body>
</html>