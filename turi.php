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
    }
    </style>
</head>
<body>
    <header>
        <h2 class="gray-text">happyニュース</h2>
        <nav>
            <ul class="horizontal-list">
                <li><a href="toppage.php" class="no-underline1">NEWS WEB</a></li>
                <li><a href="entame.php" class="no-underline">エンタメ</a></li>
                <li><a href="sport.php" class="no-underline">スポーツ</a></li>
                <li><a href="game.php" class="no-underline">ゲーム</a></li>
                <li><a href="IT.php" class="no-underline">IT</a></li>
                <li><a href="turi.php" class="no-underline">釣り情報</a></li>
            </ul>
        </nav>
        <div class="search-container">
            <form action="/search" method="get">
                <input class="search-box" type="search" name="q" size="40" placeholder="ニュースを検索">
                <input class="search" type="submit" value="検索">
            </form>
        </div>
    </header>
   
    <main>
        <section id="">
            <h2>キスの生態について</h2>
            <p>一般的に皆様が釣りやスーパーで見かけるキスの正式名称は、シロギスと言います。『キス』と聞いて天ぷらにされた姿を想像する方もおおいのでは！？ シロギスは、北海道南部から九州全域に生息しているため全国的に釣りのターゲットとしても有名な魚です。</p>
            <p>砂浜や堤防から釣れる時期は地域差により若干の差はありますが、3月～10月までと冬を除けばほぼ年間通して釣ることができます。冬になると深場に餌を求めに行くため一般的には船からしか釣る事ができませんが、海に行きたくなる6月～9月は産卵で体力をつけるため豊富な餌を求めて浅場にやってきます。</p>
            <p>波打ち際で釣れる事もあり、魚釣りを始める初心者の方には、特に難しい技術とかはいらないのでベストな釣りになります。簡単な釣りなので、海水浴ついでにという子供連れの釣り人も多く見かけます。私の周りでもキス釣りをして釣りにはまったという人も多くいます。</p>
            <p>キス釣りポイント①：砂浜の河口付近、川の流れ込みがある。川からたくさんのプランクトンが流れてくるためプランクトンを捕食しに集まったゴカイやエビなどを狙って多くのキスが集まります。子供と一緒に釣りを楽しみたい時は、高い堤防から落ちる心配もなく海水浴も同時に楽しめるので、砂浜はおすすめです。</p>
            <p>キス釣りポイント②：近くに砂浜がある堤防（漁港）。砂浜と隣接している漁港はキスを釣る上で好条件が整っています。主に、船の通り道など水深が比較的ある場所や餌釣り（アミを使いサビキ釣り）をしている釣り人の付近などにはキスも多く集まっています。このような条件は結構身近に存在する事が多くあります。まずは、グーグルマップで検索して実際に足を運んでみるといいと思います。逆に避けなければいけないポイントは、岩やカキの瀬が多く点在するところや海藻が多くあるところ、船がたくさん係留（停まっている）している漁港など、これらに該当する場所では、仕掛けを投げるたびに根掛かりして仕掛けを次から次になくしてしまう恐れがありますので避けましょう。また、多くの海水浴客がいるところでは針が刺さると大変危険のため避けましょう。</p>
        </section>
    </main>
    
    <div class="footer">
        <p>著作権情報と連絡先</p>
    </div>
</body>
</html>