<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="header-title">TodoList</header>
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="side_bar">
                サイドバー
            </div>
        </div>
        <div class="col">
            <p>メインコンテンツエリア</p>
            <form method="post">
                @csrf
                <div>
                    <input type="text" name="content" />
                <button formaction="{{route('todo.add')}}" class="btn btn-primary" placeholder="Todo">保存する</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
