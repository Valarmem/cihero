<!doctype html>
<html lang="zh-cn">
<head>
    <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui" charset="UTF-8">
    <title>多次加载</title>
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
    .header .ipt{
        display: block;
        width: 100%;
        height: 44px;
        line-height: 24px;
        box-sizing: border-box;
        padding: 10px;
        border: 0 none;
        text-align: center;
        font-size: 2rem;
        font-weight: normal;
    }
    .content{
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
    <input type="text" class="ipt" placeholder="请输入显示的手机数量">
</div>
<div class="content">
    <div class="lists"></div>
</div>
<!-- jQuery1.7以上 或者 Zepto 二选一，不要同时都引用 -->
<script src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>public/js/dropload.min.js"></script>
<script>
$(function(){
    var timer;

    $('.header .ipt').on('input',function(){
        var _length = $(this).val();
        // 如果输入值不是数字或者是空，就跳出
        if(isNaN(_length) || _length === ''){
            return false;
        }
        clearTimeout(timer);
        timer = setTimeout(function(){
            // 清空内容
            $('.lists').html('');
            $('.dropload-down').remove();

            var counter = 0;
            // 每页展示4个
            var num = 4;
            var pageStart = 0,pageEnd = 0;
            // dropload
            $('.content').dropload({
                scrollArea : window,
                loadDownFn : function(me){
                    $.ajax({
                        type: 'GET',
                        url: '<?=base_url()?>public/json/more.json',
                        dataType: 'json',
                        success: function(data){
                            var result = '';
                            counter++;
                            pageEnd = num * counter;
                            pageStart = pageEnd - num;

                            for(var i = pageStart; i < pageEnd; i++){
                                result +=   '<a class="item opacity" href="'+data.lists[i].link+'">'
                                                +'<img src="'+data.lists[i].pic+'" alt="">'
                                                +'<h3>'+data.lists[i].title+'</h3>'
                                                +'<span class="date">'+data.lists[i].date+'</span>'
                                            +'</a>';
                                if((i + 1) >= _length || (i + 1) >= data.lists.length){
                                    // 锁定
                                    me.lock();
                                    // 无数据
                                    me.noData();
                                    break;
                                }
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function(){
                                $('.lists').append(result);
                                // 每次数据加载完，必须重置
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
        },500);
    });
});
</script>
</body>
</html>
