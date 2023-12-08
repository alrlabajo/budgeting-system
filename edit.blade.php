@extends('layouts.navigation')
@section('content')
<x-app-layout>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!--Admin Info-->
    <div class="left-[490.09px] top-[210px] absolute flex-col justify-start items-start gap-y-0 inline-flex">
        <div class="text-black text-2xl font-medium font-inter leading-9">{{ Auth::user()->name }}</div>
        <div class="w-48 text-slate-400 text-base font-normal font-inter">{{ Auth::user()->email }}</div>

    </div>
    <!--Images-->
    <img class="w-[1451px] h-[113px] left-[277px] top-20 absolute" src="{{ asset('css/image 3.png') }}" />
    <img class="w-40 h-40 left-[317.09px] top-[150px] absolute rounded-full shadow border border-indigo-50" src="{{ asset('css/icon.jpg') }}">

    <!--Company Profile-->
    <div class="left-[317px] top-[350px] absolute text-black text-2xl font-medium font-inter leading-9">Company Profile</div>
    <div class="left-[317px] top-[390px] absolute text-center text-zinc-500 text-base font-light font-inter leading-9">Update your company photo and details here.</div>
    <div class="w-[1367px] h-[1px] left-[317px] top-[440px] absolute border border-zinc-300"></div>

    <!--Basic Info-->
    <div class="left-[317px] top-[480px] absolute text-black text-2xl font-medium font-inter leading-9">Basic info</div>
    <div class="left-[317px] top-[515px] absolute text-center text-zinc-500 text-base font-light font-inter leading-9">Some info may be visible to other people.</div>
    <div class="w-[1367px] h-[1px] left-[317px] top-[661px] absolute border border-zinc-300"></div>
    <!--Labels for Basic Info-->
    <div class="w-80 left-[970px] top-[490px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"></input>
    </div>
    <div class="w-80 left-[970px] top-[535px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"></input>
    </div>
    <div class="w-80 left-[970px] top-[580px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"></input>
    </div>

    <!--Contact Info-->
    <div class="left-[317px] top-[720px] absolute text-black text-2xl font-medium font-inter leading-9">Contact info</div>
    <div class="left-[317px] top-[755px] absolute text-center text-zinc-500 text-base font-light font-inter leading-9">You can add some info to your profile.</div>
    <div class="w-[1367px] h-[1px] left-[317px] top-[835px] absolute border border-zinc-300"></div>
     <!--Labels for Contact Info-->
     <div class="w-80 left-[970px] top-[720px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"
            id="email"
            type="email"
            name="email"
            :value="old('email')"
            required autofocus autocomplete="username"></input>
    </div>
    <div class="w-80 left-[970px] top-[765px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"></input>
    </div>

    <!--Password Info-->
    <div class="left-[317px] top-[880px] absolute text-black text-2xl font-medium font-inter leading-9">Password info</div>
    <div class="left-[317px] top-[920px] absolute text-center text-zinc-500 text-base font-light font-inter leading-9">You can add some info to your profile.</div>
    <div class="w-[1367px] h-[1px] left-[317px] top-[1000px] absolute border border-zinc-300"></div>
     <!--Labels for Password Info-->
     <div class="w-80 left-[970px] top-[890px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"></input>
    </div>
    <div class="w-80 left-[970px] top-[935px] absolute justify-start items-start inline-flex">
        <input class="w-[304px] h-7 pl-2.5 pr-7 bg-white rounded border border-slate-500 flex-col justify-center items-center gap-1.5 inline-flex"></input>
    </div>


    <!--Buttons-->
    <div class="left-[1460px] top-[1050px] absolute justify-start items-start gap-2.5 inline-flex">
        <button type="submit" class="w-20 h-[37.969px] px-4 py-2 rounded-md shadow border border-indigo-800 justify-center items-center gap-2 flex">
            <div class="text-indigo-800 text-[15.188px] font-medium font-inter leading-normal">Cancel</div>
        </button>
        <button type="submit" class="w-32 h-[37.969px] px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 flex">
            <div class="text-white text-[15.188px] font-medium font-inter leading-snug">Save changes</div>
        </button>
    </div>


</x-app-layout>
@endsection
