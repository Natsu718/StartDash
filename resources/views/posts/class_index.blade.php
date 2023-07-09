<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
        <h1>どのクラスにいく？</h1>
        <div>
            @foreach ($classxes as $classx)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>クラス：<a href="/{{ $grade->id }}/{{$classx->id}}">{{ $classx->classx }}</a></p>
                </div>
            @endforeach
        </div>

</x-app-layout>