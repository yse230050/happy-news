<?php
    $title = "スポーツ";
    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スポーツニュース</title>
    <style>
        /* Combined CSS styles */
        
        .gray-text {
            color: #808080;
        }
        .horizontal-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .horizontal-list li {
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
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .div-inline1, .div-inline2 {
            width: 50%;
            float: left;
        }
        .div-inline1 img {
            max-width: 100%;
            max-height: 100%;
        }
        .ye {
            color: black;
        }
        .footer {
            clear: both;
            text-align: center;
            padding: 10px;
            background-color: #0b8ec2;
            color: white;
            font-weight: bold;
        }
        h1 {
            text-align: center;
        }
        h1 a{
            text-decoration: none;
            color: #0d47a1;
           
        }
        h1 a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
        <h2 class="gray-text">happy news</h2>
        <nav>
            <ul class="horizontal-list">
                <li><a href="toppage.php" class="no-underline1">TOP</a></li>
                <li><a href="entame2.php" class="no-underline">エンタメ</a></li>
                <li><a href="sport.php" class="no-underline">スポーツ</a></li>
                <li><a href="game.php" class="no-underline">ゲーム</a></li>
                <li><a href="IT.php" class="no-underline">IT</a></li>
                <li><a href="turi.php" class="no-underline">釣り</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <form action="search.php" method="get">
                <input class="search-box" type="search" name="q" size="40" placeholder="ニュースを検索">
                <input class="search" type="submit" value="検索">
            </form>
        </div>
    </header>

    <section id="game">
    <h1><a href="sport.php">スポーツ</a></h1>
        <nav>
            <ul class="horizontal-list">
            <li><a href="F1.php"class="no-underline">F1</a></li>
            <li><a href="basketball.php"class="no-underline">バスケ</a></li>
            <li><a href="tabletennis.php"class="no-underline">卓球</a></li>
            <li><a href="baseball.php"class="no-underline">野球</a></li>
            </ul>
        </nav>


    <main class="news">
        <section>
            <h2>最新スポーツニュース</h2>

            <article>
                <h3>F1イタリアGP決勝でルクレールが今季2勝目</h3>
                
                <p>モンツァ・サーキットを舞台に開催されたF1第16戦イタリアGP。日曜日の決勝レースではフェラーリのシャルル・ルクレールがチーム母国戦で優勝した。RBの角田裕毅はリタイアとなった。</p>
                <p>中盤まではマクラーレン勢がワンツーで盤石なレースを展開していたが、フェラーリ勢が奇策1ストップ戦略を選択。ルクレールはそれを見事に実現してみせた。マクラーレンはオスカー・ピアストリが2位、ランド・ノリスが3位に終わった。</p>
                <p>RBの角田裕毅はレース序盤にニコ・ヒュルケンベルグ（ハース）からの接触を受け、リタイアを選んだ。</p>
            </article>

            <article>
                <h3>バスケットボールNBAプレーオフでレブロンが劇的な逆転勝利</h3>
                
                <p>ロサンゼルス・レイカーズのレブロン・ジェームズがNBAプレーオフでの重要な試合で劇的な逆転勝利を収めました。試合は最終クォーターでの連続得点によってレイカーズが勝利しました。</p>
                <p>レブロン・ジェームズは試合終了間際に決定的な3ポイントシュートを決め、チームを勝利に導きました。これによりレイカーズはシリーズをリードし、次のラウンドに進出しました。</p>
            </article>

            <article>
                <h3>卓球世界選手権で張本智和が優勝</h3>
                
                <p>卓球の世界選手権が開催され、日本の張本智和選手が男子シングルスで優勝しました。決勝戦では、張本選手が強豪選手と接戦の末、3-2で勝利を収めました。</p>
                <p>張本選手は安定したフォアハンドと巧みなサーブで相手を圧倒し、見事なプレーを披露しました。この勝利により、張本選手は自身初の世界選手権制覇を果たしました。</p>
            </article>

            <article>
                <h3>プロ野球で大谷翔平が2本塁打の活躍</h3>
                
                <p>プロ野球の試合でロサンゼルス・エンゼルスの大谷翔平選手が2本塁打を放ち、チームを勝利に導きました。試合はエンゼルスが6-3で勝利し、大谷選手の活躍が光りました。</p>
                <p>大谷選手は初回に2ランホームランを打ち、さらに7回にはソロホームランを追加。打撃だけでなく、守備でも素晴らしいプレーを見せました。</p>
            </article>
        </section>
    </main>

    <div class="footer">
        <p>&copy; 2024 スポーツニュースサイト. All rights reserved.</p>
    </footer>
</body>
</html>
