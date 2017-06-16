<!DOCTYPE html>
<html style="font-size: 69.6px;" data-dpr="2">

  <head>
    <meta charset="utf-8">
    <title>《今日头条》你关心的,才是头条! - TouTiao.com</title>
    <meta charset="utf-8">
    <link rel="apple-touch-icon-precomposed" href="//s3.pstatp.com/image/toutiao_mobile/icon_180_1.png">
    <link rel="shortcut icon" href="//s3.pstatp.com/image/toutiao_mobile/short_cut_icon_1.png" type="image/x-icon">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="《今日头条》(TouTiao.org)是一款会自动学习的资讯软件,它会聪明地分析你的兴趣爱好,自动为你推荐喜欢的内容,并且越用越懂你.你关心的,才是头条!">
    <meta name="keywords" content="头条,头条网,今日头条">
    <meta name="pathname" content="usergrowth_mobile_list">
    <link href="<?=base_url()?>public/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>public/css/dropload.css" rel="stylesheet">
    <meta name="viewport" content="initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no">
    <style type="text/css">
      .head_title {
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 39px;
        color: #fff;
        font-weight: 700;
        line-height: 44px;
        display: inline-block;
      }
    </style>
  </head>

  <body class="None android withHeader article utms-None utmm-None utmc-None list-page" style="font-size: 12px;">
    <div style="display:none">
      <input type="hidden" name="csrfmiddlewaretoken" value="8395708b766a799dc56c9aee64ad84b0"></div>
    <div id="main">
      <div data-reactroot="" id="indexContainer" class="indexContainer withHeader ">
        <header id="indexHeader" class="index--toutiaoribao">
          <div class="top_bar">
            <div class="abs_m">
              <a href="#" class="head_title btn">今日头条</a>
              <!-- <a href="#" class="refresh_btn btn"></a> -->
            </div>
            <!-- <div class="abs_l">
              <a href="javascript:;" class="msg-box"></a>
            </div> -->
            <div class="abs_r">
              <a href="<?=base_url()?>News/search" class="btn search"></a>
            </div>
          </div>
          <div class="top_menu_bar">
            <div id="top_menu" class="top_menu_list">
              <a data-channel="__all__" data-query="channel=__all__" href="javascript:;" class="btn cur">推荐</a>
              <a data-channel="news_hot" data-query="channel=news_hot" href="javascript:;" class="btn">热点</a>
              <a data-channel="news_food" data-query="channel=news_food" href="javascript:;" class="btn">美食</a>
              <a data-channel="news_discovery" data-query="channel=news_discovery" href="javascript:;" class="btn">探索</a></div>
          </div>
        </header>
        <span></span>
        <div>
          <content id="pageletListContent" class="feed-list-container">
            <!-- react-empty: 32 -->
            <div class="list_content" data-pull-fresh="1">
              <div class="lists"></div>

            </div>
            <!-- <div class="list_bottom">
              <section class="loadmoretip">
                <a href="#">加载中...</a></section>
            </div> -->
          </content>
        </div>
        <!-- react-empty: 42 --></div>
    </div>
  </body>
<script src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url()?>public/js/dropload.min.js"></script>
<script>
$(function(){
    // 页数
    var page = 0;
    // 每页展示5个
    var size = 5;

    // dropload
    $('.list_content').dropload({
        scrollArea : window,
        loadDownFn : function(me){
            page++;
            // 拼接HTML
            var result = '';
            $.ajax({
                type: 'GET',
                // url: 'http://ons.me/tools/dropload/json.php?page='+page+'&size='+size,
                url: '<?=base_url()?>/News/putjson?page='+page,
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    var arrLen = data.length;
                    if(arrLen > 0){
                        for(var i=0; i<arrLen; i++){
                            result += '<section class="middle_mode">'
                        +'<a href="article" data-tag="news" class="article_link clearfix ">'
                        +'<div class="item_detail"><h3 class="dotdot line3">高性能战机发动机必不可少的材料，在地壳中的含量仅十亿分之一</h3>'
                        +'<div class="list_image"><ul class="clearfix">'
                        +'<li class="list_img_holder"><img src="https://p3.pstatp.com/list/22d1000352d55e19e664"></li>'
                        +'<li class="list_img_holder"><img src="https://p3.pstatp.com/list/22d5000112ec69e2fc0a"></li>'
                        +'<li class="list_img_holder"><img src="https://p3.pstatp.com/list/22d300015e2fa183fbcd"></li>'
                        +'</ul></div><div class="item_info"><div><span class="src space">苍穹利器</span>'
                        +'<span class="cmt space">评论 494</span><span class="time" title="2017-06-14 10:31">18分钟前</span><span class="dislike-news fr"></span>'
                        +'</div></div></div></a></section>';

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
                /*error: function(xhr, type){
                    alert('Ajax error!');
                    // 即使加载出错，也得重置
                    me.resetload();
                }*/
            });
        }
    });
});
</script>
</html>