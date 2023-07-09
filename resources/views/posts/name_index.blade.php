<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
        <h1>{{ $classx->classx }}</h1>
        <h2>だれの日記を見る？</h2>
        <div>
            @foreach ($users as $user)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        
                        <a href="/{{ $grade->id }}/{{$classx->id}}/{{$user->id}}">{{ $user->name}}</a>
                    </p>
                </div>
            @endforeach
        </div>
</x-app-layout>