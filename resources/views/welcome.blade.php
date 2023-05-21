<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    {{-- header section start here --}}
    <section class="container mx-auto py-4">
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a href="#" class="">
                    <img class="h-12"
                        src="https://play-lh.googleusercontent.com/bXqShzaPZQpV1EmdqnmCqLFNfFbidLo8AMJylMhkMqXQLY97yIJV04zWb6YV_JM1tg"
                        alt="">
                </a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li class="px-2 text-xl font-mono"><a>Home</a></li>
                    <li class="px-2 text-xl font-mono"><a>About</a></li>
                    <li class="px-2 text-xl font-mono"><a>Tutor</a></li>
                    <li class="px-2 text-xl font-mono"><a>Contact Us</a></li>
                    {{-- <li tabindex="0">
                        <a>
                            Parent
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-base-100">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li> --}}
                    <div class="dropdown dropdown-end ">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWHqFL_XoLC7x1onY_BcwSLskANCrxFYFUxen4UwrqhJeDujbhN70xXCTr4r4Ewc_2lro&usqp=CAU" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                            <li class="px-2 text-xl font-mono">
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    {{-- header section end here --}}

    {{-- banner section start --}}
    <section class="bg-gray-200">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2">
                {{-- left side  --}}
                <div class="col-span-1 py-56">
                    <p class="text-black text-5xl font-bold">A learing platform that <br> helps you to learn <br> faster
                    </p>
                    <p class="text-2xl text-gray-500 py-5">Reference site about Lorem Ipsum Lorem Ipsum, <br> giving
                        information on its origins,</p>
                    <p class="flex items-center gap-3">
                        @component('components.primary_button', [
                            'name' => 'Find Tutor',
                            'colorfull' => true,
                        ])
                        @endcomponent
                        @component('components.primary_button', [
                            'name' => 'Search Tutor',
                            'colorfull' => false,
                        ])
                        @endcomponent
                    </p>
                </div>
                {{-- left side end --}}
                <div class="col-span-1  py-24">
                    <img class="rounded-full h-[560px] w-[560px] mx-auto" src="https://thetrainingassociates.com/wp-content/uploads/2019/09/AdobeStock_175567791.jpeg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- banner section end --}}

</body>

</html>
