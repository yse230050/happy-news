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
                <li><a href="sports.html" class="no-underline">スポーツ</a></li>
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
        <h1><a href="game.php">ゲーム</a></h1>
        <nav>
            <ul class="horizontal-list">
            <li><a href="saisin.php"class="no-underline">最新ニュース</a></li>
            <li><a href="swich.php"class="no-underline">Switch</a></li>
            <li><a href="PS5.php"class="no-underline">PS5</a></li>
            <li><a href="pC.php"class="no-underline">PC</a></li>
            </ul>
        </nav>

        <section id="swich.php">
        <h2>Switchニュース</h2>
        <img width="250px" src="imgs/ylsl4.jpg" >
            <p class="okey">『逆転検事1&2 御剣セレクション』がNintendo Switchで発売</p>
            <p>「異議あり！」でおなじみの法廷バトルゲーム「逆転裁判」より、天才検事・御剣怜侍を主人公とした「逆転検事」シリーズが復活。『逆転検事1&2 御剣セレクション』が、カプコンさんよりNintendo Switchで本日発売されました。本作は、フルHDグラフィックの高解像度で蘇ったシリーズ2作品を、さまざまなスペシャルコンテンツや追加機能で隅々まで楽しめる「決定版」となっています。</p>
        </section>

    </section>

    <div class="footer">
        <p>著作権情報と連絡先</p>
    </div>
</body>
</html>
