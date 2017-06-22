<!doctype html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
  <link rel="apple-touch-icon-precomposed" href="//s2.pstatp.com/image/toutiao_mobile/icon_180_1.png" />
  <link rel="shortcut icon" href="//s2.pstatp.com/image/toutiao_mobile/short_cut_icon_1.png" type="image/x-icon" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="description" content="《今日头条》(TouTiao.com)是一款会自动学习的资讯软件,它会聪明地分析你的兴趣爱好,自动为你推荐喜欢的内容,并且越用越懂你.你关心的,才是头条!" />
  <meta name="keywords" content="头条,头条网,今日头条" />
  <meta name="robots" content="noindex,follow" />
  <title>《今日头条》你关心的,才是头条! - TouTiao.com</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/wap.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/search.css" />
  <style type="text/css">
   .dropload-down {
    background-color: #fff;
    font-size: 14px;
    color: #999;
    text-align: center;
  }
  </style>
 </head>
 <body class="android">
  <div class="backdrop" ontouchstart="chooseAction(); return false" ontouchmove="return false"></div>
  <header id="header" class="relative">
   <div class="top_bar">
    <div class="abs_l">
     <a class="btn back" href="javascript:history.go(-1);"></a>
    </div>
    <div class="abs_m">
     搜索
    </div>
   </div>
  </header>
  <form action="/search/" method="get" id="search_form" onsubmit="sendSearchEvent(this)">
   <div id="search_content">
    <a href="#" class="action_chooser action_toutiao" onclick="chooseAction(); return false"></a>
    <input type="search" placeholder="请输入搜索关键词" id="search_input" name="keyword" value="空姐挺大肚毕业照" onchange="changeFrom(this)" />
    <input type="hidden" name="from" id="from" value="hotword" />
   </div>
  </form>
  <content id="search">
   <div class="list_content">
    <div class="lists"></div>
    <section class="">
     <a href="<?=base_url()?>News/article" class="article_link clearfix" onclick="actionLog('click_search','6431010197615771906', null, {item_id:'6431146267044217345'})"><h3 class="line3">
       <highlight>
        空姐
       </highlight>准妈妈挺
       <highlight>
        大肚
       </highlight>拍
       <highlight>
        毕业照
       </highlight>走红</h3>
      <div class="list_image">
       <ul class="clearfix">
        <li>
         <div class="list_img_holder" style="background: none;">
          <img src="http://p1.pstatp.com/list/26ec00001036307f6e7e" />
         </div></li>
        <li>
         <div class="list_img_holder" style="background: none;">
          <img src="http://p1.pstatp.com/list/26f1000335367b79cfd9" />
         </div></li>
        <li>
         <div class="list_img_holder" style="background: none;">
          <img src="http://p3.pstatp.com/list/26f10003353e5b8944a2" />
         </div></li>
       </ul>
      </div>
      <div class="item_info">
       <span class="src  space">微言薄谈</span>
       <span>评论35</span>
       <span class="time fr" title="2017-06-13 23:32">1天前</span>
      </div></a>
     <div class="line"></div>
    </section>
    <section class="middle_mode">
     <a href="/group/6431708236760105217/" class="article_link clearfix" onclick="actionLog('click_search','6431708236760105217', null, {item_id:'6431710023688126978'})">
      <div class="list_img_holder" style="background: none;">
       <img src="http://p3.pstatp.com/list/26f20003bb2d8e557d0c" />
      </div>
      <div class="vertical-middle text-wrap">
       <h3 class="line3">
        <highlight>
         空姐
        </highlight>准妈妈挺
        <highlight>
         大肚
        </highlight>拍
        <highlight>
         毕业照
        </highlight>？网友的评论亮了！</h3>
       <div class="item_info">
        <span class="src  space">流行娱乐先锋</span>
        <span>评论350</span>
        <span class="time fr" title="2017-06-15 11:59">1小时前</span>
       </div>
      </div></a>
     <div class="line"></div>
    </section>
    <!-- <section class="middle_mode">
     <a href="/group/6431448997151473922/" class="article_link clearfix" onclick="actionLog('click_search','6431448997151473922', null, {item_id:'6431451792172646913'})">
      <div class="list_img_holder" style="background: none;">
       <img src="http://p3.pstatp.com/list/27da0008d3aa34ae2469" />
       <span class="video_btn"></span>
      </div>
      <div class="vertical-middle text-wrap">
       <h3 class="line3">
        <highlight>
         空姐挺大肚毕业照
        </highlight> “孕”味十足的毕业照你见过吗？</h3>
       <div class="item_info">
        <span class="video_label space">视频</span>
        <span class="src  space">铁军小子视界</span>
        <span>评论34</span>
        <span class="time fr" title="2017-06-14 19:18">18小时前</span>
       </div>
      </div></a>
     <div class="line"></div>
    </section> -->
   </div>
  </content>
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
                            result += '<section class="middle_mode"><a href="/group/6431708236760105217/" class="article_link clearfix" onclick="actionLog(\'click_search\',\'6431708236760105217\', null, {item_id:\'6431710023688126978\'})"><div class="list_img_holder" style="background: none;"><img src="http://p3.pstatp.com/list/26f20003bb2d8e557d0c" /></div><div class="vertical-middle text-wrap"><h3 class="line3"><highlight>空姐</highlight>准妈妈挺      <highlight>大肚</highlight>拍<highlight>毕业照</highlight>？网友的评论亮了！</h3><div class="item_info"><span class="src  space">流行娱乐先锋</span><span>评论350</span><span class="time fr" title="2017-06-15 11:59">1小时前</span></div></div></a><div class="line"></div></section>';

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
                    },800);
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
 </body>
</html>