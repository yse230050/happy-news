<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <style>
       .gray-text {
            color: #808080;
        }
        .horizontal-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            /* justify-content: center; */
        }
        .horizontal-list li {
            display: inline;
            /* margin-right: 70px; */
            margin-left: 50px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        nav {
            width: 100%;
            background-color: #0b8ec2;
            color: white;
            padding: 5px 0;
            font-weight: bold;
        }
        .no-underline {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }
        .no-underline1 {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }
        .search-container {
            text-align: right;
            padding-left: 10px;
            padding-top: 20px;
        }
        .search-box {
            width: 250px;
            height: 40px;
            background-color: #d5d1d1;
            border: 3px solid #0b8ec2;
        }
        .search {
            width: 50px;
            height: 40px;
            background-color: #0b8ec2;
            border: 3px solid #0b8ec2;
        }
        .content {
            float: right;
            width: 90%;
            height: 400px;
            padding: 15px;
            border-bottom: 1px solid #808080;
        }
        .div-inline1, .div-inline2 {
            width: 50%;
        }
        .div-inline1 {
            float: left;
        }
        .div-inline1 img {
            max-width: 100%;
            max-height: 100%;
        }
        .div-inline2 {
            float: left;
        }
        .ye {
            color: black;
        }
        .footer {
            clear: both;
            text-align: center;
            padding: 10px;
            background-color: #0b8ec2;
        }
        .news-item {
            margin-bottom: 20px;
        }
        .news-item h3 {
            font-size: 18px;
            color: #333;
        }
        .news-item p {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h2 class="gray-text">happy news</h2>
        <nav>
            <ul class="horizontal-list">
                <li><a href="toppage.php" class="no-underline1">TOP</a></li>
                <li><a href="entame.php" class="no-underline">エンタメ</a></li>
                <li><a href="sports.html" class="no-underline">スポーツ</a></li>
                <li><a href="game.php" class="no-underline">ゲーム</a></li>
                <li><a href="IT.php" class="no-underline">IT</a></li>
                <li><a href="turi.php" class="no-underline">釣り</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <form action="/search" method="get">
                <input class="search-box" type="search" name="q" placeholder="ニュースを検索">
                <input class="search" type="submit" value="検索">
            </form>
        </div>
    </header>
   
    <main>
        <!-- 追加するニュースセクション -->
        <section id="24-hour-tv">
            <h2>日本テレビ系「24時間テレビ47」</h2>
            <p>お笑いタレント・やす子（25）が、9月1日放送の「24時間テレビ47」にて、全国の児童養護施設への募金を目的としたマラソンを完走しました。マラソンのゴールでは涙を見せながら「走れてよかったなあ～皆さんの応援の下、走ることができました」と感謝の気持ちを語りました。</p>
            <p>やす子は高校生の時に児童養護施設で生活していた経験から、その恩返しとしてチャリティーマラソンに挑戦。7月の発表会見では、施設での経験を振り返り、「自分の住んでいた施設に恩返しができたらいいなって思いから始まった」と語り、「一人でも多くの人が施設の子供たちのことを気にかけてくれるように一生懸命走ります」と意気込みを語っていました。</p>
            <p>台風10号の影響を受け、マラソンは横浜・日産スタジアムを周回するコースに変更されることになりました。1992年から続くこのマラソン企画では、ランナーがファンの声援を浴びながら公道を走るのが“名物”でしたが、今年は安全面を考慮しコースが変更されました。また、一般ランナーの参加は台風の影響で中止となりましたが、錦鯉、ハリウッドザコシショウ、薄幸、はるな愛らが応援に駆けつけ、伴走する場面も見られました。</p>
            <p>やす子は「やらないよりは動いた方が変わる。いろんなご意見もありますが、全力でやるのみ」とコメントし、31日午後7時50分にマラソンをスタートしました。トラックを走る姿が中継に映し出され、どれだけ走っても景色が変わらない周回コースに対しては、SNSで同情や批判の声も上がりました。やす子は午後9時過ぎに「休憩中です！」と椅子に座って休む姿を自身のX（旧ツイッター）で公開し、異例のSNS投稿も話題となりました。</p>
            <p>1周400メートルのトラックを75周、30キロを走った後、夜が明けた1日朝にはスタジアムを出て、メイン会場の東京・両国国技館を目指して走り出しました。道中では、同じく児童養護施設で育った「炎神戦隊ゴーオンジャー」出演の俳優・古原靖久が並走しながら励ましの言葉を送りましたが、左足首に痛みを訴え「間に合うかな」と心配する場面もありました。</p>
            <p>両国国技館のゴールに到達したやす子は、「走れてよかったなあ～応援してくださった皆さん、ありがとうございました」と涙ながらに感謝の意を表しました。伴走した「錦鯉」の長谷川雅紀が「右足の次は左足」と声掛けし続けたことを暴露し、「涙引っ込みました」と笑いを誘いました。</p>
            <p>「ちょっと左足をけがしてしまったんですけど、皆さんの応援の下、走ることができました。たくさん応援していただきありがとうございました」と感謝の言葉を繰り返し、全国の児童養護施設の子供たちが思い思いのメッセージを書き入れたゴールテープを見て「うれしいです。こんな素敵なメッセージ書いてくれて。後で全部見ます」と喜びを語りました。</p>
            <p>やす子の思いを受け、新たに「マラソン児童養護施設募金」が設立され、この寄付金は全国約600カ所以上の施設に使用されることが決まっています。番組では「現在の募金額」が公表され、1日午後8時には4億円を超えたことが伝えられました。</p>
            <p>「24時間テレビ」は、昨年11月に発覚した系列局の日本海テレビジョン放送（鳥取市）の男性による寄付金の着服問題を受け、チャリティーの在り方を再考。メインパーソナリティーを廃止し、47回目にして初めて番組テーマを「愛は地球を救う」から「愛は地球を救うのか？」に変更したことも話題となりました。</p>
        </section>
    </main>
    
    <footer class="footer">
        <p>著作権情報と連絡先</p>
    </footer>
</body>
</html>
