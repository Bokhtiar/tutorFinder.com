<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                    <img class="rounded-full h-[560px] w-[560px] mx-auto"
                        src="https://thetrainingassociates.com/wp-content/uploads/2019/09/AdobeStock_175567791.jpeg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- banner section end --}}

    {{-- better learing better result start here --}}
    <section class="container mx-auto my-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            {{-- first grid start here --}}
            <div class="">
                <img class=" rounded-xl"
                    src="https://tiptopbrain.com/wp-content/uploads/2020/09/student-doing-math-6-tips.jpeg"
                    alt="">
            </div>
            {{-- first grid end here --}}
            {{-- secound grid start here --}}
            <div class="mt-5">
                <h3 class=" text-3xl text-green-600">Better learing better result</h3>
                <p class="my-10 text-5xl font-bold">
                    Online educational platform that fit for every one
                </p>
                <p class="text-xl text-gray-400 my-10">
                    The best online course platform for creating, selling and promoting your online courses. Start
                    monetizing your skills, experiences and your audience.
                    Engage learners with interactive videos, ebooks, 1:1 & group sessions, assessments, certificates,
                    SCORMs, surveys, and much more.
                </p>
                @component('components.primary_button', [
                    'name' => 'Explore more about us',
                    'colorfull' => true,
                ])
                @endcomponent
            </div>
            {{-- secound grid end here --}}
        </div>
    </section>
    {{-- better learing better result end here --}}

    {{-- counter start here --}}
    <section class="container mx-auto my-40">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            {{-- first counter start here --}}
            <div class="w-80 h-48 bg-gray-100 rounded text-center">
                <span class=" rounded-full text-white p-5 bg-green-500 my-6 material-symbols-outlined">
                    conditions
                </span>
                <h3 class="text-3xl text-gray-400 font-bold">Total tutor</h3>
                <h4 class="text-xl text-gray-400 font-bold">10k +</h4>
            </div>
            {{-- first counter end here --}}

            {{-- secound counter start here --}}
            <div class="w-80 h-48 bg-gray-100 rounded text-center">
                <span class=" rounded-full text-white p-5 bg-green-500 my-6 material-symbols-outlined">
                    groups
                </span>
                <h3 class="text-3xl text-gray-400 font-bold ">Total student</h3>
                <h4 class="text-xl text-gray-400 font-bold">10k +</h4>
            </div>
            {{-- secound counter end here --}}

            {{-- third counter start here --}}
            <div class="w-80 h-48 bg-gray-100 rounded text-center">
                <span class=" rounded-full text-white p-5 bg-green-500 my-6 material-symbols-outlined">
                    menu_book
                </span>
                <h3 class="text-3xl text-gray-400 font-bold">Total Subject</h3>
                <h4 class="text-xl text-gray-400 font-bold">10k +</h4>
            </div>
            {{-- third counter end here --}}

            {{-- fourth counter start here --}}
            <div class="w-80 h-48 bg-gray-100 rounded text-center">
                <span class=" rounded-full text-white p-5 bg-green-500 my-6 material-symbols-outlined">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </span>
                <h3 class="text-3xl text-gray-400 font-bold">Total admin</h3>
                <h4 class="text-xl text-gray-400 font-bold">10k +</h4>
            </div>
            {{-- fourth counter end here --}}
        </div>
    </section>
    {{-- counter end here --}}

    {{-- services start here --}}
    <section class="container mx-auto">
        <h3 class="text-center font-bold text-3xl my-5 text-green-500">All These Services For You</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            {{-- first counter start here --}}
            <div class="w-80 h-60 bg-gray-50 rounded text-center">
                <div class="">
                    <img class=" rounded-full h-24 w-24 mx-auto my-7"
                        src="https://attraxcdnprod1-freshed3dgayb7c3.z01.azurefd.net/1481118/739eb969-c402-42a7-9764-652d438952f3/2023.17000.89/img/2e31cb98-25a9-4b0e-1466-08d95833968a"
                        alt="">
                </div>

                <h3 class="text-xl text-green-400 font-bold">Professional guide</h3>
                <h4 class="text-base text-gray-400">The best online course platform for creating</h4>
            </div>
            {{-- first counter end here --}}

            {{-- secound counter start here --}}
            <div class="w-80 h-60 bg-gray-50 rounded text-center">
                <div class="">
                    <img class=" rounded-full h-24 w-24 mx-auto my-7"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDz3lDSq4-9VytbswmVqDRuGlDtnYvTzymaQ&usqp=CAU"
                        alt="">
                </div>

                <h3 class="text-xl text-green-400 font-bold">Search for course</h3>
                <h4 class="text-base text-gray-400">The best online course platform for creating</h4>
            </div>
            {{-- secound counter end here --}}

            {{-- third counter start here --}}
            <div class="w-80 h-60 bg-gray-50 rounded text-center">
                <div class="">
                    <img class=" rounded-full h-24 w-24 mx-auto my-7"
                        src="data:image/jpeg;base64,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"
                        alt="">
                </div>

                <h3 class="text-xl text-green-400 font-bold">Search for course</h3>
                <h4 class="text-base text-gray-400">The best online course platform for creating</h4>
            </div>
            {{-- third counter end here --}}

            {{-- fourth counter start here --}}
            <div class="w-80 h-60 bg-gray-50 rounded text-center">
                <div class="">
                    <img class=" rounded-full h-24 w-24 mx-auto my-7"
                        src="data:image/jpeg;base64,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"
                        alt="">
                </div>

                <h3 class="text-xl text-green-400 font-bold">Book instructor</h3>
                <h4 class="text-base text-gray-400">The best online course platform for creating</h4>
            </div>
            {{-- fourth counter end here --}}
        </div>
    </section>
    {{-- services end here --}}

    {{-- top intructor start here --}}
    <section class="container mx-auto">
        <h3 class="font-bold text-3xl text-green-500 mt-40 mb-5">Top instructors</h3>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}


            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}


            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}


            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow mt-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">
                <p class="text-center my-3">
                    <span class="font-bold">Bokhtiar toshar</span><br>
                    <span class="text-gray-400">Software eng</span>
                </p> 
                <div class="px-4 flex items-center justify-between">
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg> 
                        <span class="text-gray-400">4.5</span>
                    </p>
                    <span class="text-gray-400">800+ student</span>
                </div>
                <br>
            </div>
            {{-- card end here --}}

        </div>
    </section>
    {{-- top intructor end here --}}

</body>

</html>
