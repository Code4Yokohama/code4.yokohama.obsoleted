<!DOCTYPE html>
<html>
<head lang="ja">
    <meta charset="UTF-8">
    <meta name="description" content="Code for YOKOHAMAでは仲間とともに技術を磨き、学んだスキルを地域の課題解決に役立てていく活動です。"/>
    <meta name="keywords" content="オープンソース,オープンデータ"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <link type="image/png" rel="icon" href="c4y_favicon.png" />
    <meta property="og:title" content="code for YOKOHAMA" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Code for YOKOHAMAでは仲間とともに技術を磨き、学んだスキルを地域の課題解決に役立てていく活動です。" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?><?php echo ($_SERVER['SERVER_PORT'] == 80)? "" : ":${_SERVER['SERVER_PORT']}"; ?>/images/icon_top.png" />

    <title>code for YOKOHAMA</title>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="header_box">
    <div class="sns_box">
        <div class="fb-like" data-href="http://code4.yokohama/" data-width="100" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://code4.yokohama/" data-count="none">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <ul class="menu_box">
        <!--<li>プロジェクト</li>-->
        <li><a class="blue" href="mailto:info@code4.yokohama">問い合わせ</a></li>
        <!--<li>参加方法</li>-->
    </ul>
</div>
<div class="top_box inner">
    <h1><img class="main_logo" src="images/c4y_logo.png" alt="code for YOKOHAMAロゴ" /></h1>
    <h2>Technology for Social Innovation</h2>
    <p>Code for YOKOHAMAでは仲間とともに技術を磨き、学んだスキルを地域の課題解決に役立てていく活動です。<br />
        横浜から価値あるソリューションを世界へ。あなたもこの活動に参加しませんか？</p>
    <a class="participate_btn" href="https://docs.google.com/a/info-lounge.jp/forms/d/1jpl0R1mK1JXRzOPdQpVBU6pN3Ei2Ol4Qz9R44tHEdQI/viewform" target="_blank">参加する</a>
</div>
<div class="project_wrapper">
    <div class="project_box inner">
        <h3>プロジェクト</h3>
        <p>Code for YOKOHAMAではオープンソースやオープンデータに関するプロジェクト、参加者のスキルアップを目指すプロジェクトを中心に参加メンバーが主体的に立ち上げていきます。</p>
        <div class="project_btn">オープンソース</div>
        <div class="project_btn">オープンデータ</div>
        <div class="project_btn">スキルアップ</div>
    </div>
    <div class="project_box inner">
        <h3>LOCAL GOOD YOKOHAMAオープンソース</h3>
        <p>Code for YOKOHAMAの立ち上げ第一弾プロジェクトが「LOCAL GOOD YOKOHAMAオープンソース」です。クラウドファンディングとスキルマッチの手法で地域の課題解決に挑むLOCAL GOOD YOKOHAMAの基盤アプリケーションのFROSSである「GOTEO」の日本語ローカライズやメンテナンスを行います。</p>
        <div class="logo_img">
            <a href="http://yokohama.localgood.jp/" target="_blank"><img src="images/logo.png" /></a>
        </div>
    </div>
    <div class="project_box inner">
        <h3>月一でミートアップ</h3>
        <p>参加メンバー間での活動報告や情報交換を目的としたミーティングを行います。</p>
    </div>
</div>

<div class="footer_box">
    <p>Code for YOKOHAMA some rights reserved.</p>
</div>
</body>