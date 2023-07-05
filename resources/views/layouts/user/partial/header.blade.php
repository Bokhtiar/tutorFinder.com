<section class="container mx-auto py-4">
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a href="{{url('/')}}" class="">
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
                <div class="dropdown dropdown-end ">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWHqFL_XoLC7x1onY_BcwSLskANCrxFYFUxen4UwrqhJeDujbhN70xXCTr4r4Ewc_2lro&usqp=CAU" />
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        @if (Auth::check())
                        <li class="text-xl font-mono">
                                <a class="" href="@route('dashboard')">
                                    Dashboard
                                    <span class="badge">go</span>
                                </a>
                            </li>
                            <li><a href="@route('logouts')">Logout</a></li>
                        @else
                            <li><a href="@route('login')">Login</a></li>
                        @endif
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</section>
