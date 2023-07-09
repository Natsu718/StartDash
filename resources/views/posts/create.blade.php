<x-app-layout>
    <x-slot name="header">
        作成画面
    </x-slot>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
            <h2>日付</h2>
                <input type="text" name="post[date]" placeholder="◯月◯日" value="{{ old('post.date') }}"
                <p class="date__error" style="color:red">{{ $errors->first('post.date') }}</p>
            </div>
            <div>
            <h2>天気</h2>
                <input type="text" name="post[weather]" placeholder="晴れ、曇り、雨" value="{{ old('post.weather') }}"/>
                <p class="weather__error" style="color:red">{{ $errors->first('post.weather') }}</p>
            </div>
            <div>
            <h2>今日あったこと</h2>
                <input type="text" name="post[daily]" placeholder="◯◯へ行った" value="{{ old('post.daily') }}"/>
                <p class="daily__error" style="color:red">{{ $errors->first('post.daily') }}</p>
            </div>
            <h2>写真</h2>
            <div class="image">
             <input type="file" name="image"></div>
            </div>
            <h2>今日やった宿題</h2>
            <input type="text" name="post[task]" placeholder="◯◯をした" value="{{ old('post.task') }}"/>
            <p class="task__error" style="color:red">{{ $errors->first('post.task') }}</p>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
</x-app-layout>