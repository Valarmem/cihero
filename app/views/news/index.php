<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.toutiao.com/">
    <title>今日头条</title>
    <meta name="keywords" content="今日头条，头条，头条网，头条新闻，今日头条官网">
    <meta name="description" content="《今日头条》(www.toutiao.com)是一款基于数据挖掘的推荐引擎产品，它为用户推荐有价值的、个性化的信息，提供连接人与信息的新型服务，是国内移动互联网领域成长最快的产品服务之一。">
    <meta name="pathname" content="toutiao_pc_index">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/image/favicon_8e9c9c7.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/layout_5fcc025.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/home_d77fcbf.css">
    <style id="889dfaf">.imga_wrapper{position:relative;display:inline-block;}.imga_flag{display: inline-block;position: absolute;bottom: 8px;left: 8px;border: 1px solid #fff;color: #fff;font-size: 12px;line-height: 12px;height: 12px;padding: 1px 2px;text-align: center;}</style>
    <style id="610bd02">.right-iframe-img {margin-bottom:16px; padding: 20px; background-color: #f4f5f6;} .right-iframe-img a {display: inline-block;} .right-iframe-img .wrap {display: block} .right-iframe-img img {width: 100%} .right-iframe-img h4 {color: #222; font-size: 18px; padding: 12px 0 18px} .right-iframe-img .y-box {font-size: 12px} .right-iframe-img .avatar {border-radius: 50%; padding: 2px; background-color: #2a90d7; color: #fff} .right-iframe-img .source, .right-iframe-img .comment {color: #999} .right-iframe-img .label {color: #2a90d7}</style>
    <style id="1cc7c68">#imagindexhover{margin-top: -10px; padding: 0 20px;} #imagindexhover > ins{position: relative!important}</style>
    <style id="db2fd77">.right-iframe-img{margin-bottom:16px; padding: 20px; background-color: #f4f5f6;}</style>
    <style id="10c35d3">.right-iframe-img{margin-bottom:16px; padding: 20px; background-color: #f4f5f6;}</style></head>
    <style type="text/css">
    .tab-item  a { text-decoration: none; color: #fff; }
    .content-link img { display: block; width: 100%; height: 300px !important; }
    .content-link .title {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 44px;
        line-height: 44px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-left: 22px;
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        background-image: -webkit-linear-gradient(top,transparent 0,rgba(0,0,0,.8) 100%);
        background-image: linear-gradient(-180deg,transparent 0,rgba(0,0,0,.8) 100%);
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    </style>
  <body style="min-width: 1220px; overflow-x: hidden;">
    <div style="display:none">
      <input type="hidden" name="csrfmiddlewaretoken" value="ce5075438a9483f8624d712ec9fc3174"></div>
    <a href="/articles_news_society/" style="display:none;"></a>
    <div class="y-wrap">
      <!-- 公共头部 -->
      <div id="header">
        <div riot-tag="wtopbar" style="height: 34px; background: #222;">
          <div class="y-box wtopbar">
            <ul class="y-left">
              <li class="tb-item">
                <a class="tb-link" href="http://app.toutiao.com/news_article/" target="_blank" ga_event="mh_nav_others">下载APP</a></li>
              <li class="tb-item weather">
                  <div class="cover-iframe-weather" style="margin-left:10px;width:180px;height:20px;float: left;opacity:1;z-index:99;">
                    <iframe width="170" scrolling="no" height="20" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&color=%23FFFFFF&icon=1&wind=1&num=2&site=14" ></iframe>
                    <a class="tb-link" href="javascript:;"></a>
                 </div>
<!-- <iframe width="230" scrolling="no" height="20" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&color=%23FFFFFF&icon=1&wind=1&num=1&site=14"></iframe> -->
                 <!-- <span>&nbsp;上海</span>
                  <span class="city_state">阴</span>
                  <span class="city_temperature">
                    <em>23</em>° &nbsp;/&nbsp;
                    <em>26</em>°</span>
                  <i class="y-icon icon-more"></i>-->
                </a>
                <div class="weather-box">
                  <div riot-tag="weather" class="y-weather" style="overflow:hidden;width: 253px;height:70px;">
                    <div class="w-header" style="margin-left: -150px;height: 73px;">
                  <iframe allowtransparency="true" frameborder="0" width="410" height="64" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=2&z=3&t=1&v=2&d=2&bd=0&k=&f=&q=0&e=1&a=1&c=54511&w=410&h=64&align=right"></iframe>
                   </div>
                </div>
              </li>
            </ul>
            <ul class="y-right">
              <li class="tb-item userbox">
                <div riot-tag="wuserbox" abtype="0" pageid="/">
                  <div class="y-box wuserbox">
                    <div class="nav-login">
                      <a ga_event="nav_login" href="javascript:;">
                        <span>登录</span></a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="tb-item">
                <a class="tb-link" href="javascript:void(0)">反馈</a></li>
              <li class="tb-item">
                <a class="tb-link" href="/complain/" ga_event="mh_nav_complain">投诉侵权</a></li>
              <li class="tb-item more">
                <a class="tb-link" href="/about/">头条产品</a>
                <div class="layer">
                  <ul>
                    <li>
                      <a href="https://wenda.toutiao.com" class="layer-item" ga_event="mh_nav_others" target="_blank">问答</a></li>
                    <li>
                      <a href="https://mp.toutiao.com/" class="layer-item" target="_blank" ga_event="mh_nav_others">头条号</a></li>
                    <li>
                      <a href="https://tuchong.com/" class="layer-item" target="_blank" ga_event="mh_nav_others">图虫</a></li>
                    <li>
                      <a href="https://ad.toutiao.com/promotion/?source2=pchometop" class="layer-item" target="_blank" ga_event="mh_nav_ad">广告投放</a></li>
                  </ul>
                </div>
              </li>
            </ul>
            <div id="J_userFeedback"></div>
          </div>
        </div>
      </div>
      <div riot-tag="login"></div>
      <div id="toast"></div>
      <div class="y-box container">
        <div class="y-left index-channel" style="margin-right: 20px;">
          <div riot-tag="wchannel">
            <div ga_event="left-channel-click" class="wchannel" id="wchannel">
              <a class="logo" href="/">
                <img src="//s3.pstatp.com/toutiao/resource/ntoutiao_web/static/image/logo_201f80d.png" alt=""></a>
              <ul>
                <li onclick="">
                  <a class="wchannel-item active" href="/" target="" ga_event="channel_refreh">
                    <span>推荐</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_hot/" target="" ga_event="">
                    <span>热点</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/video/" target="" ga_event="">
                    <span>视频</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_image/" target="_blank" ga_event="">
                    <span>图片</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/essay_joke/" target="" ga_event="">
                    <span>段子</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_society/" target="" ga_event="">
                    <span>社会</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_entertainment/" target="" ga_event="">
                    <span>娱乐</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_tech/" target="" ga_event="">
                    <span>科技</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_sports/" target="" ga_event="">
                    <span>体育</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_car/" target="" ga_event="">
                    <span>汽车</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/news_finance/" target="" ga_event="">
                    <span>财经</span></a>
                </li>
                <li onclick="">
                  <a class="wchannel-item " href="/ch/funny/" target="" ga_event="">
                    <span>搞笑</span></a>
                </li>
                <!--riot placeholder-->
                <li class="wchannel-more">
                  <a href="javascript:;" class="wchannel-item">
                    <span>更多</span></a>
                  <div class="wchannel-more-layer" style="width: 110px;">
                    <ul>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_military/" target="">
                          <span>军事</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_world/" target="">
                          <span>国际</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_fashion/" target="">
                          <span>时尚</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_travel/" target="">
                          <span>旅游</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_discovery/" target="">
                          <span>探索</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_baby/" target="">
                          <span>育儿</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_regimen/" target="">
                          <span>养生</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_story/" target="">
                          <span>故事</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_essay/" target="">
                          <span>美文</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_game/" target="">
                          <span>游戏</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_history/" target="">
                          <span>历史</span></a>
                      </li>
                      <li>
                        <a class="y-left wchannel-item" href="/ch/news_food/" target="">
                          <span>美食</span></a>
                      </li>
                      <!--riot placeholder--></ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="y-left index-content">
          <div id="J_carousel" riot-tag="carouselBox" style="height: 300px; margin-bottom: 16px;" class="y-box carouselBox">
            <div id="carouselList" style="float: left;" riot-tag="carouselList" class="carouselList">
            <!-- <div id="carouselList" style="float: left;" class="carouselList carousel slide" data-ride="carousel" > -->
              <!-- <ul class="carousel-inner carousel-list" ga_event="focus_list_click"> -->
              <ul class="carousel-list" ga_event="focus_list_click">
                <li style="opacity: 0.9883;" data-slide="0" class="carousel-item carousel-item-active"> <a target="_blank" href="/group/6433623685823906050/">
                  <img alt="" src="http://p3.pstatp.com/large/289a0016449c19954285"> <p class="title">韩国前总统朴槿惠接连受审 面如死灰分外憔悴</p> </a> </li>
                <li style="opacity: 1;" data-slide="1" class="carousel-item "> <a target="_blank" href="/group/6433657291949834497/"> <img alt="" src="http://p3.pstatp.com/large/289a001645a49e903e61">
                   <p class="title">注意卫生！随机买3份小龙2份检出寄生虫</p> </a> </li>
                <li style="opacity: 1;" data-slide="2" class="carousel-item "> <a target="_blank" href="/group/6433793060409458946/"> <img alt="" src="http://p9.pstatp.com/origin/289d0016869eff9fa442">
                   <p class="title">2017首批港姐参赛者新鲜出炉，这颜值你给几分？</p> </a> </li>
                <li style="opacity: 1;" data-slide="3" class="carousel-item"> <a target="_blank" href="/group/6433593066573594881/"> <img alt="" src="http://p9.pstatp.com/large/289a00163289805c2bd9">
                   <p class="title">阿什利·科尔约会被拍 辣妈小鸟依人躲镜头昔日“渣男”牵手保护</p> </a> </li>
                <li style="opacity: 1;" data-slide="4" class="carousel-item "> <a target="_blank" href="/group/6433752706251473154/"> <img alt="" src="http://p3.pstatp.com/large/289a00163fe28aabb87b">
                   <p class="title">白俄罗斯安全部门举办反恐演习 应对潜在机场恐袭</p> </a> </li>
                <li style="opacity: 1;" data-slide="5" class="carousel-item "> <a target="_blank" href="/group/6433796048522576385/"> <img alt="" src="http://p1.pstatp.com/large/249c0013b28292d34484">
                   <p class="title">安吉丽娜·朱莉发表演穿军绿色西装气场十足</p> </a> </li><!--riot placeholder-->
              </ul>
            </div>
            <div id="carouselTab" style="float: right;" riot-tag="carouselTab" class="carouselTab">
              <ul class="tab-list">
                <li class="tab-item tab-item-active" data-slide-to="0" data-target="#carouselList"><a href="javascript:void(0);">要闻</a></li>
                <li class="tab-item " data-slide-to="1" data-target="#carouselList"><a href="javascript:void(0);">社会</a></li>
                <li class="tab-item " data-slide-to="2" data-target="#carouselList"><a href="javascript:void(0);">娱乐</a></li>
                <li class="tab-item " data-slide-to="3" data-target="#carouselList"><a href="javascript:void(0);">体育</a></li>
                <li class="tab-item" data-slide-to="4" data-target="#carouselList"><a href="javascript:void(0);">军事</a></li>
                <li class="tab-item " data-slide-to="5" data-target="#carouselList"><a href="javascript:void(0);">明星</a></li>
                <!--riot placeholder--></ul>
            </div>
          </div>
          <div riot-tag="subchannel" id="subchannel"></div>
          <div riot-tag="feedBox">
            <div class="feedBox" name="feedBox">
              <div riot-tag="wcommonFeed" category="__all__" abtype="0">
                <div class="wcommonFeed">
                  <div riot-tag="msgAlert" mwidth="660" mtop="500" category="__all__">
                    <div name="msgAlertPlace" class="msgAlert-place" style="display: none;">
                    </div>
                    <div class="msgAlert msgAlert-hidden">
                      <div style="background-color: #fff; height: 1px;"></div>
                    </div>
                  </div>
                  <ul>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6433153791545049345">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6433153791545049345/">“三国杀”的共享单车哪家能笑道最后？</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="news_game">游戏</a>
                                <div class="y-left">
                                  <a target="_blank" class="lbtn media-avatar avatar-bg-2" href="/search/?keyword=头条问答" ga_event="article_avatar_click">头</a>
                                  <a class="lbtn source" target="_blank" href="/search/?keyword=头条问答" ga_event="article_name_click">&nbsp;头条问答&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;9分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6433153791545049345/">
                            <img alt="" src="http://p9.pstatp.com/list/190x124/289d0000405b8ea1a289"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6433150882472313089">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6433150882472313089/">不再保留！乌克兰决定把发动机仓库全部搬到中国，开启中乌发动机合作新高潮</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="news_military">军事</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/51905726291/">
                                    <img alt="" src="http://p9.pstatp.com/large/ef3000a23a6bdf6d6c9"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/51905726291/">&nbsp;装备分析&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6433150882472313089//#comment_area">&nbsp;70评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;9分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6433150882472313089/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/288f000298bc509cd666"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6433165908801814785">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6433165908801814785/">5大明星指名道姓拒绝合作，一人直言对方不会演戏，只是个花瓶！</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-entertainment" href="news_entertainment">娱乐</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/53361012712/">
                                    <img alt="" src="http://p1.pstatp.com/large/13550009c37d9e4a25e9"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/53361012712/">&nbsp;金秋的美&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6433165908801814785//#comment_area">&nbsp;评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;9分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6433165908801814785/">
                            <img alt="" src="http://p1.pstatp.com/list/190x124/28900001fdea2a3d3d83"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item  J_add  " ga_event="ad_item_click" ad_id="61932730055" qihu_ad_id="" ad_track="" group_id="6431069139195920642" ad_show="0">
                      <span id="ad_extra" style="display:none;">{"rit": 1, "convert_id": 0, "req_id": "20170619112402172017021002259B71", "ad_price": "WUdCpAAKqu9ZR0KkAAqq73hcpHlCo5shQ6M7uQ"}</span>
                      <div class="item-inner y-box">
                        <div class="normal  ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="ad_title_click">
                              <a class="link title" target="_blank" href="http://prom.gome.com.cn/html/prodhtml/topics/201705/18/1220722977.html?cmpid=ad_toutiao_dqc_pc_3c_20170614_01">6GB+128GB 荣耀 V9 4G手机，国美618现货发售！</a></div>
                            <div class="img-list y-box" ga_event="ad_img_click">
                              <a class="img-wrap" target="_blank" href="http://prom.gome.com.cn/html/prodhtml/topics/201705/18/1220722977.html?cmpid=ad_toutiao_dqc_pc_3c_20170614_01">
                                <img alt="" src="http://p3.pstatp.com/list/190x124/2878000c80bc52174ffb"></a>
                              <a class="img-wrap" target="_blank" href="http://prom.gome.com.cn/html/prodhtml/topics/201705/18/1220722977.html?cmpid=ad_toutiao_dqc_pc_3c_20170614_01">
                                <img alt="" src="http://p1.pstatp.com/list/190x124/2703000a953eeab2abb2"></a>
                              <a class="img-wrap" target="_blank" href="http://prom.gome.com.cn/html/prodhtml/topics/201705/18/1220722977.html?cmpid=ad_toutiao_dqc_pc_3c_20170614_01">
                                <img alt="" src="http://p3.pstatp.com/list/190x124/2702000a9a5da400d016"></a>
                              <!--riot placeholder-->
                              <a class="img-wrap" target="_blank" href="http://prom.gome.com.cn/html/prodhtml/topics/201705/18/1220722977.html?cmpid=ad_toutiao_dqc_pc_3c_20170614_01">
                                <span class="add-info">查看详情&nbsp;
                                  <i class="y-icon icon-next-page"></i></span>
                              </a>
                            </div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <div class="y-left">
                                  <a target="_blank" class="lbtn media-avatar avatar-bg-3" href="/search/?keyword=国美Plus" ga_event="ad_avatar_click">国</a>
                                  <a class="lbtn source" target="_blank" href="/search/?keyword=国美Plus" ga_event="ad_name_click">&nbsp;国美Plus&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;9分钟前</span>
                                <span class="lbtn recommend">广告</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6427072413969137922">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6427072413969137922/">这张全家福毁了这模特女主一生，被骂骗婚，从此走上状告医院之路</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-entertainment" href="news_entertainment">娱乐</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/6889785281/">
                                    <img alt="" src="http://p2.pstatp.com/large/16ab000ae1b38fd2414d"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/6889785281/">&nbsp;影视热&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6427072413969137922//#comment_area">&nbsp;238评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;10分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6427072413969137922/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/242c00038d1db51d1850"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6433146810181878018">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6433146810181878018/">59岁冯巩全家近照，和妻子结婚33年，有才儿子像极了老爸</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-entertainment" href="news_entertainment">娱乐</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/6420910605/">
                                    <img alt="" src="http://p3.pstatp.com/large/1a6b00084a9e05adc32f"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/6420910605/">&nbsp;天天刷八卦&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6433146810181878018//#comment_area">&nbsp;23评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;11分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6433146810181878018/">
                            <img alt="" src="http://p1.pstatp.com/list/190x124/28930000c2aa59a3f218"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6433032841035006210">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6433032841035006210/">敢开毛主席玩笑的，开国十大将中只有他一人</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="news_history">历史</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/6012396823/">
                                    <img alt="" src="http://p3.pstatp.com/large/2b6000acc8f64aa36fb"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/6012396823/">&nbsp;江州司马&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6433032841035006210//#comment_area">&nbsp;评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;11分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6433032841035006210/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/28b1000412440318dfd8"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6432966096499917058">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6432966096499917058/">本来是再正常不过的剧，却被弹幕一下子毁了</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-entertainment" href="news_entertainment">娱乐</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/6664814465/">
                                    <img alt="" src="http://p3.pstatp.com/large/411001f672ec7cd6652"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/6664814465/">&nbsp;八卦愚&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6432966096499917058//#comment_area">&nbsp;316评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;12分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6432966096499917058/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/289a0006658f2af8e6d5"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6432380392121073921">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6432380392121073921/">这是我见过最一本正经的胡说八道</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="funny">搞笑</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/52238464170/">
                                    <img alt="" src="http://p7.pstatp.com/large/1bf300039227c9a6acf6"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/52238464170/">&nbsp;大波搞笑&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6432380392121073921//#comment_area">&nbsp;224评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;12分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6432380392121073921/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/289c0004b79d48e38e0d"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6432875350006432257">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6432875350006432257/">“山西王”阎锡山一生最怕这个人，见了此人两腿发软，跪地磕头</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="news_history">历史</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/53235689426/">
                                    <img alt="" src="http://p3.pstatp.com/large/150c00107e3435fa2924"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/53235689426/">&nbsp;煮酒温史&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6432875350006432257//#comment_area">&nbsp;90评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;13分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6432875350006432257/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/288f0001619189a208bd"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6431359446266855682">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6431359446266855682/">笑话GIF：我是不是被骗了，总感觉哪里不对</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="funny">搞笑</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/60262020642/">
                                    <img alt="" src="http://p3.pstatp.com/large/216d00239cf7e0bc08d5"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/60262020642/">&nbsp;笑话GIF&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6431359446266855682//#comment_area">&nbsp;535评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;13分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6431359446266855682/">
                            <img alt="" src="http://p1.pstatp.com/list/190x124/216f0023bb318b386596"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6433143675232583938">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6433143675232583938/">【深度】被封锁两周后 卡塔尔的情况怎么样了？</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="news_world">国际</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/52857496566/">
                                    <img alt="" src="http://p3.pstatp.com/large/1233000741099c9f4a59"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/52857496566/">&nbsp;界面新闻&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6433143675232583938//#comment_area">&nbsp;20评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;14分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6433143675232583938/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/28b100053099e4a6046c"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6432959332274700546">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6432959332274700546/">郭德纲谈师徒：「真实的情况远比你们所了解的要血淋淋得多」</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-entertainment" href="news_entertainment">娱乐</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/2778575011/">
                                    <img alt="" src="http://p2.pstatp.com/thumb/484/8101268539"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/2778575011/">&nbsp;人物&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6432959332274700546//#comment_area">&nbsp;36评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;15分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6432959332274700546/">
                            <img alt="" src="http://p9.pstatp.com/list/190x124/288f000224fc4c927039"></a>
                        </div>
                      </div>
                    </li>
                    <li class="item    " ga_event="article_item_click" ad_id="" qihu_ad_id="" ad_track="" group_id="6432977996608438786">
                      <span id="ad_extra" style="display:none;"></span>
                      <div class="item-inner y-box">
                        <div class="normal rbox ">
                          <div class="rbox-inner">
                            <div class="title-box" ga_event="article_title_click">
                              <a class="link title" target="_blank" href="/group/6432977996608438786/">慢点·观察 I 新加坡“惊变”：李显龙要扶儿子上位？</a></div>
                            <div class="y-box footer">
                              <div class="y-left">
                                <a target="_blank" ga_event="article_tag_click" class="lbtn tag tag-bg-other" href="news_world">国际</a>
                                <div class="y-left">
                                  <a class="lbtn media-avatar" target="_blank" ga_event="article_avatar_click" href="/c/user/50051273519/">
                                    <img alt="" src="http://p3.pstatp.com/large/bc2000116bd81d2cf3d"></a>
                                  <a class="lbtn source" target="_blank" ga_event="article_name_click" href="/c/user/50051273519/">&nbsp;深圳卫视关键洞察力&nbsp;⋅</a>
                                  <a class="lbtn comment" target="_blank" ga_event="article_comment_click" href="/group/6432977996608438786//#comment_area">&nbsp;189评论&nbsp;⋅</a></div>
                                <span class="lbtn">&nbsp;58分钟前</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="lbox" ga_event="article_img_click">
                          <a class="img-wrap" target="_blank" href="/group/6432977996608438786/">
                            <img alt="" src="http://p3.pstatp.com/list/190x124/288f00023d33e72d4f29"></a>
                        </div>
                      </div>
                    <!--riot placeholder--></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="y-right index-modules">
          <div id="module-place"></div>
          <div class="module-inner" id="module-inner">
            <div riot-tag="wsearch" style="margin-bottom: 16px;">
              <div name="searchBox" class="wsearch">
                <form name="searchForm" action="/search/" method="get" target="_blank">
                  <div name="inputbox" class="y-box input-group">
                    <input class="y-left input-text" name="keyword" autocomplete="off" ga_event="mh_search" type="text" placeholder="请输入关键字">
                    <div class="y-right btn-submit">
                      <button type="submit" href="javascript:;">
                        <i class="y-icon icon-search" ga_event="mh_search"></i>
                      </button>
                    </div>
                  </div>
                </form>
                <div class="layer ">
                  <ul ga_event="mh_search">
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-1">1</i>
                        <span class="search-txt">赤裸女子高速自尽</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-2">2</i>
                        <span class="search-txt">被蛇咬死前咬妻子</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-3">3</i>
                        <span class="search-txt">相声家唐杰忠病逝</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-4">4</i>
                        <span class="search-txt">伦敦货车冲撞行人</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-5">5</i>
                        <span class="search-txt">药店售卖穿山甲片</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-6">6</i>
                        <span class="search-txt">大学生改成绩被骗</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-7">7</i>
                        <span class="search-txt">小伙直呼不敢娶</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-8">8</i>
                        <span class="search-txt">比特币暴跌</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-9">9</i>
                        <span class="search-txt">性感热舞激怒高层</span></a>
                    </li>
                    <li class="search-item">
                      <a href="javascript:;">
                        <i class="search-no search-no-10">10</i>
                        <span class="search-txt">青海首次发现雪豹</span></a>
                    </li>
                    <!--riot placeholder--></ul>
                </div>
              </div>
            </div>
            <a class="ext-banner" href="https://ext.se.360.cn/webstore/detail/afepefboigddnojlhkpjhhlmgbnnfooe" target="_blank">
              <img src="//s3.pstatp.com/site/tt_mfsroot/pc_img/webkit_banner.png" alt=""></a>
            <a href="http://jubao.12377.cn:13225/reportinputcommon.do" class="y-box report" target="_blank">
              <div class="y-left img-holder">
                <img src="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/image/other/report_logo_15cc24e.png" alt=""></div>
              <div class="y-left info">
                <p class="title">网上有害信息举报专区</p>
                <p class="tel">举报电话：12377</p></div>
            </a>
            <div class="right-top-1 right-iframe-img right-img" name="home_right*top_1_zy" ad-cursor="1" ad_name="h_300*250_zy_4" done="1" show="">
              <div class="pic-wrap">
                <a class="wrap" aid="61911561136" href="http://happydino.tmall.com/campaign-3757-26.htm" target="_blank">
                  <img src="//p1.pstatp.com/origin/286d00108b632ace312f" alt=""></a>
                <a class="wrap" href="http://happydino.tmall.com/campaign-3757-26.htm" target="_blank">
                  <h4>给宝宝挑挑挑挑挑挑挑挑挑什么婴儿车，hd让618简单点</h4></a>
                <div class="y-box">
                  <a href="http://happydino.tmall.com/campaign-3757-26.htm" target="_blank" class="source">小龙哈彼</a>
                  <a href="http://happydino.tmall.com/campaign-3757-26.htm" target="_blank" class="label">&nbsp;&nbsp;广告</a></div>
              </div>
            </div>
            <div style="height: 366px; overflow:hidden;">
              <div id="m-hotNews">
                <div riot-tag="hotNews" class="hotNews module" ga_event="click_hot_news">
                  <div class="module-head news-head">24小时热闻</div>
                  <ul class="news-content">
                    <li class="news-list">
                      <a target="_blank" class="news-link" href="/group/6433013692384084225/">
                        <div class="module-pic news-pic">
                          <img src="http://p3.pstatp.com/list/240x240/249c00074395aade26d5"></div>
                        <div class="news-inner">
                          <p class="module-title">本周五国内油价有望迎“两连跌”</p></div>
                      </a>
                    </li>
                    <li class="news-list">
                      <a target="_blank" class="news-link" href="/group/6433007876714266881/">
                        <div class="module-pic news-pic">
                          <img src="http://p3.pstatp.com/list/240x240/28aa0002429befe50102"></div>
                        <div class="news-inner">
                          <p class="module-title">美国希望日本做什么？日刊：军费大幅增长 掺和南海</p></div>
                      </a>
                    </li>
                    <li class="news-list">
                      <a target="_blank" class="news-link" href="/group/6432984868775297282/">
                        <div class="module-pic news-pic">
                          <img src="http://p3.pstatp.com/list/240x240/288f0002538a3d81bb33"></div>
                        <div class="news-inner">
                          <p class="module-title">中央领导怎么当父亲？</p></div>
                      </a>
                    </li>
                    <li class="news-list">
                      <a target="_blank" class="news-link" href="/group/6433081726364598530/">
                        <div class="module-pic news-pic">
                          <img src="http://p1.pstatp.com/list/240x240/289e0009baa38625efeb"></div>
                        <div class="news-inner">
                          <p class="module-title">朝鲜外交文件机场遭美抢劫 朝强烈谴责称美国是“流氓”</p></div>
                      </a>
                    </li>
                    <!--riot placeholder--></ul>
                </div>
              </div>
            </div>
            <div riot-tag="adTab"></div>
            <div riot-tag="whotvideo" class="whotvideo module" ga_event="click_video_recommend">
              <div class="module-head video-head">
                <a href="/video/" target="_blank">热门视频</a></div>
              <ul class="video-list">
                <li class="video-item">
                  <a target="_blank" href="/group/6386076365066780930/">
                    <dl>
                      <dt class="module-pic">
                        <img alt="" src="http://p3.pstatp.com/list/300x170/16820002e3c7b2362b62">
                        <i class="hot-tag video-tag">
                          <span>01:29</span></i>
                      </dt>
                      <dd>
                        <div class="cell">
                          <h4>国外鱼友网购七彩神仙鱼开箱验货</h4>
                          <p>
                            <span>91.9万次播放&nbsp;</span>
                            <span>⋅&nbsp;3582评论</span></p>
                        </div>
                      </dd>
                    </dl>
                  </a>
                </li>
                <li class="video-item">
                  <a target="_blank" href="/group/6432515357941154050/">
                    <dl>
                      <dt class="module-pic">
                        <img alt="" src="http://p9.pstatp.com/list/300x170/26f30003b822060d06c5">
                        <i class="hot-tag video-tag">
                          <span>03:33</span></i>
                      </dt>
                      <dd>
                        <div class="cell">
                          <h4>特种安保人员死在公园里的防弹车，警察搜查住所地下室发现一整屋的武器</h4>
                          <p>
                            <span>105.7万次播放&nbsp;</span>
                            <span>⋅&nbsp;590评论</span></p>
                        </div>
                      </dd>
                    </dl>
                  </a>
                </li>
                <li class="video-item">
                  <a target="_blank" href="/group/6371914567785660930/">
                    <dl>
                      <dt class="module-pic">
                        <img alt="" src="http://p1.pstatp.com/list/300x170/149c00026fc24f0689e2">
                        <i class="hot-tag video-tag">
                          <span>04:59</span></i>
                      </dt>
                      <dd>
                        <div class="cell">
                          <h4>听荷兰当地华人讲，花多少钱买套房子，就可以移民荷兰</h4>
                          <p>
                            <span>56.9万次播放&nbsp;</span>
                            <span>⋅&nbsp;5577评论</span></p>
                        </div>
                      </dd>
                    </dl>
                  </a>
                </li>
                <!--riot placeholder--></ul>
            </div>
            <div riot-tag="whotpicture" class="whotpicture module" ga_event="click_pictures_recommend">
              <div class="module-head picture-head">
                <a href="/news_image/" target="_blank">精彩图片</a></div>
              <ul class="y-box picture-list">
                <li class="y-left picture-item">
                  <a target="_blank" href="/group/6432889341613179138/">
                    <div class="module-pic picture-img">
                      <img alt="" src="http://p3.pstatp.com/list/300x170/289c00085970be018420">
                      <i class="hot-tag">
                        <span>16图</span></i>
                    </div>
                    <p>美女明星们的出水芙蓉照，谁才是你心中的沙滩女神呢？</p>
                  </a>
                </li>
                <li class="y-left picture-item">
                  <a target="_blank" href="/group/6433023292159820289/">
                    <div class="module-pic picture-img">
                      <img alt="" src="http://p3.pstatp.com/list/300x170/288f00027e03613d020a">
                      <i class="hot-tag">
                        <span>8图</span></i>
                    </div>
                    <p>相声艺术家唐杰忠逝世 一生信奉四个字</p>
                  </a>
                </li>
                <li class="y-left picture-item">
                  <a target="_blank" href="/group/6432990525990093057/">
                    <div class="module-pic picture-img">
                      <img alt="" src="http://p3.pstatp.com/list/300x170/288a0003a78531b09706">
                      <i class="hot-tag">
                        <span>10图</span></i>
                    </div>
                    <p>连体婴姐妹被医生断言只能活3天，如今已过16年即将上大学</p>
                  </a>
                </li>
                <li class="y-left picture-item">
                  <a target="_blank" href="/group/6433003314183274753/">
                    <div class="module-pic picture-img">
                      <img alt="" src="http://p1.pstatp.com/list/300x170/288e00015b6c9905543d">
                      <i class="hot-tag">
                        <span>8图</span></i>
                    </div>
                    <p>全球各国元首的空军一号，我们的国航六号其实是客串</p>
                  </a>
                </li>
                <!--riot placeholder--></ul>
            </div>
            <div class="more-items module" ga_event="click_friend_link">
              <div class="module-head more-items-head">更多</div>
              <div class="more-items-content">
                <ul>
                  <li class="item">
                    <a href="/about/" rel="nofollow">关于头条</a></li>
                  <li class="item">
                    <a href="/join/" rel="nofollow">加入头条</a></li>
                  <li class="item">
                    <a href="/report/" rel="nofollow">媒体报道</a></li>
                  <li class="item">
                    <a href="/media_partners/" rel="nofollow">媒体合作</a></li>
                  <li class="item">
                    <a href="/cooperation/" rel="nofollow">产品合作</a></li>
                  <li class="item">
                    <a href="/media_cooperation/" rel="nofollow">合作说明</a></li>
                  <li class="item">
                    <a href="https://ad.toutiao.com/promotion/?source2=pchomemore" target="_blank" rel="nofollow">广告投放</a></li>
                  <li class="item">
                    <a href="/contact/" rel="nofollow">联系我们</a></li>
                  <li class="item">
                    <a href="/user_agreement/" rel="nofollow">用户协议</a></li>
                  <li class="item">
                    <a href="/complain/" rel="nofollow">侵权投诉</a></li>
                  <li class="item">
                    <a href="/corrupt_report/" rel="nofollow">廉洁举报</a></li>
                </ul>
              </div>
            </div>
            <div class="friendLink module" ga_event="click_friend_link">
              <div class="module-head link-head">友情链接</div>
              <div class="link-content" id="friendLink">
                <ul>
                  <li class="item">
                    <a target="_blank" href="http://www.gmw.cn/">光明网</a></li>
                  <li class="item">
                    <a target="_blank" href="http://www.cnr.cn/">央广网</a></li>
                  <li class="item">
                    <a target="_blank" href="http://www.cri.cn">国际在线</a></li>
                  <li class="item">
                    <a target="_blank" href="http://www.tibet.cn/">中国西藏网</a></li>
                  <li class="item">
                    <a target="_blank" href="http://www.cankaoxiaoxi.com/">参考消息</a></li>
                </ul>
              </div>
            </div>
            <div class="company">
              <p class="J-company-name">© 2017 今日头条</p>
              <a href="http://www.12377.cn/" target="_blank" ga_event="click_about">中国互联网举报中心</a>
              <a href="http://www.miibeian.gov.cn/" target="_blank" ga_event="click_about">京ICP证140141号</a>
              <div class="">
                <a href="http://www.miibeian.gov.cn/" target="_blank" ga_event="click_about">京ICP备12025439号-3</a>
                <a href="/license/" class="icp" target="_blank">网络文化经营许可证</a></div>
              <p>京-非经营性-2016-0081</p>
              <p>互联网药品信息服务资格证书</p>
              <a href="/a3642705768/" target="_blank">跟帖评论自律管理承诺书</a>
              <span>违法和不良信息举报：010-58341833</span>
              <span>公司名称：北京字节跳动科技有限公司</span>
              <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11000002002023" target="_blank" ga_event="click_about">
                <img src="//s3.pstatp.com/toutiao/resource/ntoutiao_web/static/image/gongan_d0289dc.png">京公网安备 11000002002023号</a></div>
          </div>
        </div>
      </div>
      <div class="action-feedback">
        <div riot-tag="feedback" class="feedback">
          <ul>
            <li class="tool-item" title="刷新" ga_event="click_feed_newsrefresh">
              <a href="javascript:window.location.reload();">
                <i class="y-icon icon-refreshfeed"></i>
              </a>
            </li>
            <li class="tool-item go-top">
              <a href="javascript:;">
              <!-- <a href="javascript:scrollTo(0,0);"> -->
                <i class="y-icon icon-backtotopfeed"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div riot-tag="articleLayerBox"></div>
      <div riot-tag="promotion-ext" id="promotion-ext"></div>
    </div>
<script type="text/javascript" src="<?=base_url()?>public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(function() {
        var head_height = $('#header').height();
        $.event.add(window, "scroll", function() {
            var p = $(window).scrollTop();
            if (p>head_height) {
              $('#wchannel').addClass("wchannel-fixed");
            }else{
              $('#wchannel').removeClass("wchannel-fixed");
            }
        });
    });
  </script>
  <script type="text/javascript">
    // 轮播图
    $(document).ready( function() {
      $('#carouselList').carousel({
        interval:   5000
    });

    var clickEvent = false;
    $('.tab-list').on('mouseenter','li',function(e){
      clickEvent = true;
      // $('#carouselList').carousel('pause');
      id = $(this).data('slide-to');
      $('ul.carousel-list li').removeClass('carousel-item-active');
      $('.tab-list li').removeClass('tab-item-active');
      $(this).addClass('tab-item-active');
      $('ul.carousel-list').find('[data-slide=' + id +']').addClass('carousel-item-active');
    })

    $('#carouselList').on('slide.bs.carousel', function() {
      if(!clickEvent) {
        var count = $('.tab-list').children().length -1;
        var current_slide = $('.carousel-item.carousel-item-active');
        var current = $('.tab-list li.tab-item-active');

        current_slide.removeClass('carousel-item-active').next().addClass('carousel-item-active');
        current.removeClass('tab-item-active').next().addClass('tab-item-active');
        var id = parseInt(current.data('slide-to'));
        // console.log(id,current_slide.data('slide'));
        if(count == id) {
          $('.carousel-list li').first().addClass('carousel-item-active');
          $('.tab-list li').first().addClass('tab-item-active');
        }
      }
      clickEvent = false;
    });
  });
  function carouselStart() {
    console.log(123);
    // $('#carouselList').carousel('start');
  }
  </script>
  <script type="text/javascript">
    window.onload = function() {
      var btn = document.getElementsByClassName('go-top')[0];
      var winH = document.documentElement.clientHeight;
      var timer = null;
      var isTop = true;

      window.onscroll = function() {
        var toTop = document.body.scrollTop||document.documentElement.scrollTop;
        if (toTop>=winH) {
          btn.style.display = 'block';
        }else {
          btn.style.display = 'none';
        }
        if (!isTop) {
          clearInterval(timer);
        }
        isTop = false;
      }

      btn.onclick = function() {
        timer = setInterval(function(){
          var toTop = document.body.scrollTop || document.documentElement.scrollTop;
          var speed = Math.ceil(toTop/5);
          document.documentElement.scrollTop = document.body.scrollTop = toTop-speed;
          isTop = true;
          if (toTop == 0) {
            clearInterval(timer);
          }
        },50);
      }

    }
  </script>
  </body>
</html>
