<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
        <h1>みんなの日記を見てみよう！</h1>
        <h2>あなたの学年は？</h2>
        <a href='/posts/create'>今日の日記を書く</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        <a href="/classes/{{ $grade->id }}">{{ $grade->grade }}</a>
                    </p>
                </div>
            @endforeach
        </div>
</x-app-layout>