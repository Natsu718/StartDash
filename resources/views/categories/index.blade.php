<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>なつやすみの日記</h1>
        <h2>{{ $user->name }} の投稿一覧画面</h2>
        <a href='/'>投稿一覧ページへ戻る</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        日付：<a href="/posts/{{ $post->id }}">{{ $post->date }}</a>
                    </p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
