<!DOCTYPE html>
<html>
<head lang="ja">
    <meta charset="UTF-8">
    <meta name="description" content="Code for YOKOHAMAは仲間とともに技術を磨き、学んだスキルを地域の課題解決に役立てていく活動です。"/>
    <meta name="keywords" content="オープンソース,オープンデータ"/>
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <link type="image/png" rel="icon" href="c4y_favicon.png" />
    <meta property="og:title" content="code for YOKOHAMA" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Code for YOKOHAMAでは仲間とともに技術を磨き、学んだスキルを地域の課題解決に役立てていく活動です。" />
    <meta property="og:url" content="http://code4.yokohama/" />
    <meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME']; ?><?php echo ($_SERVER['SERVER_PORT'] == 80)? "" : ":${_SERVER['SERVER_PORT']}"; ?>/images/icon_top.png" />

    <title>Code for YOKOHAMA</title>

<?php if ($_SERVER['SERVER_NAME'] === 'code4.yokohama'): ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-59974413-1', 'auto');
      ga('send', 'pageview');
    </script>
<?php endif; ?>
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
    <p>Code for YOKOHAMAは仲間とともに技術を磨き、学んだスキルを地域の課題解決に役立てていく活動です。<br />
        横浜から価値あるソリューションを世界へ。あなたもこの活動に参加しませんか？</p>
    <a class="participate_btn" href="https://docs.google.com/a/info-lounge.jp/forms/d/1jpl0R1mK1JXRzOPdQpVBU6pN3Ei2Ol4Qz9R44tHEdQI/viewform" target="_blank">参加する</a>
</div>
<div class="project_wrapper">
    <div class="project_box inner">
        <h3>プロジェクト</h3>
        <p>Code for YOKOHAMAはオープンソースやオープンデータに関するプロジェクト、参加者のスキルアップを目指すプロジェクトを中心に参加メンバーが主体的に立ち上げていきます。</p>
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
    <div class="project_box inner">
        <div class="project_btn m_botom">第一回</div>
            <h3>2月21日(土)</h3>
            <h3>Code for YOKOHAMA キックオフミーティング</h3>
            <h3>＜内容＞</h3>
            <ul>
                <li>1.Code for YOKOHAMAの目指すところ</li>
                <li>2.GOTEO開発コミュニティについて</li>
                <li>3.今後の活動計画についてのブレインストーミング</li>
                <li><a href="https://www.facebook.com/events/1395282610784330/" target="_blank".blue >イベントページ(facebook)</a></li>
            </ul>
            <h3 class="m_top">＜登壇者＞（敬称略）</h3>
            <ul>
                <li>内田 篤宏（アクセンチュア）</li>
                <li>肥田野正輝（インフォ・ラウンジ）</li>
                <li>杉浦裕樹（横浜コミュニティデザイン・ラボ）</li>
                <li>ほか</li>
            </ul>
            <h3><img class="m_img" src="images/1_OpenDateDay.jpg" alt="集合写真" width="320" height="224"/> </h3>
        <div class="project_btn m_botom">第二回</div>
            <h3>3月26日</h3>
            <h3>＜内容＞</h3>
            <ul>
                <li>1.Code for YOKOHAMAの目指すところ</li>
                <li>2.GOTEO開発コミュニティについて</li>
                <li>3.今後の活動計画についてのブレスト</li>
            </ul>

            <h3 class="m_top">＜登壇者＞（敬称略）</h3>
            <ul>
                <li>内田 篤宏（アクセンチュア）</li>
                <li>肥田野正輝（インフォ・ラウンジ）</li>
                <li>杉浦裕樹（横浜コミュニティデザイン・ラボ）</li>
                <li>ほか</li>
            </ul>
            <h3><a href="images/c4y_vol1-1.jpg" target="_blank"><img class="m_img" src="images/c4y_vol1-1.jpg" alt="グラフィックレコーディング1" width="224" height="320"/> 
                <a href="images/c4y_vol1-2.jpg" target="_blank"><img class="m_img" src="images/c4y_vol1-2.jpg" alt="グラフィックレコーディング2" width="224" height="320"/></h3>
        <div class="project_btn m_botom">第三回</div>
            <h3>4月28日</h3>
            <h3>Code for YOKOHAMA - Civic Hack Night vol.03</h3>
            <h3><内容></h3>
            <ul>
                <li>１．「Cesiumを使って見よう」（渡邊英徳さん、早川聖奈さん）</li>  
                <li>２．「E2D3でCesiumを使う方法」（清水正行さん）</li>  
                <li>３．「参加者の活動紹介ピッチ</li>  
                <li>
                    <ul>
                        <li>&nbsp;&nbsp;▽「ウィキペディア街道」プロジェクトと5月23日に開催するイベントについて（小池 隆さん）</li>
                        <li>&nbsp;&nbsp;▽エンジニア実績のリサイクル「アールソーシング」（川合 淳一さん）</li>
                        <li>&nbsp;&nbsp;▽ネクスト・横浜ユース・ハッカソン（竹内 久知さん）</li>
                        <li>&nbsp;&nbsp;▽岩崎学園の取組紹介（武藤 幸一さん）</li>
                    </ul>
                </li>
            </ul>
            <p>４）LOCAL GOOD OPENSOURCE PROJECTの紹介</p><br/>
        <a href="https://www.facebook.com/events/1386915761635925/" target="_blank".blue >イベントページ(facebook)</a><br/>
        <div class="project_btn m_botom">第四回</div>
            <h3>5月8日</h3>
            <h3>Code for YOKOHAMA ミートアップ</h3>

            <p>Local Goodオープンソースプロジェクトが本格始動です。<br/>
                &nbsp;地域課題解決のためのクラウドファンディングとスキルマッチングのプラットフォームであるLocal Goodは<br/>
                バルセロナ発のオープンソースであるGoteoを日本にローカライズして開発されました。<br/>
                &nbsp;昨年の横浜に続いて、今年は九州地方での展開も決定しています。<br/>
                &nbsp;Code for YOKOHAMAでは、このオープンソースの発展に対する技術的サポートを通じて、<br/>
                地域課題の解決の支援を行っていきたいと考えています。<br/>
                &nbsp;ソースコードはすでにAGPLライセンスのもとGithubに公開されています。オンラインでの活動を中心に、<br/>
                適時オフラインのミーティングを開催しながら、プロジェクト推進していきます。<br/>
                &nbsp;今回のミートアップではLOCAL GOOD YOKOHAMAの開発を担当したインフォ・ラウンジ合同会社の肥田野さんに<br/>
                現状の課題や今後のプロジェクトの進め方などを発表していただきます。<br/>
            </p>
            <h3 class="m_top" ><内容></h3>
            <ul>
                <li>１．「Local Goodの紹介」（Local Good YOKOHAMA事務局）</li>
                <li>２．「Local Goodオープンソースプロジェクト」（肥田野正輝さん）
                <li>３．参加者の活動紹介ピッチ（懇親タイム）</li>                
            </ul>
        <div class="project_btn m_botom">第五回</div>
            <h3>5月19日</h3>
            <h3>自治会運営に役立つツールを開発しよう！
                <br/> - Code for Yokohama Civic Hack Night vol.04</h3>
            <h3><内容></h3>
            <ul>
                <li>１．自治会ってどんな仕組み？</li>
                <li>２．課題提起
                 <br/>&nbsp;&nbsp;（金沢区役所石塚さんから現状認識している課題と解決のアイディアの報告）</li>
                <li>３．ブレインストーミング（あったらよい機能を具体的に出し合います）</li>
                <li>４．ラップアップ</li>
            </ul>
        <div class="project_btn m_botom">第六回</div>
            <h3>6月11日</h3>
            <h3>横浜のIT系ネットワークの情報基盤、プロジェクト情報共有を考えよう！
                <br/> - Code for YOKOHAMA - Civic Hack Night vol.05</h3>
            <h3><内容></h3>
            <p>今年度横浜において予定されているIT関連のイベントや施策などの動きについて共有します。
              <br/>いくつかの企業・団体の方からご発表頂きます。その内容を踏まえて、
              <br/>どのような連携が可能か参加者全員でブレインストーミングを行います。</p>
            <h3 class="m_top"><紹介事例></h3>
            <ul>
                <li>▽Code for YOKOHAMAの今年度の活動の計画</li>
                <li><a class="linkblue" href="http://www.digital.nyc/" target="_blank".blue >▽NYのエンジニアと起業のHUBサイト「Digital.NYC: Official Hub For Tech & NYC Startups」</a></li>
                <li><a class="linkblue" href="http://www.city.yokohama.lg.jp/keizai/sogyo/it/20150325164328.html" target="_blank".blue >▽横浜市　経済局 平成27年度「オープンデータ活用ビジネス化支援事業」</a></li>
                <li><a class="linkblue" href="https://www.facebook.com/events/1650753081823971/" target="_blank".blue >▽6/24開催：「オープンデータ自治体サミット」</a></li>
                <li><a class="linkblue" href="https://www.facebook.com/events/1425878117734136/" target="_blank".blue >▽6/23開催：オープンデータ自治体サミット前夜祭　「オープンガバメントとマイナンバー　地方議会の役割」</a></li>
                <li><a class="linkblue" href="https://jobhub.jp/camp/yokohama-ups" target="_blank".blue >▽YOKOHAMA Ups!　　横浜発のアイデア・アプリ開発コンテスト</a></li>
                <li><a class="linkblue" href="http://blog.2015.cross-party.com/" target="_blank".blue >▽2月開催予定「CROSS 2016」（調整中）</a></li>
                <li>▽iPhoneアプリ制作講座＠さくらWORKS＜関内＞</li>
                <li><a class="linkblue" href="http://www.meti.go.jp/information/publicoffer/saitaku/s150319003.html" target="_blank".blue >▽経産省・JIPDEC「先端課題に対応したベンチャー事業化支援等事業」
                    </br>（電子政府分野におけるITベンチャーの事業化に向けた環境整備事業）
                    </br>地域におけるソーシャルビジネスの創出モデルの確立に向けた実証</a></li>
                <li><a class="linkblue" href="http://odd15.okfn.jp/" target="_blank".blue >▽インターナショナルオープンデータデイ2016</a></li>
                <li><a class="linkblue" href="hhttp://localgood.jp/" target="_blank".blue >▽LOCAL GOOD YOKOHAMA、LOCAL GOOD FUKUOKA、LOCAL GOOD KITAQ</a></li>
                <li><a class="linkblue" href="https://www.facebook.com/events/853367991404631/" target="_blank".blue >▽日本Androidの会 横浜支部 ６月例会</a></li>
                <h3><a href="images/c4y_vol6-1.jpg" target="_blank"><img  class="m_img" src="images/c4y_vol6-1.jpg" alt="グラフィックレコーディング1" width="224" height="320"/> 
                <a href="images/c4y_vol6-2.jpg" target="_blank"><img  class="m_img" src="images/c4y_vol6-2.jpg" alt="グラフィックレコーディング1" width="320" height="224"/> </h3>
        </div>
    </div>
</div>

<div class="footer_box">
    <p><a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="クリエイティブ・コモンズ・ライセンス" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />このウェブサイトのコンテンツは <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">クリエイティブ・コモンズ 表示 4.0 国際 ライセンスの下に提供されています。</a><br />Copyright (C) 2015 Code for YOKOHAMA.</p>
</div>
</body>
