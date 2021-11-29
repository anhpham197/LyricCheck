@extends('layouts.app')

@section('content')
<main class="m-auto w-full sm:mt-4">
    <div class="flex gap-2 items-center justify-center py-3" style="background-color: #1C1E1F;">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 0.75C6.2625 0.75 0.75 6.2625 0.75 13C0.75 19.7375 6.2625 25.25 13 25.25C19.7375 25.25 25.25 19.7375 25.25 13C25.25 6.2625 19.7375 0.75 13 0.75ZM12.0375 6H13.9625V15.625H12.0375V6ZM13 20.875C12.3 20.875 11.6875 20.2625 11.6875 19.5625C11.6875 18.8625 12.3 18.25 13 18.25C13.7 18.25 14.3125 18.8625 14.3125 19.5625C14.3125 20.2625 13.7 20.875 13 20.875Z" fill="#058BFF"/>
        </svg>
        <div class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis dignissim eget vehicula et orci vitae blandit.</div>
    </div>

    <div class="text-white flex flex-col mt-24">
        <div class="font-bold text-2xl text-center pb-4">Login</div>
        <div class="text-center pb-9">Sign in using your Shazam app account</div>
        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="w-80 m-auto">
                <span class="z-10 h-full leading-snug font-normal absolutetext-center text-gray-400 absolute bg-transparent rounded items-center justify-center pl-3 py-3">
                    <i class="fa fa-user"></i>
                </span>
                <input id="email" type="email"
                    class="form-input w-full pl-9 @error('email') border-red-500 @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" 
                    style="font-family: 'Font Awesome 5 Free', 'system-ui'; background: #181A1B; border: 1px solid #4f4f4f" 
                    placeholder="Username" required>

                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="w-80 m-auto">
                <span class="z-10 h-full leading-snug font-normal absolutetext-center text-gray-400 absolute bg-transparent rounded items-center justify-center pl-3 py-3">
                    <i class="fas fa-unlock-alt"></i>
                </span>
                <input id="password" type="password"
                    class="form-input w-full pl-9 @error('password') border-red-500 @enderror" name="password" 
                    style="font-family: 'Font Awesome 5 Free', 'system-ui'; background: #181A1B;border: 1px solid #4f4f4f" 
                    placeholder="Password" required>
                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="w-80 m-auto">
                <button type="submit"
                class="float-right select-none font-bold whitespace-no-wrap py-3 px-8 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                    Đăng nhập
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
