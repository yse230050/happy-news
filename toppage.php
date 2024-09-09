<?php
    $title = "トップページ";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
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
        <?php 
            
        ?>
        <div class="search-container">
            <form action="/search" method="get">
                <input class="search-box" type="search" name="q" size="40" placeholder="ニュースを検索" >
                <input class="search" type="submit" value="検索">
            </form>
            
        </div>  
    </header>
   
    
    <div class="content">
        <h2 >エンタメニュース</h2>
            <div class="div-inline1">
                <img width="250px" src="imgs/ylsl.jpg" >
            </div>
           <div class="div-inline2">
            <h3><a href="entame2.php" class="ye">日本テレビ系「24時間テレビ47」</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >スポーツニュース</h2>
            <div class="div-inline1">
            <img width="250px" src="imgs/ylsl2.jpg" >
            </div>
           <div class="div-inline2">
            <h3><a href="sport.php" class="ye">F1イタリアGP決勝でルクレールが今季2勝目</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >ゲームニュース</h2>
            <div class="div-inline1">
            <img width="250px" src="imgs/ylsl3.png" >
            </div>
           <div class="div-inline2">
            <h3><a href="game.php" class="ye">ドラクエ３のHD2Dリメイクの発売日＆ドラクエ1＆2のHD2Dリメイクも決定！！</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >ITニュース</h2>
            <div class="div-inline1">
            <img width="250px" src="IT_image/top.jpg" >
            </div>
           <div class="div-inline2">
            <h3><a href="IT.php" class="ye">なぜプログラミングを「開発」と呼ぶのか、他業界が感じるITプロジェクトの違和感</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >釣りニュース</h2>
            <div class="div-inline1">
            <img width="250px" src="turi_image/fish1 (1).jpg" >
            </div>
           <div class="div-inline2">
            <h3><a href="turi.php" class="ye">初心者でも簡単に爆釣！？キスの生態</a></h3>
           </div>
    </div>
<div class="footer" >
    <p>著作権情報と連絡先</p>
</div>
    <script>
        //javaScript
    </script>
</body>
</html>