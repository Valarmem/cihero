<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
  <link rel="apple-touch-icon-precomposed" href="//s2.pstatp.com/image/toutiao_mobile/icon_180_1.png" />
  <link rel="shortcut icon" href="//s2.pstatp.com/image/toutiao_mobile/short_cut_icon_1.png" type="image/x-icon" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="description" content="《今日头条》(TouTiao.com)是一款会自动学习的资讯软件,它会聪明地分析你的兴趣爱好,自动为你推荐喜欢的内容,并且越用越懂你.你关心的,才是头条!" />
  <meta name="keywords" content="头条,头条网,今日头条" />
  <meta name="pathname" />
  <title>《今日头条》你关心的,才是头条! - TouTiao.com</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/wap.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/search.css" />
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
  <form action="/search/" method="get" id="search_form">
   <div id="search_content">
    <a href="#" class="action_chooser action_toutiao" ></a>
    <input type="search" placeholder="请输入搜索关键词" id="search_input" name="keyword" value="" onchange="changeFrom(this)" />
    <input type="hidden" name="from" id="from" value="search_tab" />
   </div>
  </form>
  <content id="search">
   <div class="hot_words">
    <ul class="toutiao" style="display: block; transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
     <li><a class="hot_words_link" href="<?=base_url()?>/News/search_result">FBI介入失踪案</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E7%BE%8E%E8%81%94%E5%82%A8%E4%B8%8A%E8%B0%83%E5%88%A9%E7%8E%87&amp;hot_words=1">美联储上调利率</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E4%B8%87%E7%A7%91%E5%90%A6%E8%AE%A4%E9%99%8D%E8%96%AA&amp;hot_words=1">万科否认降薪</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E4%B9%8C%E5%B9%B2%E8%BE%BE%E5%90%91%E4%B8%AD%E5%9B%BD%E9%81%93%E6%AD%89&amp;hot_words=1">乌干达向中国道歉</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E7%BD%91%E8%B4%AD%E7%AA%81%E9%81%AD%E5%AE%A2%E6%9C%8D%E7%8B%82%E9%AA%82&amp;hot_words=1">网购突遭客服狂骂</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E7%83%AD%E5%B7%B4%E6%AF%95%E4%B8%9A%E7%85%A7%E6%9B%9D%E5%85%89&amp;hot_words=1">热巴毕业照曝光</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E7%BE%8E%E5%9B%BD%E5%BF%AB%E9%80%92%E5%85%AC%E5%8F%B8%E6%9E%AA%E5%87%BB&amp;hot_words=1">美国快递公司枪击</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E7%A9%BA%E5%A7%90%E6%8C%BA%E5%A4%A7%E8%82%9A%E6%AF%95%E4%B8%9A%E7%85%A7&amp;hot_words=1">空姐挺大肚毕业照</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E5%91%A8%E8%BF%85%E8%A2%AB%E6%9B%9D%E7%A6%BB%E5%A9%9A&amp;hot_words=1">周迅被曝离婚</a></li>
     <li><a class="hot_words_link" href="https://m.toutiao.com/search/?from=hotword&amp;keyword=%E7%94%B5%E6%89%87%E5%90%B9%E8%84%B8%E4%B8%80%E5%A4%9C%E9%9D%A2%E7%98%AB&amp;hot_words=1">电扇吹脸一夜面瘫</a></li>
    </ul>
   </div>
   <div class="list_content"></div>
   <div class="list_bottom">
    <section class="loadmoretip">
     <a href="#"></a>
    </section>
   </div>
  </content>
 </body>
</html>