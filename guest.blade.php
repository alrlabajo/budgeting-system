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
    <body class="font-sans text-gray-900 antialiased">
        <!--Background Color-->
        <div class="w-screen h-screen fixed bg-indigo-800">
        <!--Background Photo-->
            <img class="w-[1367px] h-screen left-[340px] top-[0px] fixed" src="{{ asset('css/image 2.png') }}"/>
            <!--Form Container-->
            <div class="w-[550px] h-[600px] left-[74px] top-[52px] absolute">
                <div class="w-[550px] h-[720.88px] left-0 top-0 absolute bg-white rounded-xl">
                    <div class="w-96 h-96 left-[131.13px] top-[229.80px] absolute rounded-xl flex-col justify-start items-start gap-12 inline-flex">
                        <div class="flex-col justify-start items-center gap-11 flex" style="position: absolute; left: -46px; top: -100px;">
                            <!--Headings-->
                            <div class="flex-col justify-start items-center gap-3 flex">
                            <div class="w-96 text-cyan-700 text-5xl font-bold font-['Inter'] leading-9">PLM Module</div>
                            <div class="w-96 text-cyan-700 text-3xl font-medium font-['Inter'] leading-9">Sign In</div>
                        </div>
                        <div class="flex-col justify-start items-center gap-6 flex">
                            <div class="flex-col justify-start items-start gap-6 flex">
                                <!--Login Form-->
                                <div id="content">
                                    @yield('login')
                                </div>
                            </div>
                            <!--Signed in with-->
                            <div class="flex-col justify-center items-center flex relative">
                                <div class="p-2.5 w-96 bg-white justify-center items-center gap-2.5 inline-flex">
                                    <div class="w-36 text-center text-[#999DA3] text-lg font-normal font-['Inter'] leading-normal relative z-10 bg-white">or sign in with</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <!--Continue with Microsoft-->
                            <button type="submit" class="w-96 h-14 flex items-center justify-center bg-gray-200 rounded text-[#4B5768]">
                                <img class="w-6 h-7 left-[124.89px] top-[10px]" src="{{ asset('css/image 1.png') }}" />
                                <div class="text-center text-slate-600 text-xl font-normal font-['Inter'] leading-7 ml-4">{{ __('Continue with Microsoft') }}</div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-96 h-20 left-[60px] top-[20px] absolute">
                    <img class="w-20 h-20 left-1 top-1.5 absolute rounded-xl" src="{{ asset('css/image 5.png') }}" />
                    <img class="w-75 h-15 left-[93px] top-[17.48px] absolute" src="{{ asset('css/image 4.png') }}" />
                </div>
            </div>
        </div>
    </body>
</html>
