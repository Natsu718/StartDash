<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
        <h1>どのクラスにいく？</h1>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>クラス：<a href="/posts/{{ $post->class->id }}">{{ $post->class->class }}</a></p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
</x-app-layout>