<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
        <h1>{{ $classx->class }}</h1>
        <h2>だれの日記を見る？</h2>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                </div>
            @endforeach
        </div>
</x-app-layout>