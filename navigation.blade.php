<nav x-data="{ open: false }" class="bg-white w-screen dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Primary Navigation Menu -->
    <div class="max-w-100 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <img class="w-80 h-auto left-5 top-1 absolute" src="{{ asset('css/plm-logo--with-header 1.png') }}" />
                    </a>
                </div>
            </div>

            <div class="flex-grow"></div>

            <!-- Search Bar -->
            <div class="flex items-center">
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none" aria-hidden="true">
                        <path d="M20.3778 22.6405L14.6174 16.8801M16.5376 12.0798C16.5376 12.9624 16.3637 13.8362 16.026 14.6516C15.6883 15.467 15.1932 16.2078 14.5692 16.8319C13.9451 17.4559 13.2043 17.951 12.3889 18.2887C11.5736 18.6264 10.6997 18.8002 9.81712 18.8002C8.93458 18.8002 8.06068 18.6264 7.24532 18.2887C6.42996 17.951 5.6891 17.4559 5.06505 16.8319C4.441 16.2078 3.94598 15.467 3.60824 14.6516C3.27051 13.8362 3.09668 12.9624 3.09668 12.0798C3.09668 10.2974 3.80472 8.58807 5.06505 7.32774C6.32538 6.06742 8.03475 5.35938 9.81712 5.35938C11.5995 5.35937 13.3089 6.06742 14.5692 7.32774C15.8295 8.58807 16.5376 10.2974 16.5376 12.0798Z" stroke="#434343" stroke-width="1.92012" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input class="w-96 h-10 pl-10 py-1 bg-zinc-100 rounded-lg flex items-center grow shrink basis-0 text-neutral-700 text-base font-normal font-['Nunito Sans'] leading-normal ml-2" placeholder="Search here"></input>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 relative">
                <x-dropdown align="right" width="48" style="position: absolute; top: -12rem; right: 0;">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div class="relative stroke-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                    <path d="M19.88 9.04991C19.88 11.7082 17.725 13.8632 15.0666 13.8632C12.4083 13.8632 10.2533 11.7082 10.2533 9.04991C10.2533 6.39157 12.4083 4.23657 15.0666 4.23657C17.725 4.23657 19.88 6.39157 19.88 9.04991Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.0666 17.4732C10.4146 17.4732 6.64331 21.2445 6.64331 25.8966H23.49C23.49 21.2445 19.7187 17.4732 15.0666 17.4732Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="ml-2 font-['Inter'">{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="font-bold border-b hover:bg-blue-700 hover:text-white active:bg-[#4F74BB] rounded-md">
                            {{ __('My Account') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" class="hover:bg-blue-700 hover:text-[#EFF0FF] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md flex items-center justify-between stroke-[#71717A] hover:stroke-white"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}

                                    <svg class="w-[12px] h-[12px]" viewBox="0 0 14 14" fill="none">
                                        <path d="M5 13H2.33333C1.97971 13 1.64057 12.8595 1.39052 12.6095C1.14048 12.3594 1 12.0203 1 11.6667V2.33333C1 1.97971 1.14048 1.64057 1.39052 1.39052C1.64057 1.14048 1.97971 1 2.33333 1H5M9.66667 10.3333L13 7M13 7L9.66667 3.66667M13 7H5"/>
                                    </svg>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md
                            text-gray-400 dark:text-gray-500 hover:text-indigo-50 dark:hover:text-indigo-50
                            bg-gray-100 dark:bg-gray-900 hover:bg-slate-500 active:bg-cyan-700
                            rounded-md focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900
                            focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            @yield('dashboard')
            </x-responsive-nav-link>
        </div>
    </div>

    <!--Side Navigation-->
    <div class="absolute w-[276.96px] h-full left-0 top-20 h-full bg-[#2D349A] text-white w-64 flex flex-col items-center">
        <div class="w-[228.12px] h-11 text-white text-2xl font-semibold font-['Inter'] leading-9 ml-12 mt-4">Accounting</div>
            <!-- Dashboard Section -->
            <a href="{{ route('dashboard') }}" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M7.51562 19.1467V10.8134H12.5156V19.1467M2.51562 8.31338L10.0156 2.48004L17.5156 8.31338V17.48C17.5156 17.9221 17.34 18.346 17.0275 18.6586C16.7149 18.9711 16.291 19.1467 15.849 19.1467H4.18229C3.74026 19.1467 3.31634 18.9711 3.00378 18.6586C2.69122 18.346 2.51563 17.9221 2.51562 17.48V8.31338Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                </div>
                <div class="text-white text-xl font-normal font-sans leading-7 ml-3 font-['Nunito Sans'] ">Dashboard</div>
            </a>
            <!-- Profile Section -->
            <a href="{{ route('profile.edit') }}" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M12.0156 13.44C14.777 13.44 17.0156 11.2014 17.0156 8.44C17.0156 5.67858 14.777 3.44 12.0156 3.44C9.2542 3.44 7.01562 5.67858 7.01562 8.44C7.01562 11.2014 9.2542 13.44 12.0156 13.44ZM12.0156 13.44C14.1374 13.44 16.1722 14.2829 17.6725 15.7831C19.1728 17.2834 20.0156 19.3183 20.0156 21.44M12.0156 13.44C9.89389 13.44 7.85906 14.2829 6.35877 15.7831C4.85848 17.2834 4.01563 19.3183 4.01562 21.44" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="text-white text-xl font-normal font-sans leading-7 ml-3 font-['Nunito Sans'] ">My Profile</div>
            </a>

             <!-- Notifications Section -->
             <button type="submit" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                    <div class="w-5 h-5 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <path d="M8.599 18.1934C8.73848 18.4471 8.94354 18.6587 9.19274 18.806C9.44194 18.9534 9.72615 19.0312 10.0157 19.0312C10.3052 19.0312 10.5894 18.9534 10.8386 18.806C11.0878 18.6587 11.2928 18.4471 11.4323 18.1934M5.01562 7.36005C5.01562 6.03396 5.54241 4.76219 6.48009 3.82451C7.41777 2.88683 8.68954 2.36005 10.0156 2.36005C11.3417 2.36005 12.6135 2.88683 13.5512 3.82451C14.4888 4.76219 15.0156 6.03396 15.0156 7.36005C15.0156 13.1934 17.5156 14.86 17.5156 14.86H2.51562C2.51562 14.86 5.01562 13.1934 5.01562 7.36005Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="text-white text-xl font-normal font-sans leading-7 ml-3 font-['Nunito Sans'] ">Notifications</div>
            </button>

            <!-- Workflow Section -->
            <button type="submit" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                    <div class="w-5 h-5 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <g clip-path="url(#clip0_1946_6173)">
                                <path d="M2.51562 9.2334L18.349 1.7334L10.849 17.5667L9.18229 10.9001L2.51562 9.2334Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1946_6173">
                                    <rect width="20" height="20" fill="white" transform="translate(0.015625 0.0667114)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="text-white text-xl font-normal font-sans leading-7 ml-3 font-['Nunito Sans'] ">Workflow</div>
            </button>

            <!-- Files Section -->
            <button type="submit" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                    <div class="w-5 h-5 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <g clip-path="url(#clip0_1946_6880)">
                                <path d="M1.68237 8.65334H18.349M3.34904 16.9867H16.6824C17.1244 16.9867 17.5483 16.8111 17.8609 16.4985C18.1734 16.186 18.349 15.762 18.349 15.32V6.98667C18.349 6.54465 18.1734 6.12072 17.8609 5.80816C17.5483 5.4956 17.1244 5.32001 16.6824 5.32001H10.074C9.79953 5.31859 9.52962 5.24938 9.28829 5.11854C9.04696 4.9877 8.84169 4.79928 8.69071 4.57001L8.00737 3.57001C7.85639 3.34074 7.65112 3.15231 7.40979 3.02147C7.16846 2.89063 6.89855 2.82143 6.62404 2.82001H3.34904C2.90701 2.82001 2.48309 2.9956 2.17053 3.30816C1.85797 3.62072 1.68237 4.04465 1.68237 4.48667V15.32C1.68237 16.2367 2.43237 16.9867 3.34904 16.9867Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1946_6880">
                                    <rect width="20" height="20" fill="white" transform="translate(0.015625 0.320007)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="text-white text-xl font-normal font-sans leading-7 ml-3 font-['Nunito Sans'] ">Files</div>
            </button>

            <!-- Settings Section -->
            <button type="submit" class="w-56 mt-52 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                    <div class="w-5 h-5 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M10.3923 2.23335H10.0257C9.58363 2.23335 9.1597 2.40895 8.84714 2.72151C8.53458 3.03407 8.35899 3.45799 8.35899 3.90002V4.05002C8.35869 4.34229 8.28153 4.62934 8.13527 4.88238C7.989 5.13542 7.77877 5.34555 7.52565 5.49169L7.16732 5.70002C6.91395 5.8463 6.62655 5.92331 6.33399 5.92331C6.04142 5.92331 5.75402 5.8463 5.50065 5.70002L5.37565 5.63335C4.99321 5.41274 4.53885 5.35289 4.11232 5.46694C3.68579 5.581 3.32195 5.85963 3.10065 6.24169L2.91732 6.55835C2.6967 6.9408 2.63686 7.39516 2.75091 7.82168C2.86496 8.24821 3.1436 8.61206 3.52565 8.83335L3.65065 8.91669C3.90255 9.06211 4.112 9.27093 4.25819 9.52238C4.40439 9.77383 4.48223 10.0592 4.48399 10.35V10.775C4.48515 11.0687 4.40869 11.3575 4.26236 11.6121C4.11602 11.8667 3.90499 12.0782 3.65065 12.225L3.52565 12.3C3.1436 12.5213 2.86496 12.8852 2.75091 13.3117C2.63686 13.7382 2.6967 14.1926 2.91732 14.575L3.10065 14.8917C3.32195 15.2737 3.68579 15.5524 4.11232 15.6664C4.53885 15.7805 4.99321 15.7206 5.37565 15.5L5.50065 15.4334C5.75402 15.2871 6.04142 15.2101 6.33399 15.2101C6.62655 15.2101 6.91395 15.2871 7.16732 15.4334L7.52565 15.6417C7.77877 15.7878 7.989 15.9979 8.13527 16.251C8.28153 16.504 8.35869 16.7911 8.35899 17.0834V17.2334C8.35899 17.6754 8.53458 18.0993 8.84714 18.4119C9.1597 18.7244 9.58363 18.9 10.0257 18.9H10.3923C10.8343 18.9 11.2583 18.7244 11.5708 18.4119C11.8834 18.0993 12.059 17.6754 12.059 17.2334V17.0834C12.0593 16.7911 12.1364 16.504 12.2827 16.251C12.429 15.9979 12.6392 15.7878 12.8923 15.6417L13.2507 15.4334C13.504 15.2871 13.7914 15.2101 14.084 15.2101C14.3765 15.2101 14.664 15.2871 14.9173 15.4334L15.0423 15.5C15.4248 15.7206 15.8791 15.7805 16.3057 15.6664C16.7322 15.5524 17.096 15.2737 17.3173 14.8917L17.5007 14.5667C17.7213 14.1842 17.7811 13.7299 17.6671 13.3034C17.553 12.8768 17.2744 12.513 16.8923 12.2917L16.7673 12.225C16.513 12.0782 16.302 11.8667 16.1556 11.6121C16.0093 11.3575 15.9328 11.0687 15.934 10.775V10.3584C15.9328 10.0647 16.0093 9.77589 16.1556 9.52126C16.302 9.26663 16.513 9.05519 16.7673 8.90835L16.8923 8.83335C17.2744 8.61206 17.553 8.24821 17.6671 7.82168C17.7811 7.39516 17.7213 6.9408 17.5007 6.55835L17.3173 6.24169C17.096 5.85963 16.7322 5.581 16.3057 5.46694C15.8791 5.35289 15.4248 5.41274 15.0423 5.63335L14.9173 5.70002C14.664 5.8463 14.3765 5.92331 14.084 5.92331C13.7914 5.92331 13.504 5.8463 13.2507 5.70002L12.8923 5.49169C12.6392 5.34555 12.429 5.13542 12.2827 4.88238C12.1364 4.62934 12.0593 4.34229 12.059 4.05002V3.90002C12.059 3.45799 11.8834 3.03407 11.5708 2.72151C11.2583 2.40895 10.8343 2.23335 10.3923 2.23335Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.209 13.0667C11.5897 13.0667 12.709 11.9474 12.709 10.5667C12.709 9.18597 11.5897 8.06669 10.209 8.06669C8.82827 8.06669 7.70898 9.18597 7.70898 10.5667C7.70898 11.9474 8.82827 13.0667 10.209 13.0667Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="text-white text-xl font-normal font-sans leading-7 ml-3 font-['Nunito Sans']">Settings</div>
            </button>
        </div>
    </div>
</nav>
