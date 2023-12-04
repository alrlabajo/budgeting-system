@extends('layouts.guest')
@section('login')
    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex-col justify-start items-start gap-1.5 flex">
                <div class="flex-col justify-start items-start gap-1.5 flex">
                    <!--Email Address-->
                    <div class="flex-col justify-start items-start gap-2.5 flex">
                        <label class="w-96 h-7 text-zinc-900 text-x1 font-normal font-['Inter'] leading-9">Email Address</label>
                            <div class="w-96 justify-start items-start inline-flex">
                            <input class="grow shrink basis-0 h-12 px-4 bg-white rounded-md border border-slate-500 flex-col justify-center items-center gap-2.5 inline-flex"
                                id="email"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    </div>
                    <!--Password-->
                    <div class="flex-col justify-start items-start gap-2.5 flex">
                        <div class="w-96 justify-between items-center inline-flex">
                            <label class="w-48 h-7 text-zinc-900 text-x1 font-normal font-['Inter'] leading-9" for="password" :value="__('Password')">Password</label>
                            @if (Route::has('password.request'))
                            <a class="w-48 h-7 text-right text-slate-500 text-base font-normal font-['Inter'] leading-9 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="w-96 justify-start items-start inline-flex">
                            <input class="grow shrink basis-0 h-12 pl-4 pr-12 bg-white rounded-md border border-slate-500 flex-col justify-center items-center gap-2.5 inline-flex"
                                    id="password"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password"></input>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="w-12 h-12 left-[452px] top-0 absolute justify-center items-center gap-2.5 flex">
                                <div class="w-4 h-4 relative"></div>
                            </div>
                        </div>
                    </div>
                    <!--Keep me Signed In-->
                    <div class="flex-col justify-start items-start gap-5 flex">
                        <div class="justify-start items-center gap-5 inline-flex mt-2">
                            <div class="w-6 h-6 relative">
                                <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-white dark:border-gray-600">
                            </div>
                            <div class="w-72 text-zinc-900 text-base font-light font-['Inter'] leading-9">Keep me signed in</div>
                        </div>
                        <!--Login Button-->
                        <div class="w-96 h-14 px-5 py-2.5 bg-slate-500 rounded shadow justify-center items-center inline-flex hover:bg-blue-900">
                            <button type="submit" class="text-white text-2xl font-bold font-['Inter'] leading-normal">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
