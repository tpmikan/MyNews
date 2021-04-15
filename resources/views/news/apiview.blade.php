<!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta name="csrf-token" content="{{ csrf_token() }}">
         <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <title>apiview</title>
     </head>
     <body>

         <div class='test'>hello view</div>
         <button id='change_color'>change color</button>
         <button id='add_hello'>add hello</button>
         <button id='get_news'>get news</button>

         <br>
         <div class='target_hello'></div>

         <br>
         <table class='news' border='2'>
             <tr>
                 <th>id</th>
                 <th>title</th>
                 <th>body</th>
             </tr>
        </table>

        <br>

        <h5>【課題】newsテーブルにデータを保存できるadd_newsボタンのAjaxを実装しましょう（値は決め打ちでokです）</h5>
        <button id='add_news'>add news</button>
        <br>
         ヒント：
        <ul>
            <li>Ajaxのdataに連想配列(json)を渡すことで、サーバーにデータの送信が可能です</li>
            <li>コントローラでデータを取得する方法→<a href='https://readouble.com/laravel/5.5/ja/requests.html'>JSON入力値の取得の項目</a></li>
         </ul>
        <h5>【応用】画面で入力した値をnewsテーブルに保存できるよう改修しましょう</h5>
        
        <label>title</label>
        <input type="text" class="form-control" id='news_title' name="news_title">
        <label>body</label>
        <textarea class="form-control" rows="10" id='news_body' name="news_body"></textarea>
        <button id="add_news_form">保存</button>
        
     </body>
 </html>