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
        <h2 >トップニュース</h2>
            <div class="div-inline1">
                <img src="imgs/zhzi.jpg" alt="">
            </div>
           <div class="div-inline2">
            <h3><a href="ye-1.html" class="ye">都議補選、自民2勝6敗　萩生田氏地元で落選　裏金事件の逆風続く</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >エンタメニュース</h2>
            <div class="div-inline1">
                <img src="imgs/ylsl.jpg" alt="伊藤沙莉" class="responsive-img">
            </div>
           <div class="div-inline2">
            <h3><a href="entame.php" class="ye">伊藤沙莉、NHK朝ドラ「虎に翼」17・4% 穂高も亡くなり寅子らが献杯を</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >スポーツニュース</h2>
            <div class="div-inline1">
                <img src="imgs/ao.jpg" alt="" class="responsive-img">
            </div>
           <div class="div-inline2">
            <h3><a href="sport.php" class="ye">早く野球がしたい”～ヤクルト 奥川恭伸</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >ゲームニュース</h2>
            <div class="div-inline1">
                <img src="imgs/you.jpg" alt="" class="responsive-img">
            </div>
           <div class="div-inline2">
            <h3><a href="game.php" class="ye">【今週のモチベ】オープンワールドサバイバル「Once Human」や，シーシャADV「Hookah Haze」がリリースされる 2024年7月8日～7月14日</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >ITニュース</h2>
            <div class="div-inline1">
                <img src="imgs/it.jpg" alt="" class="responsive-img">
            </div>
           <div class="div-inline2">
            <h3><a href="IT.php" class="ye">AIで私たちの仕事はなくなるの？　共存する新しい営業組織の姿とは</a></h3>
           </div>
    </div>
    <div class="content">
        <h2 >釣り情報ニュース</h2>
            <div class="div-inline1">
                <img src="imgs/yv.jpg" alt="" class="responsive-img">
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