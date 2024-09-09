<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
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
        .okey{
            font-size: 20px;
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

        

        <section id="PS5.html">
            <h2>ハースのケビン・マグヌッセン、ペナルティポイント累積で次戦アゼルバイジャンGP出場停止へ</h2>
            <img width="250px" src="./motorsport/haas20.jpg" >
            
            <p>ハースのケビン・マグヌッセンが、ペナルティポイントの累積によって次戦アゼルバイジャンGPの出場停止処分を受ける可能性が浮上している。
マグヌッセンはイタリアGP決勝レース中、ロッジア・シケインでアルピーヌのピエール・ガスリーと接触し、10秒のタイム加算ペナルティを科された。
またこのタイムペナルティに併せて、マグヌッセンにはペナルティポイント2点が科された。これでマグヌッセンは累積12ポイント……不服申し立てのプロセス次第ではあるものの、マグヌッセンに次戦出場停止処分が下ると考えられる。</p>
<p></p>
        </section>
        <section id="PS5.html">
            <h2>メルセデス、18歳のアンドレア・キミ・アントネッリの来季起用を正式発表。2025年F1デビュー決定</h2>
            <img width="250px" src="./motorsport/mercedes12.jpg" >
            
            <p>年初にチームと黄金時代を築いてきたルイス・ハミルトンのフェラーリ移籍が決まってから、誰がその後任になるかは常に話題の中心だった。当初は多くの候補が取り沙汰されていたが、最近ではチームのジュニアドライバーであるアントネッリの昇格が濃厚だと考えられていた。

そして本日正式に、メルセデスは2025年のF1ドライバーとしてイタリア出身の18歳、アンドレア・キミ・アントネッリを起用することを発表した。アントネッリはジョージ・ラッセルとコンビを組むこととなった</p>
<p></p>
        </section>

        
    

    <div class="footer">
        <p>著作権情報と連絡先</p>
    </div>
</body>
</html>
