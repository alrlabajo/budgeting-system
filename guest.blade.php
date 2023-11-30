<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!--Background Color-->
        <div class="w-screen h-screen relative bg-indigo-800">
        <!--Background Photo-->
            <img class="w-[1304px] h-screen left-[616px] top-[-5px] absolute" src="{{ asset('css/images/img/background.png') }}"/>
            <!--Form Container-->
            <div class="w-[760.57px] h-[977.88px] left-[74px] top-[69px] absolute">
                <div class="w-[760.57px] h-[977.88px] left-0 top-0 absolute bg-white rounded-xl">
                    <div class="w-96 h-96 left-[131.13px] top-[229.80px] absolute rounded-xl flex-col justify-start items-start gap-12 inline-flex">
                        <div class="flex-col justify-start items-center gap-11 flex">
                            <!--Headings-->
                            <div class="flex-col justify-start items-center gap-7 flex">
                            <div class="w-96 text-cyan-700 text-6xl font-bold font-['Inter'] leading-9">PLM Module</div>
                            <div class="w-96 text-cyan-700 text-4xl font-medium font-['Inter'] leading-9">Sign In</div>
                        </div>
                        <div class="flex-col justify-start items-center gap-6 flex">
                            <div class="flex-col justify-start items-start gap-6 flex">
                                <div class="flex-col justify-start items-start gap-6 flex">
                                    <!--Email Address-->
                                    <div class="flex-col justify-start items-start gap-2.5 flex">
                                        <div class="w-96 h-7 text-zinc-900 text-xl font-normal font-['Inter'] leading-9">Email Address</div>
                                        <div class="w-96 justify-start items-start inline-flex">
                                            <input class="grow shrink basis-0 h-12 px-4 bg-white rounded-md border border-slate-500 flex-col justify-center items-center gap-2.5 inline-flex"></input>
                                        </div>
                                    </div>
                                    <!--Password-->
                                    <div class="flex-col justify-start items-start gap-2.5 flex">
                                        <div class="w-96 justify-between items-center inline-flex">
                                            <div class="w-48 h-7 text-zinc-900 text-xl font-normal font-['Inter'] leading-9">Password</div>
                                            <a class="w-52 text-right text-slate-500 text-base font-normal font-['Inter'] leading-9 hover:underline" href="{{ route('password.request') }}">Forgot Password?</a>
                                        </div>
                                        <div class="w-96 justify-start items-start inline-flex">
                                            <input class="grow shrink basis-0 h-12 pl-4 pr-12 bg-white rounded-md border border-slate-500 flex-col justify-center items-center gap-2.5 inline-flex"></input>
                                            <div class="w-12 h-12 left-[452px] top-0 absolute justify-center items-center gap-2.5 flex">
                                                <div class="w-4 h-4 relative"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col justify-start items-start gap-5 flex">
                                    <div class="justify-start items-center gap-5 inline-flex">
                                        <div class="w-6 h-6 relative">
                                            <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-white dark:border-gray-600">
                                        </div>
                                        <div class="w-72 text-zinc-900 text-base font-light font-['Inter'] leading-9">Keep me signed in</div>
                                    </div>
                                    <div class="w-96 h-14 px-5 py-2.5 bg-slate-500 rounded shadow justify-center items-center inline-flex hover:bg-blue-900">
                                        <div class="text-white text-2xl font-bold font-['Inter'] leading-normal">Login</div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-col justify-start items-center flex">
                                <div class="w-96 h-px opacity-25 border border-slate-600"></div>
                                <div class="p-2.5 bg-white justify-start items-start gap-2.5 inline-flex">
                                    <div class="w-36 text-center text-zinc-400 text-lg font-normal font-['Inter'] leading-normal">or sign in with</div>
                                </div>
                            </div>
                            <div class="w-96 h-14 flex items-center justify-center bg-gray-200 rounded hover:bg-slate-700">
                                <img class="w-6 h-7 left-[124.89px] top-[16.24px]" src="{{ asset('css/images/img/image 1.png') }}" /></div>
                                <button class="text-center text-slate-600 text-xl font-normal font-['Inter'] leading-7 ml-4">Continue with Microsoft</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-96 h-20 left-[131.13px] top-[102.41px] absolute">
                    <img class="w-20 h-20 left-0 top-0 absolute rounded-xl" src="{{ asset('css/images/img/image 5.png') }}" />
                    <img class="w-80 h-14 left-[99.91px] top-[17.48px] absolute" src="{{ asset('css/images/img/image 4.png') }}" />
                </div>
            </div>
        </div>
    </body>
</html>
