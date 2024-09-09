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
        .table-container {
            margin-top: 30px; /* 上部の隙間を調整 */
            margin-bottom: 20px; /* 下部の隙間を調整 */
            display: flex;
            justify-content: center;
        }

        table {
            width: 80%; /* 表の幅を80%に設定 */
            max-width: 800px; /* 最大幅を800pxに設定 */
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .narrow {
            width: 100px;
        }

        .wide {
            width: 350px;
        }

        .default {
            width: 150px;
        }

        .small-text {
            font-size: 0.9em;
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

            <h2>F1イタリアGP決勝でルクレールが今季2勝目</h2>
            <img width="250px" src="./motorsport/ferrari16.jpg" >
            
            <p>ハースのケビン・マグヌッセンが、ペナルティポイントの累積によって次戦アゼルバイジャンGPの出場停止処分を受ける可能性が浮上している。
マグヌッセンはイタリアGP決勝レース中、ロッジア・シケインでアルピーヌのピエール・ガスリーと接触し、10秒のタイム加算ペナルティを科された。
またこのタイムペナルティに併せて、マグヌッセンにはペナルティポイント2点が科された。これでマグヌッセンは累積12ポイント……不服申し立てのプロセス次第ではあるものの、マグヌッセンに次戦出場停止処分が下ると考えられる。</p>

<h1>レースリザルト</h1>
<div class="table-container">
        <table>
            <thead>
                <tr>
                    <th class="narrow">順位</th>
                    <th class="wide">ドライバー</th>
                    <th class="default">タイム</th>
                    <th class="default">ポイント</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="narrow">1</td>
                    <td class="wide">シャルル ルクレール<br><span class="small-text">フェラーリ</span></td>
                    <td class="default"><span class="small-text">1:14'40.727</span></td>
                    <td class="default"><span class="small-text">25</span></td>
                </tr>
                <tr>
                    <td class="narrow">2</td>
                    <td class="wide">オスカー ピアストリ<br><span class="small-text">マクラーレン</span></td>
                    <td class="default"><span class="small-text">+2.664<br>1:14'43.391</span></td>
                    <td class="default"><span class="small-text">18</span></td>
                </tr>
                <tr>
                    <td class="narrow">3</td>
                    <td class="wide">ランド ノリス<br><span class="small-text">マクラーレン</span></td>
                    <td class="default"><span class="small-text">+6.153<br>1:14'46.880</span></td>
                    <td class="default"><span class="small-text">16</span></td>
                </tr>
                <tr>
                    <td class="narrow">4</td>
                    <td class="wide">カルロス サインツ Jr.<br><span class="small-text">フェラーリ</span></td>
                    <td class="default"><span class="small-text">+15.621<br>1:14'56.348</span></td>
                    <td class="default"><span class="small-text">12</span></td>
                </tr>
                <tr>
                    <td class="narrow">5</td>
                    <td class="wide">ルイス ハミルトン<br><span class="small-text">メルセデス</span></td>
                    <td class="default"><span class="small-text">+22.820<br>1:15'03.547</span></td>
                    <td class="default"><span class="small-text">10</span></td>
                </tr>
                <tr>
                    <td class="narrow">6</td>
                    <td class="wide">マックス フェルスタッペン<br><span class="small-text">レッドブル</span></td>
                    <td class="default"><span class="small-text">+37.932<br>1:15'18.659</span></td>
                    <td class="default"><span class="small-text">8</span></td>
                </tr>
                <tr>
                    <td class="narrow">7</td>
                    <td class="wide">ジョージ ラッセル<br><span class="small-text">メルセデス</span></td>
                    <td class="default"><span class="small-text">+39.715<br>1:15'20.442</span></td>
                    <td class="default"><span class="small-text">6</span></td>
                </tr>
                <tr>
                    <td class="narrow">8</td>
                    <td class="wide">セルジオ ペレス<br><span class="small-text">レッドブル</span></td>
                    <td class="default"><span class="small-text">+54.148<br>1:15'34.875</span></td>
                    <td class="default"><span class="small-text">4</span></td>
                </tr>
                <tr>
                    <td class="narrow">9</td>
                    <td class="wide">アレクサンダー アルボン<br><span class="small-text">ウイリアムズ</span></td>
                    <td class="default"><span class="small-text">+1'07.456<br>1:15'48.183</span></td>
                    <td class="default"><span class="small-text">2</span></
                    </tr>
                    <tr>
                        <td class="narrow">10</td>
                        <td class="wide">ケビン マグヌッセン<br><span class="small-text">ハース</span></td>
                        <td class="default"><span class="small-text">+1'08.302<br>1:15'49.029</span></td>
                        <td class="default"><span class="small-text">1</span></td>
                    </tr>
                    <tr>
                        <td class="narrow">11</td>
                        <td class="wide">フェルナンド アロンソ<br><span class="small-text">アストンマーティン</span></td>
                        <td class="default"><span class="small-text">+1'08.495<br>1:15'49.222</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">12</td>
                        <td class="wide">フランコ コラピント<br><span class="small-text">ウイリアムズ</span></td>
                        <td class="default"><span class="small-text">+1'21.308<br>1:16'02.035</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">13</td>
                        <td class="wide">ダニエル リカルド<br><span class="small-text">RB</span></td>
                        <td class="default"><span class="small-text">+1'33.452<br>1:16'14.179</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">14</td>
                        <td class="wide">エステバン オコン<br><span class="small-text">アルピーヌ</span></td>
                        <td class="default"><span class="small-text">+1 Lap<br>1:14'53.386</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">15</td>
                        <td class="wide">ピエール ガスリー<br><span class="small-text">アルピーヌ</span></td>
                        <td class="default"><span class="small-text">+1 Lap<br>1:14'59.071</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">16</td>
                        <td class="wide">バルテリ ボッタス<br><span class="small-text">ザウバー</span></td>
                        <td class="default"><span class="small-text">+1 Lap<br>1:15'07.938</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">17</td>
                        <td class="wide">ニコ ヒュルケンベルグ<br><span class="small-text">ハース</span></td>
                        <td class="default"><span class="small-text">+1 Lap<br>1:15'11.597</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">18</td>
                        <td class="wide">周 冠宇<br><span class="small-text">ザウバー</span></td>
                        <td class="default"><span class="small-text">+1 Lap<br>1:15'20.782</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">19</td>
                        <td class="wide">ランス ストロール<br><span class="small-text">アストンマーティン</span></td>
                        <td class="default"><span class="small-text">+1 Lap<br>1:15'24.235</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                    <tr>
                        <td class="narrow">dnf</td>
                        <td class="wide">角田 裕毅<br><span class="small-text">RB</span></td>
                        <td class="default"><span class="small-text">+46 Laps<br>10'36.669</span></td>
                        <td class="default"><span class="small-text"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>

<p></p>
        </section>
        <section id="PS5.html">
            <h2>F1イタリアGP予選でノリスの驚速続く！2戦連続のポールポジション獲得</h2>
            <img width="250px" src="./motorsport/mcLaren4.jpg" >
            
            <p>マクラーレンのランド・ノリスがF1イタリアGPの予選で最速タイムを記録し、ポールポジションを獲得。RBの角田裕毅は16番手でQ1敗退となった。</p>
            <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th class="narrow">順位</th>
                    <th class="wide">ドライバー</th>
                    <th class="default">チーム</th>
                    <th class="default">タイム</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="narrow">1</td>
                    <td class="wide">ランド ノリス</td>
                    <td class="default"><span class="small-text">マクラーレン</span></td>
                    <td class="default"><span class="small-text">1’19.327</span></td>
                </tr>
                <tr>
                    <td class="narrow">2</td>
                    <td class="wide">オスカー ピアストリ</td>
                    <td class="default"><span class="small-text">マクラーレン</span></td>
                    <td class="default"><span class="small-text">1’19.436</span></td>
                </tr>
                <tr>
                    <td class="narrow">3</td>
                    <td class="wide">ジョージ ラッセル</td>
                    <td class="default"><span class="small-text">メルセデス</span></td>
                    <td class="default"><span class="small-text">1’19.440</span></td>
                </tr>
                <tr>
                    <td class="narrow">4</td>
                    <td class="wide">シャルル ルクレール</td>
                    <td class="default"><span class="small-text">フェラーリ</span></td>
                    <td class="default"><span class="small-text">1’19.461</span></td>
                </tr>
                <tr>
                    <td class="narrow">5</td>
                    <td class="wide">カルロス サインツ Jr.</td>
                    <td class="default"><span class="small-text">フェラーリ</span></td>
                    <td class="default"><span class="small-text">1’19.467</span></td>
                </tr>
                <tr>
                    <td class="narrow">6</td>
                    <td class="wide">ルイス ハミルトン</td>
                    <td class="default"><span class="small-text">メルセデス</span></td>
                    <td class="default"><span class="small-text">1’19.513</span></td>
                </tr>
                <tr>
                    <td class="narrow">7</td>
                    <td class="wide">マックス フェルスタッペン</td>
                    <td class="default"><span class="small-text">レッドブル</span></td>
                    <td class="default"><span class="small-text">1’20.022</span></td>
                </tr>
                <tr>
                    <td class="narrow">8</td>
                    <td class="wide">セルジオ ペレス</td>
                    <td class="default"><span class="small-text">レッドブル</span></td>
                    <td class="default"><span class="small-text">1’20.062</span></td>
                </tr>
                <tr>
                    <td class="narrow">9</td>
                    <td class="wide">アレクサンダー アルボン</td>
                    <td class="default"><span class="small-text">ウイリアムズ</span></td>
                    <td class="default"><span class="small-text">1’20.299</span></td>
                </tr>
                <tr>
                    <td class="narrow">10</td>
                    <td class="wide">ニコ ヒュルケンベルグ</td>
                    <td class="default"><span class="small-text">ハース</span></td>
                    <td class="default"><span class="small-text">1’20.339</span></td>
                </tr>
                <tr>
                    <td class="narrow">11</td>
                    <td class="wide">フェルナンド アロンソ</td>
                    <td class="default"><span class="small-text">アストンマーティン</span></td>
                    <td class="default"><span class="small-text">1’20.421</span></td>
                </tr>
                <tr>
                    <td class="narrow">12</td>
                    <td class="wide">ダニエル リカルド</td>
                    <td class="default"><span class="small-text">RB</span></td>
                    <td class="default"><span class="small-text">1’20.479</span></td>
                </tr>
                <tr>
                    <td class="narrow">13</td>
                    <td class="wide">ケビン マグヌッセン</td>
                    <td class="default"><span class="small-text">ハース</span></td>
                    <td class="default"><span class="small-text">1’20.698</span></td>
                </tr>
                <tr>
                    <td class="narrow">14</td>
                    <td class="wide">ピエール ガスリー</td>
                    <td class="default"><span class="small-text">アルピーヌ</span></td>
                    <td class="default"><span class="small-text">1’20.738</span></td>
                </tr>
                <tr>
                    <td class="narrow">15</td>
                    <td class="wide">エステバン オコン</td>
                    <td class="default"><span class="small-text">アルピーヌ</span></td>
                    <td class="default"><span class="small-text">1’20.766</span></td>
                </tr>
                <tr>
                    <td class="narrow">16</td>
                    <td class="wide">角田 裕毅</td>
                    <td class="default"><span class="small-text">RB</span></td>
                    <td class="default"><span class="small-text">1’20.945</span></td>
                </tr>
                <tr>
                    <td class="narrow">17</td>
                    <td class="wide">ランス ストロール</td>
                    <td class="default"><span class="small-text">アストンマーティン</span></td>
                    <td class="default"><span class="small-text">1’21.013</span></td>
                </tr>
                <tr>
                    <td class="narrow">18</td>
                    <td class="wide">フランコ コラピント</td>
                    <td class="default"><span class="small-text">ウイリアムズ</span></td>
                    <td class="default"><span class="small-text">1’21.069</span></td>
                </tr>
                <tr>
                    <td class="narrow">19</td>
                    <td class="wide">バルテリ ボッタス</td>
                    <td class="default"><span class="small-text">ザウバー</span></td>
                    <td class="default"><span class="small-text">1’21.156</span></td>
                </tr>
                <tr>
                    <td class="narrow">20</td>
                    <td class="wide">周 冠宇</td>
                    <td class="default"><span class="small-text">アルファタウリ</span></td>
                    <td class="default"><span class="small-text">1’21.239</span></td>
                </tr>
            </tbody>
        </table>
    </div><p></p>
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
