<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
    <title>《今日头条》你关心的,才是头条! - www.toutiao.com</title>
    <meta name="keywords" content="今日头条，头条，头条网，头条新闻，今日头条官网">
    <meta name="description" content="《今日头条》(www.toutiao.com)是一款基于数据挖掘的推荐引擎产品，它为用户推荐有价值的、个性化的信息，提供连接人与信息的新型服务，是国内移动互联网领域成长最快的产品服务之一。">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/image/favicon_8e9c9c7.ico" type="image/x-icon">
    <link rel="stylesheet" href="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/style/lib/layout_5fcc025.css">
    <!--[if lt IE 9]>
      <script src="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/js/lib/es5-shim_110642e.js"></script>
    <![endif]-->
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="//s3.pstatp.com/toutiao/resource/ntoutiao_web/static/js/common/lib_060bfbf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//s3b.pstatp.com/toutiao/resource/ntoutiao_web/page/loginCtr/login/login_40bd3f7.css"></head>

  <body style="min-width: 1220px; overflow-x: hidden;">
    <a href="/articles_news_society/" style="display:none;"></a>
    <div class="y-wrap">
      <div class="content">
        <a class="logo-wrap" href="http://www.toutiao.com/">
          <img src="//s3.pstatp.com/toutiao/resource/ntoutiao_web/static/image/logo_201f80d.png" alt=""></a>
        <div class="slogan-wrap">
          <img src="//s3a.pstatp.com/toutiao/resource/ntoutiao_web/static/image/login/slogan_9a3eba0.png" alt=""></div>
        <div riot-tag="loginBox" class="loginBox" style="top:184px;">
          <div class="login-avator" style="position: relative; text-align: center; font-size: 35px; color: #f27a66; font-weight: 700; line-height: 44px;margin:30px;">
            注册
          </div>
          <div class="login-type">
              <div class="baseLogin">
                <form action="<?=site_url('User/storeUser')?>" method="POST">
                  <div class="input-field">
                    <input id="username" type="text" name="username" autocomplete="off" spellcheck="false" placeholder="用户名"></div>
                  <div class="input-field">
                    <input id="email" type="email" name="email" autocomplete="off" spellcheck="false" placeholder="邮箱"></div>
                  <div class="input-field">
                    <input id="mobile" type="text" name="mobile" autocomplete="off" spellcheck="false" placeholder="手机"></div>
                  <div class="input-field">
                    <input id="password" type="password" name="password" autocomplete="off" spellcheck="false" placeholder="密码"></div>
                  <div class="input-field">
                    <input id="password_again" type="password" name="password_again" autocomplete="off" spellcheck="false" placeholder="确认密码"></div>
                  <div class="y-box action">
                    <input id="agreement" class="agreement" type="checkbox" name="agreement" checked="checked">
                    <label for="agreement">我已阅读并同意
                      <a href="http://www.toutiao.com/user_agreement/" target="_blank">用户协议和隐私条款</a></label>
                  </div>
                  <input type="submit" name="submitBtn" class="action-btn" value="提交注册"></form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div riot-tag="promotion-ext" id="promotion-ext"></div>
    </div>
  </body>
</html>
