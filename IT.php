<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <style>
       .gray-text{
        color: #808080;
    }
    .horizontal-list{
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        /* justify-content: center; */
    }
    .horizontal-list li{
        display: inline;
        /* margin-right: 70px; */
        margin-left: 50px;
       margin-top: 5px;
       margin-bottom: 5px;
    }
    nav{
        width: 100%;
        background-color: #0b8ec2;
        color: white;
        padding: 5px 0;
        font-weight: bold;
      
      
    }
    .no-underline{
        text-decoration: none;
        color: white;
        font-weight: bold;
        font-size: 15px;
    }
    .no-underline1{
        text-decoration: none;
        color: white;
        font-weight: bold;
        font-size: 20px;
    }
    .search-container{
        text-align: right;
        padding-left: 10px;
        padding-top: 20px;
    }
    .search-box{
        width: 250px;
        height: 40px;
        background-color: #d5d1d1;
        border: 3px solid #0b8ec2;
    }
    .search{
        width: 50px;
        height: 40px;
        background-color: #0b8ec2;
        border: 3px solid #0b8ec2;
    }
    .content{
        float: right;
        width: 90%;
        height: 400px;
        padding: 15px;
        border-bottom: 1px solid #808080;
    }
    .div-inline1,.div-inline2{
        width:50%;
        /* height: 50%;
        float: left;
        margin-right: 10px; */
    }
    .div-inline1{
        float: left;
    }
    .div-inline1 img{
        max-width: 100%;
        max-height: 100%;
    }
    .div-inline2{
        float: left;
    }
    .ye{
        color: black;
    }
    .footer{
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

            <h2>情報技術とは？</h2>
            <p>情報技術（IT）は、コンピュータを使用して情報を記録、処理、伝送する分野です。ハードウェアとソフトウェアの両方を含みます。</p>
        </section>

        <section id="importance">
            <h2>情報技術の重要性</h2>
            <p>情報技術は急速に発展し、現代社会において不可欠な要素となっています。経済、教育、医療など多くの分野に深く影響を与えています。</p>
        </section>

        <section id="future">
            <h2>業界の未来</h2>
            <p>人工知能（AI）、機械学習、インターネット・オブ・シングス（IoT）の発展により、情報技術の将来性は非常に高いとされています。</p>
        </section>

        <section id="unity3d">
            <h2>Unity 3Dの最新ニュース</h2>
            <div class="news-item">
                <h3>Unity産業DXカンファレンス全14講演決定 マツダ、清水建設、デンソーウェーブ、他業界リーダーが講演</h3>
                    クリエイターがマルチプラットフォームでリアルタイムのゲーム、アプリ、体験を構築し、成長させるためのツールを提供する世界有数のプラットフォームであるユニティ・テクノロジーズ・ジャパン株式会社（本社：東京都中央区、代表取締役：松本 靖麿、以下、当社）は、2024年7月19日（金）に『Unity産業DXカンファレンス2024』をステーションコンファレンス東京にて開催する全講演のタイムテーブルを発表いたしました。
                </p>
            </div>
            
            <div class="news-item">
                <h3>Unityの開発者向けカンファレンス 「U/Day Tokyo 2024」 7月1日に開催</h3>
                <p>今回の U/Day Tokyo 2024 では、Unity 6 に関する最新情報や開発ロードマップの紹介、グラフィックスや UI、DOTS、最適化などの各種技術の解説、Unity Muse や Unity Cloud といった Unity の最新製品・サービスのライブデモ、ゲームアプリのユーザー獲得やマネタイズの最新トレンドなどをご紹介します。Unity Japan の講演者だけでなく、Unity 本社からプロダクトマネージャーとアドボケイトが来日し講演いたします。講演者と直接交流ができる懇親会も開催予定です。</p>
            </div>
            
            <div class="news-item">
                <h3>Unity Asset Storeの新着アセット</h3>
                <p>Unity Asset Storeには、新しい3Dモデル、エフェクト、およびツールが追加されました。これにより、開発者はより速く、効率的にプロジェクトを進めることができます。</p>
            </div>
            
            <div class="news-item">
                <h3>Unity 3Dの次世代グラフィックス機能について</h3>
                <p>Unity 3Dの次世代グラフィックス機能は、現在のビジュアル品質の向上を目指して開発が進められています。これには、よりリアルなライティングと影の表現が含まれています。</p>
            </div>
        </section>
    </main>
    
    <div class="footer" >
    <p>著作権情報と連絡先</p>
</div>
</body>
</html>