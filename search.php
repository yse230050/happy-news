<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
    <style>
        /* 簡単なスタイル */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin-bottom: 10px;
        }
        .result a {
            text-decoration: none;
            color: blue;
        }
        .result a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>検索結果<br>以下のサイトページに掲載されています！！</h1>
    <div id="results"></div>

    <script>
        function searchInPages(searchText) {
            var pages = [
                { url: 'toppage.php', title: 'NEWS WEB' },
                { url: 'category1.html', title: 'エンタメ' },
                { url: 'category2.html', title: 'スポーツ' },
                { url: 'game.php', title: 'ゲーム' },
                { url: 'category4.html', title: 'IT' }
            ];

            var results = [];

            function fetchPage(url, title) {
                return fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        if (html.includes(searchText)) {
                            results.push({ url: url, title: title });
                        }
                    });
            }

            Promise.all(pages.map(page => fetchPage(page.url, page.title))).then(() => {
                var resultDiv = document.getElementById('results');
                resultDiv.innerHTML = '';
                if (results.length > 0) {
                    results.forEach(result => {
                        var link = document.createElement('a');
                        link.href = result.url;
                        link.textContent = result.title;
                        link.target = '_blank';
                        var resultItem = document.createElement('div');
                        resultItem.className = 'result';
                        resultItem.appendChild(link);
                        resultDiv.appendChild(resultItem);
                    });
                } else {
                    resultDiv.textContent = '一致するページが見つかりませんでした。';
                }
            });
        }

        // URLパラメータから検索テキストを取得
        var urlParams = new URLSearchParams(window.location.search);
        var searchText = urlParams.get('q');
        if (searchText) {
            searchInPages(searchText);
        } else {
            document.getElementById('results').textContent = '検索キーワードが指定されていません。';
        }
    </script>
</body>
</html>