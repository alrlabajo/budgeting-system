@extends('layouts.navigation')
@section('dashboard')
<x-app-layout>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <div class="text-black text-2xl font-medium font-inter leading-9">Dashboard</div>
    <!--May change based on data-->
    <div class="grid grid-cols-1 gap-x-25 p-10 mt-14 lg:grid-cols-2 xl:grid-cols-4 flex">
        <div class="w-[382px] h-20 left-0 top-32 absolute">
            <div class="w-[382px] h-20 left-80 top-8 absolute bg-white rounded-2xl shadow">
                <div class="w-32 h-11 left-[21.50px] top-[17.50px] absolute">
                    <div class="w-24 h- left-0 top-0 absolute text-slate-400 text-sm font-bold font-inter leading-tight">Today’s Money</div>
                    <div class="w-20 h-6 left-0 top-[19px] absolute text-gray-700 text-base font-bold font-['Inter'] leading-tight">$53,000</div>
                    <div class="w-11 h-5 left-[83px] top-[19px] absolute text-green-400 text-base font-bold font-['Inter'] leading-tight">+55%</div>
                </div>
                <div class="w-11 h-11 left-[319.50px] top-[17.50px] absolute">
                    <div class="w-11 h-11 left-0 top-0 absolute bg-slate-500 rounded-xl shadow"></div>
                    <div class="w-6 h-6 left-[11.25px] top-[11.25px]  absolute">
                        <svg class="stroke-white"xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                            <path d="M4.94668 4.80272H19.0092C19.1734 4.80265 19.3375 4.81307 19.5005 4.83392C19.4453 4.44623 19.3121 4.07373 19.109 3.73889C18.9059 3.40405 18.6371 3.11381 18.3188 2.88565C18.0006 2.6575 17.6394 2.49617 17.257 2.41138C16.8747 2.3266 16.4792 2.32011 16.0943 2.39232L4.5292 4.36679H4.51602C3.79007 4.50561 3.14451 4.91633 2.71118 5.51508C3.36403 5.05072 4.14553 4.80169 4.94668 4.80272Z" fill="white"/>
                            <path d="M19.0093 5.85938H4.94684C4.20117 5.86019 3.48627 6.15677 2.959 6.68404C2.43173 7.21131 2.13515 7.9262 2.13434 8.67187V17.1094C2.13515 17.855 2.43173 18.5699 2.959 19.0972C3.48627 19.6245 4.20117 19.9211 4.94684 19.9219H19.0093C19.755 19.9211 20.4699 19.6245 20.9972 19.0972C21.5244 18.5699 21.821 17.855 21.8218 17.1094V8.67187C21.821 7.9262 21.5244 7.21131 20.9972 6.68404C20.4699 6.15677 19.755 5.86019 19.0093 5.85938ZM16.9219 14.2969C16.6438 14.2969 16.3719 14.2144 16.1407 14.0599C15.9094 13.9054 15.7292 13.6857 15.6227 13.4288C15.5163 13.1718 15.4884 12.8891 15.5427 12.6163C15.597 12.3435 15.7309 12.0929 15.9276 11.8963C16.1242 11.6996 16.3748 11.5657 16.6476 11.5114C16.9204 11.4571 17.2031 11.485 17.4601 11.5914C17.717 11.6979 17.9367 11.8781 18.0912 12.1094C18.2457 12.3406 18.3282 12.6125 18.3282 12.8906C18.3282 13.2636 18.18 13.6213 17.9163 13.885C17.6526 14.1487 17.2949 14.2969 16.9219 14.2969Z" fill="white"/>
                            <path d="M2.15625 11.6359V7.26337C2.15625 6.31107 2.68359 4.71454 4.51392 4.36869C6.06738 4.07733 7.60547 4.07733 7.60547 4.07733C7.60547 4.07733 8.61621 4.78046 7.78125 4.78046C6.94629 4.78046 6.96826 5.85712 7.78125 5.85712C8.59424 5.85712 7.78125 6.88983 7.78125 6.88983L4.50732 10.6032L2.15625 11.6359Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[382px] h-20 left-80 top-32 absolute mx-4">
            <div class="w-[382px] h-20 left-96 top-8 absolute bg-white rounded-2xl shadow">
                <div class="w-32 h-11 left-[21.50px] top-[17.50px] absolute">
                    <div class="w-24 h- left-0 top-0 absolute text-slate-400 text-sm font-bold font-inter leading-tight">Today’s Users</div>
                    <div class="w-20 h-6 left-0 top-[19px] absolute text-gray-700 text-base font-bold font-['Inter'] leading-tight">2,300</div>
                    <div class="w-11 h-5 left-[83px] top-[19px] absolute text-green-400 text-base font-bold font-['Inter'] leading-tight">+5%</div>
                </div>
                <div class="w-11 h-11 left-[319.50px] top-[17.50px] absolute">
                    <div class="w-11 h-11 left-0 top-0 absolute bg-slate-500 rounded-xl shadow"></div>
                    <div class="w-6 h-6 left-[11.25px] top-[11.25px]  absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                            <path d="M12.0001 2.34314C6.95209 2.34314 2.85947 6.43577 2.85947 11.4838C2.85947 16.5318 6.95209 20.6244 12.0001 20.6244C17.0481 20.6244 21.1407 16.5318 21.1407 11.4838C21.1407 6.43577 17.0481 2.34314 12.0001 2.34314Z" fill="white" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M12 2.34314C9.44809 2.34314 7.04868 6.43577 7.04868 11.4838C7.04868 16.5318 9.44809 20.6244 12 20.6244C14.5519 20.6244 16.9513 16.5318 16.9513 11.4838C16.9513 6.43577 14.5519 2.34314 12 2.34314Z" fill="white" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M5.90613 5.39008C7.5866 6.58319 9.70212 7.29467 12 7.29467C14.2979 7.29467 16.4134 6.58319 18.0939 5.39008" fill="white"/>
                            <path d="M5.90613 5.39008C7.5866 6.58319 9.70212 7.29467 12 7.29467C14.2979 7.29467 16.4134 6.58319 18.0939 5.39008" stroke="#4F74BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.0939 17.579C16.4134 16.3859 14.2979 15.6744 12 15.6744C9.70212 15.6744 7.5866 16.3859 5.90613 17.579" stroke="#4F74BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 2.34314V20.6244" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M21.1407 11.4835H2.85947" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[382px] h-20 left-80 top-32 absolute mx-8">
            <div class="w-[382px] h-20 left-96 top-8 absolute bg-white rounded-2xl shadow ml-96">
                <div class="w-32 h-11 left-[21.50px] top-[17.50px] absolute justify-center">
                    <div class="w-24 h- left-0 top-0 absolute text-slate-400 text-sm font-bold font-inter leading-tight">New Clients</div>
                    <div class="w-20 h-6 left-0 top-[19px] absolute text-gray-700 text-base font-bold font-['Inter'] leading-tight">+3,052</div>
                    <div class="w-11 h-5 left-[83px] top-[19px] absolute text-green-400 text-base font-bold font-['Inter'] leading-tight">-14%</div>
                </div>
                <div class="w-11 h-11 left-[319.50px] top-[17.50px] absolute">
                    <div class="w-11 h-11 left-0 top-0 absolute bg-slate-500 rounded-xl shadow"></div>
                    <div class="w-6 h-6 left-[11.25px] top-[11.25px]  absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                            <path d="M12.0001 2.34314C6.95209 2.34314 2.85947 6.43577 2.85947 11.4838C2.85947 16.5318 6.95209 20.6244 12.0001 20.6244C17.0481 20.6244 21.1407 16.5318 21.1407 11.4838C21.1407 6.43577 17.0481 2.34314 12.0001 2.34314Z" fill="white" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M12 2.34314C9.44809 2.34314 7.04868 6.43577 7.04868 11.4838C7.04868 16.5318 9.44809 20.6244 12 20.6244C14.5519 20.6244 16.9513 16.5318 16.9513 11.4838C16.9513 6.43577 14.5519 2.34314 12 2.34314Z" fill="white" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M5.90613 5.39008C7.5866 6.58319 9.70212 7.29467 12 7.29467C14.2979 7.29467 16.4134 6.58319 18.0939 5.39008" fill="white"/>
                            <path d="M5.90613 5.39008C7.5866 6.58319 9.70212 7.29467 12 7.29467C14.2979 7.29467 16.4134 6.58319 18.0939 5.39008" stroke="#4F74BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.0939 17.579C16.4134 16.3859 14.2979 15.6744 12 15.6744C9.70212 15.6744 7.5866 16.3859 5.90613 17.579" stroke="#4F74BB" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 2.34314V20.6244" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                            <path d="M21.1407 11.4835H2.85947" stroke="#4F74BB" stroke-width="0.75" stroke-miterlimit="10"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex mt-8 gap-x-5 ml-80">
        <div class="w-[521.193px] h-[355.722px] bg-white rounded-xl shadow"></div>
        <div class="w-[738.623px] h-[355.722px] bg-white rounded-xl shadow"></div>
    </div>

    <div class="inline-flex ml-80 mt-8 gap-x-96">
        <label class="text-black text-xl font-normal font-inter leading-9" >Files</label>
        <label class="text-black text-xl font-normal font-inter leading-9 ml-20" >Pending Approvals</label>
    </div>
    <div>
        <!--May change based on data-->
        <div class="inline-flex ml-80 mt-3 gap-x-96">
            <div class="relative overflow-x-auto left-96 ml-28 w-[736px]">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-white dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Offices
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Owners
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Budget
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Completion
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Accounting
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex -space-x-4 rtl:space-x-reverse">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="" alt="">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                P14,000
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700 dark:text-white">45%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                    <div class="bg-[#4F74BB] h-1.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Finance
                            </th>
                            <td class="px-6 py-4">
                                <div class="flex -space-x-4 rtl:space-x-reverse">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="" alt="">
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                P30,000
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700 dark:text-white">60%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                    <div class="bg-[#4F74BB] h-1.5 rounded-full" style="width: 60%"></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
