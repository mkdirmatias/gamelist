<nav class="hidden md:w-24 md:flex flex-col items-center bg-gray-700 md:py-4">
    <div>
        <img class="w-12" src="{{ asset('img/logo.png') }}" alt="logo">
    </div>

    <ul class="mt-2 text-gray-700 capitalize">
        <li class="mt-3 p-2 text-blue-600 rounded-lg">
            <a href="{{ route('dashboard') }}" class="flex flex-col items-center">
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                    <path
                        d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
                    17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
                    8h-8v10h8V11m-10 4H3v6h8v-6z"
                    ></path>
                </svg>
                <span class="text-xs mt-2">dashBoard</span>
            </a>
        </li>
    </ul>

    <div class="mt-auto flex items-center p-2 text-blue-700 bg-purple-200 rounded-full">
        <a href="https://github.com/mkdirmatias/gamelist" target="_blank">
            <img class="w-8" src="{{ asset('img/github.png') }}" alt="">
        </a>
    </div>
</nav>

<div class="absolute bg-gray-700 bottom-0 top-0 z-20 w-full bg-opacity-40"x-show="menu" >
    <div class="absolute bg-gray-700 bottom-0 top-0 z-20 w-11/12 p-5 overflow-y-scroll" @click.away="{menu = false}">
        <div class="flex justify-between items-center">
            <img class="w-20" src="{{ asset('img/logo.png') }}" alt="logo">
            <i @click="{menu = false}" class="fa fa-times text-white cursor-pointer"></i>
        </div>

        <ul class="mt-5">
            <li class="mt-3 p-2 text-blue-600  border-b border-gray-600 ">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <svg class="fill-current h-10 w-10" viewBox="0 0 24 24">
                        <path
                            d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
                        17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
                        8h-8v10h8V11m-10 4H3v6h8v-6z"
                        ></path>
                    </svg>
                    <span class="text-xs">dashBoard</span>
                </a>
            </li>
        </ul>

        <div class="fixed bottom-5 flex items-center p-2 text-blue-700 bg-purple-200 rounded-full">
            <a href="https://github.com/mkdirmatias/gamelist" target="_blank">
                <img class="w-14" src="{{ asset('img/github.png') }}" alt="">
            </a>
        </div>
    </div>
</div>