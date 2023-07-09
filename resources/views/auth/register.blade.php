<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Email address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- School -->
        <div class="mt-4">
            <x-input-label for="school" :value="__('学校')" />
            
            <select class="block mt-1 w-full" name="school">
                @foreach($schools as $school)
                    <option value="{{$school -> id}}">{{$school->school}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('school')" class="mt-2" />
        </div>
        
        <!-- Grade -->
        <div class="mt-4">
            <x-input-label for="grade" :value="__('学年')" />
            <select class="block mt-1 w-full" name="grade">
                @foreach($grades as $grade)
                    <option value="{{$grade -> id}}">{{$grade->grade}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('grade')" class="mt-2" />
        </div>
         <!-- Classx -->
        <div class="mt-4">
            <x-input-label for="classx" :value="__('クラス')" />
            <select class="block mt-1 w-full" name="classx">
                @foreach($classxes as $classx)
                    <option value="{{$classx -> id}}">{{$classx->classx}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('classx')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
