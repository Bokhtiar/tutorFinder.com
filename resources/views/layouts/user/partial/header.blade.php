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
                <li class="px-2 text-xl font-mono"><a href="{{ url('/') }}">Home</a></li>
                <li class="px-2 text-xl font-mono"><a href="{{ url('/') }}#about">About</a></li>
                <li class="px-2 text-xl font-mono"><a href="{{ url('/') }}#tutor">Tutor</a></li>
                <li class="px-2 text-xl font-mono"><a href="{{ url('/') }}#service">Services</a></li>
                <li class="px-2 text-xl font-mono"><a href="{{ url('/') }}#contact">Contact Us</a></li>
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
                        <li class="text-xl font-mono">
                            <a class="@route('dashboard')">
                                Dashboard
                                <span class="badge">go</span>
                            </a>
                        </li>
                        @if (Auth::check())
                            <li><a @route('logouts')>Logout</a></li>
                        @else
                            <li><a href="@route('login')">Login</a></li>
                        @endif

                    </ul>
                </div>
            </ul>
        </div>
    </div>
</section>
