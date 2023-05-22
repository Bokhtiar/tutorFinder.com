<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
    <section class="container mx-auto my-20"  data-aos="fade-up"
    data-aos-duration="3000">
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
    <section class="container mx-auto my-40" data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine">
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
    <section class="container mx-auto" data-aos="fade-left"
    data-aos-offset="500"
    data-aos-duration="500">
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
    <section class="container mx-auto" data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine">
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
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

    {{-- what people aobut say start here --}}
    <section class="bg-gray-100" data-aos="zoom-in">
        <div class="container mx-auto my-40">
            <h3 class="font-bold text-3xl text-green-500 text-center pt-16  my-24">What people about say us</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 px-72">
                {{-- review image start here --}}
                <div class="mx-auto col-span-1">
                    <img class="h-72 w-72 rounded-full"
                        src="https://i.pinimg.com/236x/e1/5c/50/e15c50c1757aa45295f5635ec4969f57--long-sleeve-blouses-shirt-blouses.jpg"
                        alt="">
                </div>
                {{-- review image end here --}}
                {{-- review content start here --}}
                <div class="text-gray-400 my-10 col-span-2 leading-8">
                    Get involved in our global effort to empower teachers and students through education. We create
                    equitable classrooms by providing teachers with technology and coaching.
                    Get involved in our global effort to empower teachers and students through education. We create
                    equitable classrooms by providing teachers with technology and coaching.
                    <div class="mt-20">
                        <h4 class="font-bold text-green-500 text-xl">Bokhtiar toshar</h4>
                        <span class="text-gray-500">Brother</span>
                    </div>
                </div>

                {{-- review content end here --}}
            </div>
        </div>
    </section>
    {{-- what people aobut say end here --}}

    {{-- professional tutor start here --}}
    <section class=" container mx-auto" data-aos="fade-left"
    data-aos-offset="500"
    data-aos-duration="500">
        <h3 class="font-bold text-3xl text-green-500">Professional For Guidance</h3>

        {{-- course  --}}
        <div class=" my-2">
            <a class="btn btn-success my-1 gap-2" href="">All</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfasdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfas</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfasdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdffads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">assdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfasdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfas</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfasdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdffads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">assdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfasdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfas</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdfasdfads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">asdffads</a>
            <a class="btn btn-outline btn-success my-1 gap-2" href="">assdfads</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mt-8">
            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}

            {{-- card start here --}}
            <div class="mx-auto shadow my-3">
                <img class="h-48 rounded-md"
                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHV0b3J8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="">

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="font-bold">Bokhtiar toshar</span>
                    <p class="flex items-center gap-1">
                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>First star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <span class="text-gray-400">4.5</span>
                    </p>
                </div>

                <div class="flex items-center justify-between px-3 text-gray-400 mb-2">
                    <span class="font-bold">Software eng.</span>
                    <span>800+ Student</span>
                </div>
                <hr class="py-1">
                <div class="flex items-center justify-between px-3">
                    <span class="text-gray-400">Price: 23300Tk</span>
                    <a class="btn btn-sm btn-outline btn-success text-white" href="">Book</a>
                </div>
                <br>
            </div>
            {{-- card end here --}}
        </div>
    </section>
    {{-- professional tutor end here --}}

    {{-- contact us start here --}}
    <section class="my-40" data-aos="zoom-in-left">
        <div class="text-center w-full">

        </div>
        <div
            class=" container mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-3xl text-green-500">Lets talk about everything!</h2>
                    <div class="text-gray-700 mt-8">
                        Hate forms? Send us an <span class="underline">email</span> instead.
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <svg class="w-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        id="ae37f038-3a9e-4b82-ad68-fc94ba16af2a" data-name="Layer 1" viewBox="0 0 1096 574.74">
                        <defs>
                            <linearGradient id="eb6c86d6-45fa-49e0-9a60-1b0612516196" x1="819.07" y1="732.58"
                                x2="819.07" y2="560.46" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="gray" stop-opacity="0.25" />
                                <stop offset="0.54" stop-color="gray" stop-opacity="0.12" />
                                <stop offset="1" stop-color="gray" stop-opacity="0.1" />
                            </linearGradient>
                            <pattern id="ad310e25-2b04-44c8-bb7b-982389166780" data-name="New Pattern 3"
                                width="36.88" height="49.48" patternUnits="userSpaceOnUse"
                                viewBox="0 0 36.88 49.48">
                                <rect width="36.88" height="49.48" fill="none" />
                                <path d="M4.33,13.19c4.5,0,4.51-7,0-7s-4.52,7,0,7Z" />
                                <path d="M4.51,17.16c4.51,0,4.52-7,0-7s-4.51,7,0,7Z" />
                                <path d="M4.51,20.94c4.51,0,4.52-7,0-7s-4.51,7,0,7Z" />
                                <path d="M3.38,24.72c4.51,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path
                                    d="M1.09,28.29l.2.38a3.52,3.52,0,0,0,4.78,1.25,3.58,3.58,0,0,0,1.26-4.79l-.19-.37A3.52,3.52,0,0,0,2.35,23.5a3.59,3.59,0,0,0-1.26,4.79Z" />
                                <path
                                    d="M1.49,30.1l.18.57a3.73,3.73,0,0,0,1.61,2.09,3.59,3.59,0,0,0,2.7.35A3.54,3.54,0,0,0,8.42,28.8l-.18-.56a3.68,3.68,0,0,0-1.61-2.1,3.61,3.61,0,0,0-2.69-.35A3.56,3.56,0,0,0,1.49,30.1Z" />
                                <path
                                    d="M1.58,33.88v.38a3.54,3.54,0,0,0,3.5,3.5,3.56,3.56,0,0,0,3.5-3.5v-.38a3.54,3.54,0,0,0-3.5-3.5,3.57,3.57,0,0,0-3.5,3.5Z" />
                                <path d="M4.89,42.3c4.51,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path
                                    d="M1.77,42v.19a3.54,3.54,0,0,0,3.5,3.5,3.56,3.56,0,0,0,3.5-3.5V42a3.54,3.54,0,0,0-3.5-3.5A3.56,3.56,0,0,0,1.77,42Z" />
                                <path d="M6,49.29c4.5,0,4.51-7,0-7s-4.52,7,0,7Z" />
                                <path d="M10,14.14c4.5,0,4.51-7,0-7s-4.52,7,0,7Z" />
                                <path d="M6.59,20.94c4.51,0,4.52-7,0-7s-4.51,7,0,7Z" />
                                <path d="M8.48,27c4.51,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path d="M8.48,29.26c4.51,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path d="M14.91,33.79c4.5,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path d="M9.81,38.52c4.5,0,4.51-7,0-7s-4.52,7,0,7Z" />
                                <path d="M10.56,45.13c4.51,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path d="M10.56,49.48c4.51,0,4.51-7,0-7s-4.51,7,0,7Z" />
                                <path d="M12.83,18.12c2.57,0,2.58-4,0-4s-2.58,4,0,4Z" />
                                <path d="M13,20.39c2.57,0,2.58-4,0-4s-2.58,4,0,4Z" />
                                <path d="M13.1,21v.19a2,2,0,0,0,4,0V21a2,2,0,0,0-4,0Z" />
                                <path d="M15.1,25.87c2.57,0,2.58-4,0-4s-2.58,4,0,4Z" />
                                <path d="M16.61,11.07a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M21.71,16.55a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M16.85,8.94V8.56a1,1,0,0,0-2,0v.38a1,1,0,0,0,2,0Z" />
                                <path d="M16.48,4.78V4.59a1,1,0,0,0-2,0v.19a1,1,0,0,0,2,0Z" />
                                <path d="M15.48,2a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M10.56,2a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M10.37,4.65a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M7.35,6.16a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M11.88,7.1h.38a1,1,0,0,0,0-2h-.38a1,1,0,0,0,0,2Z" />
                                <path
                                    d="M13.28,11l.57,1.32a1,1,0,0,0,1.37.36,1,1,0,0,0,.36-1.37L15,10a1,1,0,0,0-1.37-.36A1,1,0,0,0,13.28,11Z" />
                                <path d="M18.44,19.33v.19a1,1,0,0,0,2,0v-.19a1,1,0,0,0-2,0Z" />
                                <path
                                    d="M20.68,24.93l.19.38c.57,1.15,2.3.14,1.72-1l-.19-.38c-.57-1.15-2.3-.14-1.72,1Z" />
                                <path
                                    d="M22.13,29.38a2.48,2.48,0,0,0-.84,1.86,1,1,0,0,0,2,0,.56.56,0,0,1,.25-.44,1,1,0,0,0,0-1.42,1,1,0,0,0-1.41,0Z" />
                                <path
                                    d="M20.32,33.41l-.54,1.71c-.38,1.23,1.55,1.76,1.93.53l.54-1.71c.38-1.23-1.55-1.76-1.93-.53Z" />
                                <path d="M19.44,37h-.19a1,1,0,0,0,0,2h.19a1,1,0,0,0,0-2Z" />
                                <path
                                    d="M17.64,41.5l-.19.38c-.58,1.15,1.15,2.16,1.72,1l.19-.38c.58-1.15-1.15-2.16-1.72-1Z" />
                                <path d="M15.8,47.87v.56a1,1,0,0,0,2,0v-.56a1,1,0,0,0-2,0Z" />
                                <path d="M14.34,49.43a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M14.34,41.31a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path
                                    d="M17.13,36.47a2,2,0,0,0,1-1.64,1,1,0,0,0-2,0c0-.13.19-.2,0-.08-1.15.58-.14,2.3,1,1.72Z" />
                                <path d="M17.37,31.29a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M18.12,28.46a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path
                                    d="M19,24.94l.19-.38c.58-1.15-1.15-2.16-1.72-1l-.19.38c-.58,1.15,1.15,2.16,1.72,1Z" />
                                <path d="M17.93,16a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M24.64,16.05l.57.94a1,1,0,0,0,1.72-1L26.37,15a1,1,0,0,0-1.73,1Z" />
                                <path d="M34.88,29.72v.19a1,1,0,0,0,2,0v-.19a1,1,0,0,0-2,0Z" />
                                <path d="M24,39.23a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path d="M22.85,29a1,1,0,0,0,0-2,1,1,0,0,0,0,2Z" />
                                <path
                                    d="M18.24,21.9l.57-.56c.93-.89-.48-2.3-1.41-1.41l-.58.56c-.93.89.49,2.3,1.42,1.41Z" />
                            </pattern>
                            <linearGradient id="a964f849-fa65-4178-8cc4-fb8fb10b3617" x1="462.91" y1="660.68"
                                x2="462.91" y2="559.69" xlink:href="#eb6c86d6-45fa-49e0-9a60-1b0612516196" />
                        </defs>
                        <title>contact us</title>
                        <g opacity="0.1">
                            <ellipse cx="479.42" cy="362.12" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <path
                                d="M540.43,461a18,18,0,0,0,2.38-9.11c0-8.23-5.1-14.9-11.39-14.9S520,443.68,520,451.91a18,18,0,0,0,2.38,9.11,18.61,18.61,0,0,0,0,18.21,18.61,18.61,0,0,0,0,18.21,17.94,17.94,0,0,0-2.38,9.11c0,8.22,5.1,14.9,11.38,14.9s11.39-6.68,11.39-14.9a17.94,17.94,0,0,0-2.38-9.11,18.61,18.61,0,0,0,0-18.21,18.61,18.61,0,0,0,0-18.21Z"
                                transform="translate(-52 -162.63)" fill="#3f3d56" />
                            <ellipse cx="479.42" cy="271.07" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <ellipse cx="479.42" cy="252.86" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <path
                                d="M488.82,290.86a53.08,53.08,0,0,1-4.24-6.24l29.9-4.91-32.34.24a54.62,54.62,0,0,1-1-43.2l43.39,22.51-40-29.42a54.53,54.53,0,1,1,90,61,54.54,54.54,0,0,1,6.22,9.94L541.92,321l41.39-13.89a54.53,54.53,0,0,1-8.79,51.2,54.52,54.52,0,1,1-85.7,0,54.52,54.52,0,0,1,0-67.42Z"
                                transform="translate(-52 -162.63)" fill="#667eea" />
                            <path
                                d="M586.19,324.57a54.27,54.27,0,0,1-11.67,33.71,54.52,54.52,0,1,1-85.7,0C481.51,349,586.19,318.45,586.19,324.57Z"
                                transform="translate(-52 -162.63)" opacity="0.1" />
                        </g>
                        <g opacity="0.1">
                            <ellipse cx="612.28" cy="330.26" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <path
                                d="M671,445.26a13.43,13.43,0,0,0,1.77-6.8c0-6.15-3.81-11.14-8.5-11.14s-8.51,5-8.51,11.14a13.33,13.33,0,0,0,1.78,6.8,13.9,13.9,0,0,0,0,13.61,13.9,13.9,0,0,0,0,13.61,13.33,13.33,0,0,0-1.78,6.8c0,6.15,3.81,11.14,8.51,11.14s8.5-5,8.5-11.14a13.43,13.43,0,0,0-1.77-6.8,14,14,0,0,0,0-13.61,14,14,0,0,0,0-13.61Z"
                                transform="translate(-52 -162.63)" fill="#3f3d56" />
                            <ellipse cx="612.28" cy="262.22" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <ellipse cx="612.28" cy="248.61" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <path
                                d="M632.44,318.11a39,39,0,0,1-3.17-4.66l22.35-3.67-24.17.18a40.84,40.84,0,0,1-.78-32.29L659.1,294.5l-29.91-22a40.75,40.75,0,1,1,67.29,45.6,41.2,41.2,0,0,1,4.65,7.43l-29,15.07,30.93-10.38a40.76,40.76,0,0,1-6.57,38.26,40.74,40.74,0,1,1-64,0,40.74,40.74,0,0,1,0-50.38Z"
                                transform="translate(-52 -162.63)" fill="#667eea" />
                            <path
                                d="M705.2,343.3a40.57,40.57,0,0,1-8.72,25.19,40.74,40.74,0,1,1-64,0C627,361.56,705.2,338.73,705.2,343.3Z"
                                transform="translate(-52 -162.63)" opacity="0.1" />
                        </g>
                        <g opacity="0.1">
                            <ellipse cx="1038.58" cy="322.12" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <path
                                d="M1081.57,421a18,18,0,0,1-2.38-9.11c0-8.23,5.1-14.9,11.39-14.9s11.38,6.67,11.38,14.9a18,18,0,0,1-2.38,9.11,18.61,18.61,0,0,1,0,18.21,18.61,18.61,0,0,1,0,18.21,17.94,17.94,0,0,1,2.38,9.11c0,8.22-5.1,14.9-11.38,14.9s-11.39-6.68-11.39-14.9a17.94,17.94,0,0,1,2.38-9.11,18.61,18.61,0,0,1,0-18.21,18.61,18.61,0,0,1,0-18.21Z"
                                transform="translate(-52 -162.63)" fill="#3f3d56" />
                            <ellipse cx="1038.58" cy="231.07" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <ellipse cx="1038.58" cy="212.86" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <path
                                d="M1133.18,250.86a53.08,53.08,0,0,0,4.24-6.24l-29.9-4.91,32.34.24a54.62,54.62,0,0,0,1-43.2l-43.39,22.51,40-29.42a54.53,54.53,0,1,0-90,61,54.54,54.54,0,0,0-6.22,9.94L1080.08,281l-41.39-13.89a54.53,54.53,0,0,0,8.79,51.2,54.52,54.52,0,1,0,85.7,0,54.52,54.52,0,0,0,0-67.42Z"
                                transform="translate(-52 -162.63)" fill="#667eea" />
                            <path
                                d="M1035.81,284.57a54.27,54.27,0,0,0,11.67,33.71,54.52,54.52,0,1,0,85.7,0C1140.49,309,1035.81,278.45,1035.81,284.57Z"
                                transform="translate(-52 -162.63)" opacity="0.1" />
                        </g>
                        <g opacity="0.1">
                            <ellipse cx="928.72" cy="324.26" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <path
                                d="M974,439.26a13.43,13.43,0,0,1-1.77-6.8c0-6.15,3.81-11.14,8.5-11.14s8.51,5,8.51,11.14a13.33,13.33,0,0,1-1.78,6.8,13.9,13.9,0,0,1,0,13.61,13.9,13.9,0,0,1,0,13.61,13.33,13.33,0,0,1,1.78,6.8c0,6.15-3.81,11.14-8.51,11.14s-8.5-5-8.5-11.14a13.43,13.43,0,0,1,1.77-6.8,14,14,0,0,1,0-13.61,14,14,0,0,1,0-13.61Z"
                                transform="translate(-52 -162.63)" fill="#3f3d56" />
                            <ellipse cx="928.72" cy="256.22" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <ellipse cx="928.72" cy="242.61" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <path
                                d="M1012.56,312.11a39,39,0,0,0,3.17-4.66l-22.35-3.67,24.17.18a40.84,40.84,0,0,0,.78-32.29L985.9,288.5l29.91-22a40.75,40.75,0,1,0-67.29,45.6,41.2,41.2,0,0,0-4.65,7.43l29,15.07L942,324.23a40.76,40.76,0,0,0,6.57,38.26,40.74,40.74,0,1,0,64,0,40.74,40.74,0,0,0,0-50.38Z"
                                transform="translate(-52 -162.63)" fill="#667eea" />
                            <path
                                d="M939.8,337.3a40.57,40.57,0,0,0,8.72,25.19,40.74,40.74,0,1,0,64,0C1018,355.56,939.8,332.73,939.8,337.3Z"
                                transform="translate(-52 -162.63)" opacity="0.1" />
                        </g>
                        <g opacity="0.1">
                            <ellipse cx="61.59" cy="322.12" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <path
                                d="M122.59,421a18,18,0,0,0,2.38-9.11c0-8.23-5.1-14.9-11.38-14.9s-11.38,6.67-11.38,14.9a18,18,0,0,0,2.37,9.11,18.67,18.67,0,0,0,0,18.21,18.67,18.67,0,0,0,0,18.21,17.93,17.93,0,0,0-2.37,9.11c0,8.22,5.09,14.9,11.38,14.9S125,474.77,125,466.55a17.94,17.94,0,0,0-2.38-9.11,18.61,18.61,0,0,0,0-18.21,18.61,18.61,0,0,0,0-18.21Z"
                                transform="translate(-52 -162.63)" fill="#3f3d56" />
                            <ellipse cx="61.59" cy="231.07" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <ellipse cx="61.59" cy="212.86" rx="11.38" ry="14.9" fill="#3f3d56" />
                            <path
                                d="M71,250.86a54.33,54.33,0,0,1-4.24-6.24l29.91-4.91L64.3,240a54.62,54.62,0,0,1-1-43.2l43.4,22.51-40-29.42a54.52,54.52,0,1,1,90,61,54.54,54.54,0,0,1,6.22,9.94L124.08,281l41.4-13.89a54.59,54.59,0,0,1-8.8,51.2,54.52,54.52,0,1,1-85.7,0,54.52,54.52,0,0,1,0-67.42Z"
                                transform="translate(-52 -162.63)" fill="#667eea" />
                            <path
                                d="M168.35,284.57a54.27,54.27,0,0,1-11.67,33.71,54.52,54.52,0,1,1-85.7,0C63.67,309,168.35,278.45,168.35,284.57Z"
                                transform="translate(-52 -162.63)" opacity="0.1" />
                        </g>
                        <g opacity="0.1">
                            <ellipse cx="171.44" cy="324.26" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <path
                                d="M230.17,439.26a13.43,13.43,0,0,0,1.77-6.8c0-6.15-3.8-11.14-8.5-11.14s-8.51,5-8.51,11.14a13.43,13.43,0,0,0,1.78,6.8,13.9,13.9,0,0,0,0,13.61,13.9,13.9,0,0,0,0,13.61,13.43,13.43,0,0,0-1.78,6.8c0,6.15,3.81,11.14,8.51,11.14s8.5-5,8.5-11.14a13.43,13.43,0,0,0-1.77-6.8,14,14,0,0,0,0-13.61,14,14,0,0,0,0-13.61Z"
                                transform="translate(-52 -162.63)" fill="#3f3d56" />
                            <ellipse cx="171.44" cy="256.22" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <ellipse cx="171.44" cy="242.61" rx="8.51" ry="11.13" fill="#3f3d56" />
                            <path
                                d="M191.6,312.11a40.21,40.21,0,0,1-3.17-4.66l22.35-3.67-24.17.18a40.84,40.84,0,0,1-.78-32.29l32.43,16.83-29.91-22a40.75,40.75,0,1,1,67.29,45.6,40.12,40.12,0,0,1,4.65,7.43l-29,15.07,30.93-10.38a40.76,40.76,0,0,1-6.57,38.26,40.74,40.74,0,1,1-64,0,40.74,40.74,0,0,1,0-50.38Z"
                                transform="translate(-52 -162.63)" fill="#667eea" />
                            <path
                                d="M264.36,337.3a40.57,40.57,0,0,1-8.72,25.19,40.74,40.74,0,1,1-64,0C186.14,355.56,264.36,332.73,264.36,337.3Z"
                                transform="translate(-52 -162.63)" opacity="0.1" />
                        </g>
                        <ellipse cx="548" cy="493.13" rx="548" ry="8.86" fill="#667eea"
                            opacity="0.1" />
                        <ellipse cx="548" cy="565.88" rx="548" ry="8.86" fill="#667eea"
                            opacity="0.1" />
                        <ellipse cx="548" cy="341.3" rx="548" ry="8.86" fill="#667eea"
                            opacity="0.1" />
                        <ellipse cx="548" cy="417.21" rx="548" ry="8.86" fill="#667eea"
                            opacity="0.1" />
                        <path
                            d="M860.79,273a18.3,18.3,0,0,0-10.6,1.16,15.65,15.65,0,0,1-12.74,0,17.88,17.88,0,0,0-15,.29,9.24,9.24,0,0,1-4.31,1.08c-6.08,0-11.13-6.12-12.18-14.19a11.88,11.88,0,0,0,3-3.27c3.56-5.74,9.07-9.43,15.27-9.43s11.64,3.64,15.2,9.32a11.68,11.68,0,0,0,10.09,5.54h.16C854.57,263.45,858.76,267.33,860.79,273Z"
                            transform="translate(-52 -162.63)" fill="#667eea" opacity="0.1" />
                        <path
                            d="M879.3,247.65l-9.82,6.22,6-10.84a9.7,9.7,0,0,0-5.94-2.11h-.16a11.35,11.35,0,0,1-2-.15L864,242.88l1.43-2.6a11.79,11.79,0,0,1-5.83-4.42l-6,3.78,3.76-6.84c-3.48-4.18-8.18-6.74-13.34-6.74-6.2,0-11.71,3.68-15.28,9.42a11.41,11.41,0,0,1-10.09,5.44h-.33c-6.84,0-12.38,7.75-12.38,17.31s5.54,17.32,12.38,17.32a9.39,9.39,0,0,0,4.31-1.08,17.86,17.86,0,0,1,15-.3,15.55,15.55,0,0,0,12.74,0,17.92,17.92,0,0,1,14.86.29,9.3,9.3,0,0,0,4.26,1.06c6.84,0,12.38-7.76,12.38-17.32A21.93,21.93,0,0,0,879.3,247.65Z"
                            transform="translate(-52 -162.63)" fill="#667eea" opacity="0.1" />
                        <path
                            d="M443.26,267.59a12.84,12.84,0,0,0-7.43.81,10.92,10.92,0,0,1-8.91,0,12.48,12.48,0,0,0-10.49.21,6.62,6.62,0,0,1-3,.75c-4.25,0-7.79-4.28-8.53-9.93a8.32,8.32,0,0,0,2.13-2.29c2.49-4,6.35-6.6,10.69-6.6s8.15,2.55,10.64,6.52a8.19,8.19,0,0,0,7.07,3.88h.11C438.9,260.92,441.83,263.64,443.26,267.59Z"
                            transform="translate(-52 -162.63)" fill="#667eea" opacity="0.1" />
                        <path
                            d="M456.21,249.86l-6.87,4.36,4.17-7.59a6.75,6.75,0,0,0-4.15-1.48h-.12a7.49,7.49,0,0,1-1.42-.11l-2.33,1.48,1-1.82a8.3,8.3,0,0,1-4.08-3.09l-4.17,2.64,2.64-4.78a12.21,12.21,0,0,0-9.34-4.73c-4.34,0-8.2,2.58-10.69,6.6a8,8,0,0,1-7.07,3.81h-.23c-4.79,0-8.67,5.42-8.67,12.12s3.88,12.12,8.67,12.12a6.5,6.5,0,0,0,3-.76,12.5,12.5,0,0,1,10.48-.2,11.1,11.1,0,0,0,4.49,1,11,11,0,0,0,4.43-.94,12.54,12.54,0,0,1,10.4.2,6.48,6.48,0,0,0,3,.74c4.78,0,8.66-5.43,8.66-12.12A15.33,15.33,0,0,0,456.21,249.86Z"
                            transform="translate(-52 -162.63)" fill="#667eea" opacity="0.1" />
                        <path
                            d="M321.59,346a12.82,12.82,0,0,1,7.42.81,10.94,10.94,0,0,0,8.92,0,12.52,12.52,0,0,1,10.49.2,6.47,6.47,0,0,0,3,.76c4.25,0,7.79-4.29,8.52-9.94a8.15,8.15,0,0,1-2.12-2.29c-2.5-4-6.36-6.59-10.69-6.59s-8.15,2.54-10.65,6.52a8.19,8.19,0,0,1-7.06,3.88h-.11C325.94,339.37,323,342.08,321.59,346Z"
                            transform="translate(-52 -162.63)" fill="#667eea" opacity="0.1" />
                        <path
                            d="M308.63,328.3l6.88,4.36-4.18-7.58a6.79,6.79,0,0,1,4.16-1.49h.11a8.52,8.52,0,0,0,1.43-.1l2.33,1.47-1-1.81a8.29,8.29,0,0,0,4.07-3.09l4.17,2.64L324,317.91a12.2,12.2,0,0,1,9.34-4.72c4.33,0,8.2,2.58,10.69,6.6a8,8,0,0,0,7.06,3.81h.24c4.78,0,8.66,5.43,8.66,12.12s-3.88,12.12-8.66,12.12a6.49,6.49,0,0,1-3-.75,12.48,12.48,0,0,0-10.49-.21,10.86,10.86,0,0,1-4.48,1,11,11,0,0,1-4.44-.94,12.52,12.52,0,0,0-10.39.2,6.48,6.48,0,0,1-3,.74c-4.79,0-8.67-5.42-8.67-12.12A15.44,15.44,0,0,1,308.63,328.3Z"
                            transform="translate(-52 -162.63)" fill="#667eea" opacity="0.1" />
                        <path
                            d="M716.31,652.89c2.61-4.84-.35-10.76-3.75-15.07s-7.56-8.8-7.47-14.29c.13-7.89,8.51-12.56,15.2-16.74a74.3,74.3,0,0,0,13.65-11,20.13,20.13,0,0,0,4.19-5.62c1.39-3.08,1.35-6.6,1.26-10q-.43-16.89-1.67-33.76"
                            transform="translate(-52 -162.63)" fill="none" stroke="#3f3d56"
                            stroke-miterlimit="10" stroke-width="4" />
                        <path
                            d="M750.45,545.85a12.31,12.31,0,0,0-6.15-10.09l-2.76,5.45.09-6.6a12.31,12.31,0,1,0,8.82,11.24Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M728.49,629.17a12.31,12.31,0,0,1-23.24-5,12,12,0,0,1,.8-5,12.32,12.32,0,0,1,23,.13l-7.69,6.26,8.46-2A12.24,12.24,0,0,1,728.49,629.17Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M722.41,605.27a12.31,12.31,0,0,1-3.9-24.15l-.07,5.07,2.79-5.52h0a12.31,12.31,0,1,1,1.15,24.6Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path d="M752.3,585.38a12.31,12.31,0,1,1,5.44-23l-2.17,6L760,564a12.31,12.31,0,0,1-7.74,21.37Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M748.79,549.13c-2.84.31-5.6,1.19-8.46,1.37s-6-.51-7.78-2.72a39.48,39.48,0,0,1-2.28-4,8.76,8.76,0,0,0-3.1-2.92,12.31,12.31,0,1,0,23,8.18C749.72,549.05,749.25,549.08,748.79,549.13Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M752.3,585.38a12.31,12.31,0,0,1-11.71-17.56,9.11,9.11,0,0,1,2.47,2.48,41.72,41.72,0,0,0,2.44,4.07c1.92,2.25,5.2,3,8.17,2.85s5.84-1,8.8-1.25c.41,0,.82-.06,1.24-.07A12.31,12.31,0,0,1,752.3,585.38Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M722.41,605.27a12.31,12.31,0,0,1-11.81-17.33,10,10,0,0,1,2.61,2.5,41.23,41.23,0,0,0,2.67,4.15c2.07,2.31,5.57,3.13,8.71,3s6-.81,9-1A12.33,12.33,0,0,1,722.41,605.27Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M728.49,629.17a12.31,12.31,0,0,1-23.24-5,12,12,0,0,1,.8-5,12.29,12.29,0,0,1,2.7,2.41c1.17,1.42,1.94,3,3.3,4.37,2.51,2.47,6.58,3.49,10.19,3.58A51.7,51.7,0,0,0,728.49,629.17Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M106.31,580.89c2.61-4.84-.35-10.76-3.75-15.07S95,557,95.09,551.53c.13-7.89,8.51-12.56,15.2-16.74a74.3,74.3,0,0,0,13.65-11,20.13,20.13,0,0,0,4.19-5.62c1.39-3.08,1.35-6.6,1.26-10q-.44-16.89-1.67-33.76"
                            transform="translate(-52 -162.63)" fill="none" stroke="#3f3d56"
                            stroke-miterlimit="10" stroke-width="4" />
                        <path
                            d="M140.45,473.85a12.31,12.31,0,0,0-6.15-10.09l-2.76,5.45.09-6.6a12.31,12.31,0,1,0,8.82,11.24Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M118.49,557.17a12.31,12.31,0,0,1-23.24-5,12,12,0,0,1,.8-5,12.32,12.32,0,0,1,23,.13l-7.69,6.26,8.46-2A12.24,12.24,0,0,1,118.49,557.17Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M112.41,533.27a12.31,12.31,0,0,1-3.9-24.15l-.07,5.07,2.79-5.52h0a12.31,12.31,0,1,1,1.15,24.6Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path d="M142.3,513.38a12.31,12.31,0,1,1,5.44-23l-2.17,6L150,492a12.31,12.31,0,0,1-7.74,21.37Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M138.79,477.13c-2.84.31-5.6,1.19-8.46,1.37s-6-.51-7.78-2.72a39.48,39.48,0,0,1-2.28-4,8.76,8.76,0,0,0-3.1-2.92,12.31,12.31,0,1,0,23,8.18C139.72,477.05,139.25,477.08,138.79,477.13Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M142.3,513.38a12.31,12.31,0,0,1-11.71-17.56,9.11,9.11,0,0,1,2.47,2.48,41.72,41.72,0,0,0,2.44,4.07c1.92,2.25,5.2,3,8.17,2.85s5.84-1,8.8-1.25c.41,0,.82-.06,1.24-.07A12.31,12.31,0,0,1,142.3,513.38Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M112.41,533.27a12.31,12.31,0,0,1-11.81-17.33,10,10,0,0,1,2.61,2.5,41.23,41.23,0,0,0,2.67,4.15c2.07,2.31,5.57,3.13,8.71,3s6-.81,9-1A12.33,12.33,0,0,1,112.41,533.27Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M118.49,557.17a12.31,12.31,0,0,1-23.24-5,12,12,0,0,1,.8-5,12.29,12.29,0,0,1,2.7,2.41c1.17,1.42,1.94,3,3.3,4.37,2.51,2.47,6.58,3.49,10.19,3.58A51.7,51.7,0,0,0,118.49,557.17Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M512.52,498.52c-2.61-4.83.35-10.75,3.76-15.06s7.55-8.8,7.46-14.29c-.12-7.9-8.5-12.56-15.2-16.74a74,74,0,0,1-13.64-11,19.78,19.78,0,0,1-4.2-5.61c-1.38-3.09-1.34-6.6-1.26-10q.45-16.89,1.67-33.76"
                            transform="translate(-52 -162.63)" fill="none" stroke="#3f3d56"
                            stroke-miterlimit="10" stroke-width="4" />
                        <path
                            d="M478.39,391.49a12.3,12.3,0,0,1,6.14-10.09l2.76,5.45-.08-6.6a12.62,12.62,0,0,1,4.05-.49,12.31,12.31,0,1,1-12.87,11.73Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M500.34,474.81a12.31,12.31,0,1,0-.59-9.91l7.69,6.26-8.46-2A12.24,12.24,0,0,0,500.34,474.81Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M506.42,450.91a12.31,12.31,0,0,0,3.91-24.15l.06,5.07-2.79-5.52h0A12.31,12.31,0,0,0,494.7,438a12.16,12.16,0,0,0,.53,4.2A12.3,12.3,0,0,0,506.42,450.91Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M476.54,431a12.31,12.31,0,1,0-5.45-23l2.18,6-4.48-4.29a12.21,12.21,0,0,0-4,8.5,11.91,11.91,0,0,0,.31,3.39A12.3,12.3,0,0,0,476.54,431Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M480.05,394.77c2.84.31,5.6,1.19,8.45,1.37s6-.51,7.79-2.72a39.4,39.4,0,0,0,2.27-4,8.79,8.79,0,0,1,3.11-2.92,12.31,12.31,0,1,1-23,8.17C479.12,394.68,479.58,394.72,480.05,394.77Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M476.54,431a12.32,12.32,0,0,0,11.71-17.56,9.15,9.15,0,0,0-2.48,2.48,41.72,41.72,0,0,1-2.44,4.07c-1.91,2.25-5.19,3-8.16,2.85s-5.84-1-8.8-1.25c-.41,0-.83-.06-1.24-.07A12.3,12.3,0,0,0,476.54,431Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M506.42,450.91a12.3,12.3,0,0,0,11.81-17.33,9.83,9.83,0,0,0-2.6,2.5,41.23,41.23,0,0,1-2.67,4.15c-2.08,2.31-5.57,3.13-8.72,3s-6-.81-9-1A12.3,12.3,0,0,0,506.42,450.91Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M500.34,474.81a12.31,12.31,0,0,0,22.45-10,11.82,11.82,0,0,0-2.7,2.41c-1.17,1.42-2,3-3.3,4.37-2.52,2.47-6.58,3.49-10.2,3.58A53.94,53.94,0,0,1,500.34,474.81Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <circle cx="779.73" cy="238.18" r="99.96" fill="#3f3d56" />
                        <path
                            d="M874.64,426.59c-3.48-3.48-11.85-8.73-16-10.69-4.79-2.3-6.55-2.26-9.94.19-2.82,2-4.65,3.93-7.89,3.22s-9.66-5.55-15.87-11.74S813.91,395,813.22,391.71s1.21-5.08,3.23-7.9c2.44-3.39,2.51-5.15.19-9.94-2-4.15-7.19-12.5-10.7-16s-4.27-2.73-6.19-2a35.8,35.8,0,0,0-5.67,3c-3.48,2.33-5.43,4.27-6.8,7.19s-2.92,8.34,5.05,22.53a125.69,125.69,0,0,0,22.1,29.47l0,0,0,0A125.88,125.88,0,0,0,844,440.2c14.18,8,19.61,6.41,22.53,5.05s4.86-3.29,7.18-6.8a35.33,35.33,0,0,0,3-5.67C877.37,430.86,878.15,430.08,874.64,426.59Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M831.73,300.86a100,100,0,1,0,99.95,99.95A100,100,0,0,0,831.73,300.86Zm0,186.62a86.67,86.67,0,1,1,86.67-86.67A86.67,86.67,0,0,1,831.73,487.48Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <circle cx="550.08" cy="390.01" r="99.96" fill="#3f3d56" />
                        <path
                            d="M658.93,522.44,629,552.89a.54.54,0,0,0,0,.78L650,576a3.62,3.62,0,0,1-2.55,6.17,3.64,3.64,0,0,1-2.56-1.06L624,558.86a.57.57,0,0,0-.8,0L618.11,564a22.37,22.37,0,0,1-16,6.73,22.86,22.86,0,0,1-16.28-6.92l-4.89-5a.57.57,0,0,0-.8,0l-20.84,22.2a3.61,3.61,0,0,1-5.11,0,3.6,3.6,0,0,1,0-5.11l20.92-22.28a.6.6,0,0,0,0-.78l-29.93-30.45a.55.55,0,0,0-.94.39v60.93a8.92,8.92,0,0,0,8.89,8.89H651a8.92,8.92,0,0,0,8.89-8.89V522.83A.55.55,0,0,0,658.93,522.44Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M602.08,563.5A15.14,15.14,0,0,0,613,559l43.59-44.37a8.7,8.7,0,0,0-5.5-2H553.15a8.64,8.64,0,0,0-5.5,2L591.25,559A15.08,15.08,0,0,0,602.08,563.5Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M600.82,452.69a100,100,0,1,0,99.95,99.95A100,100,0,0,0,600.82,452.69Zm0,186.62a86.67,86.67,0,1,1,86.67-86.67A86.67,86.67,0,0,1,600.82,639.31Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <circle cx="312.85" cy="315.36" r="99.96" fill="#3f3d56" />
                        <path d="M364.85,430.16,325,522.1l3.72,3.72,36.14-15.94L401,525.82l3.72-3.72Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M364.85,378A100,100,0,1,0,464.8,478,100,100,0,0,0,364.85,378Zm0,186.62A86.67,86.67,0,1,1,451.52,478,86.67,86.67,0,0,1,364.85,564.66Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M840.93,603.88q-1.36-3.32-2.79-6.62a19.65,19.65,0,0,0-3.41-5.89,6.24,6.24,0,0,0-2-1.5,8.53,8.53,0,0,0-2.61-.52,20.83,20.83,0,0,0-4.1-.11c-.53-.16-1.13-.37-1.72-.61a14.28,14.28,0,0,0,10.64-13.25c0-.2,0-.41,0-.61a14.25,14.25,0,0,0-14.19-14.31,14,14,0,0,0-7.45,2.13,13.37,13.37,0,0,0-15,7.23,16.53,16.53,0,0,0-5.1,12.3c0,.21,0,.43,0,.63.26,7.77,5.28,14,11.62,14.63a6.66,6.66,0,0,0-1.84,1.23c-1.94,1.87-2.26,4.84-2.47,7.54l-.15,2L797,609.35a.62.62,0,0,0-.15,1.09l3.21,2.29c0,.19,0,.38,0,.57s0,.43.06.65a4.59,4.59,0,0,0-1.24,1.77,8.18,8.18,0,0,0-.29,3.24l.12,2.79a21.91,21.91,0,0,0,.85,6.21c.42,1.24,2.24,4.23,3.55,4.25-1.21,5.5-1.53,17.1-1.53,17.1-.15.15.27.29,1,.41.72,5.52,3.07,21,7.24,27.81a58.64,58.64,0,0,1,1.57,6.76s1.19,14.71,2.76,19.08c1.34,3.72,2.4,12.9,2.69,15.56a1.53,1.53,0,0,0-1.11,1.14c-.79,2.38-5.91,6-5.91,6a24.76,24.76,0,0,0-4.42,2.83c-1.61,1.45-1.55,2.76,5.6,1.94,13.8-1.59,16.16-6,16.16-6s-.22-.74-.55-1.7a18.46,18.46,0,0,0-1.81-4.27c-.2-.19-.4.13-.64.63a85.63,85.63,0,0,1-.94-19.31s.39-6.76-1.58-11.53a21.83,21.83,0,0,1,0-7.55c.79-3.18-3.15-18.69-3.15-18.69L816.23,651a3.28,3.28,0,0,1,.63,1.33l.06.23.06.33a.62.62,0,0,0,.16.31c1.54,6.4,5.76,24.13,5.76,26.73,0,3.18,3.94,11.13,3.94,11.13s1.57,13.12,4.33,18.28c2.1,3.93,2.15,9.69,2.05,12.23h0s-.47,3.27-1.26,4.06a9.66,9.66,0,0,0-1.49,2.59l-.09.19s-1.18,2.39-.39,2.79a19.37,19.37,0,0,0,9.46,1.19s1.58-2,1.58-2.78a12.52,12.52,0,0,0-.18-1.42c-.29-1.88-.83-4.84-.84-4.87.33-1.28-1-4.84-1-4.84l-.4-11.13a51.38,51.38,0,0,0-2.76-22.27s-2-7.15-1.57-9.14-.79-23.06-.79-23.06l-.12-.3a22.78,22.78,0,0,1,.12-4.47c.39-4.77-1.18-14.71-1.58-15.1a13.1,13.1,0,0,1-.56-3.29c.09-.83.36-3.26.73-6.28a112.91,112.91,0,0,0,11.62-1,1.45,1.45,0,0,0,1-.4,1.4,1.4,0,0,0,.23-.81C845.39,615.24,843.2,609.42,840.93,603.88ZM833,616.49c.41-2.85.85-5.61,1.29-7.66l.06.18a55.65,55.65,0,0,1,1.9,6.3A21.43,21.43,0,0,1,833,616.49Z"
                            transform="translate(-52 -162.63)" fill="url(#eb6c86d6-45fa-49e0-9a60-1b0612516196)" />
                        <path
                            d="M802.37,648.68s2.36,21.23,7.47,29.48a57.21,57.21,0,0,1,1.57,6.68s1.18,14.54,2.75,18.86,2.75,16.12,2.75,16.12,5.5,6.28,7.47,1.18a82.82,82.82,0,0,1-1.18-20.44s.39-6.68-1.57-11.4a21.32,21.32,0,0,1,0-7.46c.78-3.15-3.15-18.47-3.15-18.47l-3.14-15.33Z"
                            transform="translate(-52 -162.63)" fill="#be6f72" />
                        <path
                            d="M827.13,724.93s-2.36,4.32-16.11,5.89c-7.14.81-7.19-.48-5.58-1.92a24.9,24.9,0,0,1,4.4-2.8s5.11-3.53,5.89-5.89,3.54-.39,3.54-.39c3.93,5.89,4.72-1.58,5.5-.79a17.73,17.73,0,0,1,1.81,4.21C826.91,724.19,827.13,724.93,827.13,724.93Z"
                            transform="translate(-52 -162.63)" fill="#ff6f61" />
                        <path
                            d="M827.13,724.93s-2.36,4.32-16.11,5.89c-7.14.81-7.19-.48-5.58-1.92,1.12.71,3.38,1,7.93-.83,6.55-2.68,11.3-4.23,13.21-4.83C826.91,724.19,827.13,724.93,827.13,724.93Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M823.2,700.56s.39-6.68-1.57-11.4a21.32,21.32,0,0,1,0-7.46c.78-3.15-3.15-18.47-3.15-18.47l-3.14-15.33-2.72.16,3.11,15.17s3.93,15.32,3.15,18.47a21.32,21.32,0,0,0,0,7.46c2,4.72,1.57,11.4,1.57,11.4A82.82,82.82,0,0,0,821.63,721a3.44,3.44,0,0,1-1.14,1.62c1.46.66,3,.63,3.89-1.62A82.82,82.82,0,0,1,823.2,700.56Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M820.64,562.42a14,14,0,0,0-7.42,2.11,13.35,13.35,0,0,0-15,7.15,16.28,16.28,0,0,0-5.09,12.16c0,8.36,5.63,15.13,12.57,15.13,5,0,9.38-3.56,11.39-8.71a13.8,13.8,0,0,0,3.54.46,14.15,14.15,0,0,0,0-28.3Z"
                            transform="translate(-52 -162.63)" fill="#3f3d56" />
                        <path
                            d="M832.24,650.65l1.18,3.14s1.18,20.83.78,22.8,1.58,9,1.58,9a50.31,50.31,0,0,1,2.75,22l.39,11s1.57,4.32.79,5.11S833,723,833,723s.79-8.25-2-13.36-4.32-18.08-4.32-18.08-3.93-7.86-3.93-11-6.29-28.69-6.29-28.69Z"
                            transform="translate(-52 -162.63)" fill="#be6f72" />
                        <path
                            d="M801.58,650.26s.4-14.15,2-18.47a29.33,29.33,0,0,0,1.75-6.27s23.79,4.3,25.76,2.73c0,0,.39,5.5.79,5.89s2,10.22,1.57,14.94,0,4.71,0,4.71-16.12,2.36-16.51,0-1.57-2.35-1.57-2.35S800.8,651,801.58,650.26Z"
                            transform="translate(-52 -162.63)" fill="#3f3d56" />
                        <g opacity="0.1">
                            <path
                                d="M814.55,650.26s-9.94-.27-12.94-.81c0,.51,0,.81,0,.81-.78.78,13.76,1.18,13.76,1.18a1,1,0,0,1,.54.22C815.38,650.26,814.55,650.26,814.55,650.26Z"
                                transform="translate(-52 -162.63)" />
                            <path
                                d="M831.85,634.14c-.4-.39-.79-5.89-.79-5.89a1.69,1.69,0,0,1-.67.24c.14,1.66.41,4.21.67,4.47s2,10.22,1.57,14.94,0,4.71,0,4.71-12.75,1.87-15.84.62c0,.17.09.36.12.56.39,2.36,16.51,0,16.51,0s-.4,0,0-4.71S832.24,634.54,831.85,634.14Z"
                                transform="translate(-52 -162.63)" />
                            <path
                                d="M814.55,650.26s-9.94-.27-12.94-.81c0,.51,0,.81,0,.81-.78.78,13.76,1.18,13.76,1.18a1,1,0,0,1,.54.22C815.38,650.26,814.55,650.26,814.55,650.26Z"
                                transform="translate(-52 -162.63)"
                                fill="url(#ad310e25-2b04-44c8-bb7b-982389166780)" />
                            <path
                                d="M831.85,634.14c-.4-.39-.79-5.89-.79-5.89a1.69,1.69,0,0,1-.67.24c.14,1.66.41,4.21.67,4.47s2,10.22,1.57,14.94,0,4.71,0,4.71-12.75,1.87-15.84.62c0,.17.09.36.12.56.39,2.36,16.51,0,16.51,0s-.4,0,0-4.71S832.24,634.54,831.85,634.14Z"
                                transform="translate(-52 -162.63)"
                                fill="url(#ad310e25-2b04-44c8-bb7b-982389166780)" />
                        </g>
                        <path
                            d="M818.9,587.18a5.21,5.21,0,0,0,1.5,1.94,3.36,3.36,0,0,0,1.41.61c-.88.51-1.84.89-2.72,1.4a48.36,48.36,0,0,0-4,3,8.14,8.14,0,0,1-4.59,1.78,5.62,5.62,0,0,0,.64-5.59,5.22,5.22,0,0,1-.7-1.94c0-1.13,1-2,1.93-2.6.75-.51,1.52-1,2.3-1.49.61-.38,1.53-1.18,2.3-1.15s.86.71,1,1.41A11.09,11.09,0,0,0,818.9,587.18Z"
                            transform="translate(-52 -162.63)" fill="#be6f72" />
                        <path
                            d="M818.9,587.18a5.21,5.21,0,0,0,1.5,1.94,3.36,3.36,0,0,0,1.41.61c-.88.51-1.84.89-2.72,1.4a48.36,48.36,0,0,0-4,3,8.14,8.14,0,0,1-4.59,1.78,5.62,5.62,0,0,0,.64-5.59,5.22,5.22,0,0,1-.7-1.94c0-1.13,1-2,1.93-2.6.75-.51,1.52-1,2.3-1.49.61-.38,1.53-1.18,2.3-1.15s.86.71,1,1.41A11.09,11.09,0,0,0,818.9,587.18Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <circle cx="776.11" cy="438.7" r="9.04" fill="#be6f72" />
                        <path
                            d="M840.88,729.64c0,.79-1.57,2.75-1.57,2.75a19.46,19.46,0,0,1-9.43-1.18c-.79-.39.39-2.75.39-2.75l.09-.19a9.54,9.54,0,0,1,1.49-2.56c.78-.78,1.25-4,1.25-4,2.44-4,6.77,1.73,6.77,1.73s.55,3,.84,4.82C840.81,728.91,840.88,729.44,840.88,729.64Z"
                            transform="translate(-52 -162.63)" fill="#ff6f61" />
                        <path
                            d="M840.88,729.64c0,.79-1.57,2.75-1.57,2.75a19.46,19.46,0,0,1-9.43-1.18c-.79-.39.39-2.75.39-2.75l.09-.19a19,19,0,0,0,8.56,1.76l1.79-1.79C840.81,728.91,840.88,729.44,840.88,729.64Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <circle cx="758.03" cy="419.83" r="8.84" fill="#be6f72" />
                        <path
                            d="M802.9,600.14c-1.94,1.85-2.26,4.78-2.46,7.45l-.3,3.91a19.72,19.72,0,0,0-.07,3.17c0,.65.16,1.31.22,2s.08,1.56.09,2.35l0,5.78a6.82,6.82,0,0,0,.64,3.47,2.36,2.36,0,0,0,3,1.08,3.42,3.42,0,0,0,1.24-1.92,29.85,29.85,0,0,0,2-7.32c.08-.87.09-1.74.17-2.61s.23-1.78.36-2.66c.56-3.68.81-7.4,1.06-11.11.07-1.1,1.06-5.43-.38-5.91-.7-.23-2.15.49-2.82.73A7.94,7.94,0,0,0,802.9,600.14Z"
                            transform="translate(-52 -162.63)" fill="#be6f72" />
                        <path
                            d="M802.9,600.14c-1.94,1.85-2.26,4.78-2.46,7.45l-.3,3.91a19.72,19.72,0,0,0-.07,3.17c0,.65.16,1.31.22,2s.08,1.56.09,2.35l0,5.78a6.82,6.82,0,0,0,.64,3.47,2.36,2.36,0,0,0,3,1.08,3.42,3.42,0,0,0,1.24-1.92,29.85,29.85,0,0,0,2-7.32c.08-.87.09-1.74.17-2.61s.23-1.78.36-2.66c.56-3.68.81-7.4,1.06-11.11.07-1.1,1.06-5.43-.38-5.91-.7-.23-2.15.49-2.82.73A7.94,7.94,0,0,0,802.9,600.14Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M821.23,588.16s-6.68,5.11-10.61,6.29c0,0-2.33,2.66-2.73,3.3s-1.2,7.7-2,9.28-2.75,5.11,0,8.64c0,0,.78,3.54.39,4.72s-1.82,5.5-.52,5.7,5.24,2.94,8.77,2.16,16.71,3,16.71,3S833.42,611,835,607.42l-3.54-1.18s-9.82-5.89-3.93-14.93C827.52,591.31,822,590.13,821.23,588.16Z"
                            transform="translate(-52 -162.63)" fill="#ff6f61" />
                        <path
                            d="M796.84,611.83l8.12,5.75a.6.6,0,0,0,.71,0l2.2-1.65a.62.62,0,0,0,0-.94l-6.25-5.55a.6.6,0,0,0-.61-.12L797,610.76A.61.61,0,0,0,796.84,611.83Z"
                            transform="translate(-52 -162.63)" fill="#3f3d56" />
                        <path
                            d="M799.57,629.15a21.76,21.76,0,0,1-.85-6.13l-.12-2.77a8,8,0,0,1,.29-3.2,5.23,5.23,0,0,1,3.37-2.95,11.64,11.64,0,0,1,4.59-.33,1.18,1.18,0,0,1,.59.16,1.1,1.1,0,0,1,.32.54,3.62,3.62,0,0,1,.18,2.89,3,3,0,0,1-.92.95c-1.09.78-2.36,1.3-3.39,2.15a1.23,1.23,0,0,0-.46.58,1.35,1.35,0,0,0,0,.63,10.08,10.08,0,0,0,.52,1.61,1.59,1.59,0,0,0,.45.68c.19.16.44.22.64.37.43.35,1.33.81,1.28,1.36-.15,2-1.35,4.24-1.82,6.22C803.34,635.78,800.15,630.84,799.57,629.15Z"
                            transform="translate(-52 -162.63)" fill="#be6f72" />
                        <g opacity="0.1">
                            <path d="M812.2,628.25l-.22,0a6.73,6.73,0,0,0,2.57,0l.25,0A9,9,0,0,0,812.2,628.25Z"
                                transform="translate(-52 -162.63)" />
                            <path
                                d="M832.83,606.83c-1.41,3.17-3.49,20.34-3.86,23.75,1.38.36,2.29.62,2.29.62S833.42,611,835,607.42Z"
                                transform="translate(-52 -162.63)" />
                        </g>
                        <path
                            d="M828.42,601.61a3,3,0,0,0,1.29,1.95,17.31,17.31,0,0,1,2.29,2.32,16.43,16.43,0,0,1,2.27,4.55,55.75,55.75,0,0,1,1.89,6.22c-5,2.32-10.68,2.21-16,3.74a12.77,12.77,0,0,0-6,3.55,8.27,8.27,0,0,0-2.21,6.51.85.85,0,0,0,.12.39.84.84,0,0,0,.7.28,6,6,0,0,0,3.67-1.26,17.46,17.46,0,0,0,2.81-2.76,4.52,4.52,0,0,1,2-1.48c2.89-.88,6-.83,9-.88a113.42,113.42,0,0,0,13.41-1.06,1.08,1.08,0,0,0,1.2-1.2c.44-5.9-1.75-11.66-4-17.13q-1.35-3.29-2.78-6.55a19.4,19.4,0,0,0-3.4-5.82,6,6,0,0,0-2-1.48A8.46,8.46,0,0,0,830,591a19,19,0,0,0-4.39-.08,9.36,9.36,0,0,0-.42,2.27c.08,2.7,1.26,5.23,2.42,7.67C827.76,601.23,828.19,601.25,828.42,601.61Z"
                            transform="translate(-52 -162.63)" fill="#be6f72" />
                        <path d="M812.41,606.67a7.33,7.33,0,0,0-1,3.82,5.14,5.14,0,0,0,.25,1.56,5.06,5.06,0,0,0,3.19,3"
                            transform="translate(-52 -162.63)" fill="none" stroke="#000" stroke-miterlimit="10"
                            opacity="0.1" />
                        <path
                            d="M817.5,573.82a4.59,4.59,0,0,0-1.45.23c-1.31-2-4.39-3.38-8-3.38-4.78,0-8.65,2.47-8.65,5.51s3.87,5.5,8.65,5.5a12.17,12.17,0,0,0,5.19-1.1,4.71,4.71,0,1,0,4.24-6.76Z"
                            transform="translate(-52 -162.63)" fill="#3f3d56" />
                        <path
                            d="M817.89,582.07a4.7,4.7,0,0,1-4.24-2.67,12.17,12.17,0,0,1-5.19,1.1c-4.77,0-8.64-2.46-8.64-5.5a3.31,3.31,0,0,1,0-.55,3.73,3.73,0,0,0-.44,1.73c0,3,3.87,5.5,8.65,5.5a12.17,12.17,0,0,0,5.19-1.1,4.71,4.71,0,0,0,8.87-1.17A4.69,4.69,0,0,1,817.89,582.07Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M798.23,574a13.35,13.35,0,0,1,15-7.15,14.14,14.14,0,0,1,21.52,10.86c0-.39,0-.78,0-1.18a14.14,14.14,0,0,0-21.57-12,13.35,13.35,0,0,0-15,7.15,16.28,16.28,0,0,0-5.09,12.16c0,.4,0,.79,0,1.18A16,16,0,0,1,798.23,574Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M888.39,577c2.61-4.83-.35-10.76-3.76-15.07s-7.55-8.79-7.46-14.29c.12-7.89,8.5-12.55,15.2-16.74a73.9,73.9,0,0,0,13.64-11,19.93,19.93,0,0,0,4.2-5.61c1.38-3.09,1.34-6.6,1.26-10q-.44-16.9-1.67-33.76"
                            transform="translate(-52 -162.63)" fill="none" stroke="#3f3d56"
                            stroke-miterlimit="10" stroke-width="4" />
                        <path
                            d="M922.52,469.93a12.29,12.29,0,0,0-6.14-10.08l-2.76,5.45.08-6.6a12.08,12.08,0,0,0-4.05-.49,12.31,12.31,0,1,0,12.87,11.72Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M900.57,553.26a12.31,12.31,0,1,1,.59-9.92l-7.69,6.26,8.46-2A12.24,12.24,0,0,1,900.57,553.26Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M894.49,529.35a12.31,12.31,0,0,1-3.91-24.15l-.06,5.07,2.79-5.51h0a12.32,12.32,0,0,1,12.87,11.73,12.3,12.3,0,0,1-11.72,12.87Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M924.37,509.47a12.31,12.31,0,1,1,5.45-23l-2.18,6,4.48-4.3a12.24,12.24,0,0,1,4,8.5,11.88,11.88,0,0,1-.31,3.39A12.31,12.31,0,0,1,924.37,509.47Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M920.87,473.21c-2.84.32-5.61,1.2-8.46,1.38s-6-.51-7.79-2.73a38.2,38.2,0,0,1-2.27-4,8.85,8.85,0,0,0-3.1-2.92,12.31,12.31,0,1,0,23,8.17C921.79,473.13,921.33,473.16,920.87,473.21Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M924.37,509.47a12.32,12.32,0,0,1-11.71-17.56,9.11,9.11,0,0,1,2.48,2.47,39.47,39.47,0,0,0,2.44,4.07c1.91,2.26,5.19,3,8.16,2.86s5.84-1,8.8-1.25c.41,0,.83-.07,1.24-.08A12.31,12.31,0,0,1,924.37,509.47Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M894.49,529.35A12.3,12.3,0,0,1,882.68,512a10.15,10.15,0,0,1,2.6,2.5c1,1.35,1.55,2.91,2.67,4.15,2.08,2.32,5.57,3.13,8.72,3.06s6-.82,9-1.05A12.31,12.31,0,0,1,894.49,529.35Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M900.57,553.26a12.32,12.32,0,0,1-22.45-10,12.06,12.06,0,0,1,2.7,2.41c1.18,1.43,1.95,3,3.3,4.38,2.52,2.47,6.58,3.48,10.2,3.58A53.94,53.94,0,0,0,900.57,553.26Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M1047.39,729c2.61-4.83-.35-10.76-3.76-15.07s-7.55-8.79-7.46-14.29c.12-7.89,8.5-12.55,15.2-16.74a73.9,73.9,0,0,0,13.64-11,19.93,19.93,0,0,0,4.2-5.61c1.38-3.09,1.34-6.6,1.26-10q-.43-16.9-1.67-33.76"
                            transform="translate(-52 -162.63)" fill="none" stroke="#3f3d56"
                            stroke-miterlimit="10" stroke-width="4" />
                        <path
                            d="M1081.52,621.93a12.29,12.29,0,0,0-6.14-10.08l-2.76,5.45.08-6.6a12.08,12.08,0,0,0-4-.49,12.31,12.31,0,1,0,12.87,11.72Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M1059.57,705.26a12.31,12.31,0,1,1,.59-9.92l-7.69,6.26,8.46-2A12.24,12.24,0,0,1,1059.57,705.26Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M1053.49,681.35a12.31,12.31,0,0,1-3.91-24.15l-.06,5.07,2.79-5.51h0a12.32,12.32,0,0,1,12.87,11.73,12.3,12.3,0,0,1-11.72,12.87Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M1083.37,661.47a12.31,12.31,0,1,1,5.45-23l-2.18,6,4.48-4.3a12.24,12.24,0,0,1,4,8.5,11.88,11.88,0,0,1-.31,3.39A12.31,12.31,0,0,1,1083.37,661.47Z"
                            transform="translate(-52 -162.63)" fill="#667eea" />
                        <path
                            d="M1079.87,625.21c-2.84.32-5.61,1.2-8.46,1.38s-6-.51-7.79-2.73a38.2,38.2,0,0,1-2.27-4,8.85,8.85,0,0,0-3.1-2.92,12.31,12.31,0,1,0,23,8.17C1080.79,625.13,1080.33,625.16,1079.87,625.21Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M1083.37,661.47a12.32,12.32,0,0,1-11.71-17.56,9.11,9.11,0,0,1,2.48,2.47,39.47,39.47,0,0,0,2.44,4.07c1.91,2.26,5.19,3,8.16,2.86s5.84-1,8.8-1.25c.41,0,.83-.07,1.24-.08A12.31,12.31,0,0,1,1083.37,661.47Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M1053.49,681.35A12.3,12.3,0,0,1,1041.68,664a10.15,10.15,0,0,1,2.6,2.5c1,1.35,1.55,2.91,2.67,4.15,2.08,2.32,5.57,3.13,8.72,3.06s6-.82,9-1.05A12.31,12.31,0,0,1,1053.49,681.35Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M1059.57,705.26a12.32,12.32,0,0,1-22.45-10,12.06,12.06,0,0,1,2.7,2.41c1.18,1.43,2,3,3.3,4.38,2.52,2.47,6.58,3.48,10.2,3.58A53.94,53.94,0,0,0,1059.57,705.26Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M530,587.91a9.81,9.81,0,0,0-3.91-7.92,11.5,11.5,0,0,0-9.61-11.28,11.48,11.48,0,0,0-7.65-8.55h0a9.76,9.76,0,0,0-1.42-.33l-.14,0-.25,0-.2,0-.22,0-.27,0h-.61a11.26,11.26,0,0,0-10.88,9.62c-3.51-.81-6.72.24-7.31,2.46a3,3,0,0,0,.1,1.78c.6,1.72,2.55,3.37,5.16,4.18l.34.1.51.13.11,0h0a8.84,8.84,0,0,0-.84,3.79,8.74,8.74,0,0,0,4.71,7.8l-.23.14a3.12,3.12,0,0,0-.76,1.06,15.86,15.86,0,0,0-1.47,3.54c-.25,1.06-.29,2.16-.6,3.21-.58,1.93-2.06,3.56-2.23,5.57-.08.9.07,2-.57,2.58a3.11,3.11,0,0,1-.51.36,4.13,4.13,0,0,0-1.11,1.17,3.88,3.88,0,0,1-.78,1.12c-.58.43-1.53.39-1.81,1.06s.45,1.46.28,2.19-.79.87-1.24,1.28a4.45,4.45,0,0,0-1.07,2,6.56,6.56,0,0,1-5.4-1.38,10.09,10.09,0,0,1,.56,2,8.76,8.76,0,0,0-2.91-1.46,9.19,9.19,0,0,1-3.1-2.3l1.66-.23L469,600.41l-2.17-.45,1.94,3.73a1.19,1.19,0,0,0-.66.79,3.39,3.39,0,0,0-.07,1.27,22.73,22.73,0,0,0,.5,3l.56,2.62c.05.24.11.49.18.73a6.89,6.89,0,0,0-2.17.24,18.88,18.88,0,0,0-4.51-1.07,2.5,2.5,0,0,0-1,0,2.59,2.59,0,0,0-.95.77,30.76,30.76,0,0,0-3.35,4.72c-4,6.86-9.21,12.85-14.14,19.05-3.4,1.38-6.83,2.69-10.26,4l-7.38,2.82a11.19,11.19,0,0,1-4.58,1c-.7,0-1.57-.15-2,.45a4.21,4.21,0,0,0-.45,1l-.76.08h0a8.74,8.74,0,0,0-1.77-3.26,1.12,1.12,0,0,0-.83.64c-.18.33-.29.69-.5,1-.39.58-1.08.86-1.57,1.35s-.8,1.25-1.34,1.75a5.3,5.3,0,0,1-2.51,1,15.84,15.84,0,0,0-3.93,1.49,6.33,6.33,0,0,1-1.45.67,5.45,5.45,0,0,1-1.71.06l-3.9-.29a3.08,3.08,0,0,0-1.05.05,2,2,0,0,0-1.24,2,3.15,3.15,0,0,0,1.24,2.15,7.94,7.94,0,0,0,2.22,1.15A65.15,65.15,0,0,0,409.79,658v.79a17.75,17.75,0,0,0,8,1.9,1.24,1.24,0,0,0,.6-.11,1.32,1.32,0,0,0,.5-.78,32.17,32.17,0,0,0,1.56-7.66h0a4,4,0,0,0,1.41-.36c1.34-.37,2.68.55,4.07.7,1.71.19,3.29-.81,4.91-1.42l.7-.23a7.68,7.68,0,0,1-1.62,1.55c-.67.48-1.42.84-2.07,1.34a14.26,14.26,0,0,1-1.76,1.36,11.05,11.05,0,0,1-1.35.52,8.91,8.91,0,0,0-1.93,1,3.91,3.91,0,0,0-1.31,1.28,1.92,1.92,0,0,0-.11,1.8,1.9,1.9,0,0,0,1.29.9,5.29,5.29,0,0,0,1.59,0c2.12-.16,4.23-.35,6.34-.54a16.92,16.92,0,0,0,2.65-.38c.46-.11.92-.26,1.38-.39a12.31,12.31,0,0,1,2.41-.36,2,2,0,0,1,.7.07c.49.16.84.66,1.34.76a2,2,0,0,0,1-.13,22.3,22.3,0,0,1,4.69-.5c.69,0,1.5-.17,1.82-.81s-.26-1.67-.52-2.52a7.71,7.71,0,0,1-.22-1.66,10.39,10.39,0,0,0-1.16-3.94,10.29,10.29,0,0,1-.87-1.8,45.47,45.47,0,0,0,8.63-4.38,15.43,15.43,0,0,1,4.92-2.37,13.38,13.38,0,0,1,6.18.72,140.61,140.61,0,0,1,14.17,4.94c2.21.91,4.41,1.87,6.69,2.56a10.43,10.43,0,0,0,2.38,2.31,11,11,0,0,0,5.15,1.41,67.48,67.48,0,0,0,7.25.27,12.23,12.23,0,0,0,5.4-1,5.55,5.55,0,0,0,1.13-.75,4.48,4.48,0,0,0,3.56-1.31A8.63,8.63,0,0,0,512,646.5c.59-2.28.14-5,1.54-6.82.37-.5.86-.9,1.23-1.4a3.94,3.94,0,0,0,.64-2.31.47.47,0,0,1,.06-.09,8.47,8.47,0,0,0,.6-2.3,13.14,13.14,0,0,1,.65-1.82,56.19,56.19,0,0,0,1.86-5.39,31.49,31.49,0,0,0,.86-3.7c.15-1,.24-2,.32-3a18.63,18.63,0,0,1,.91-4.63,37.68,37.68,0,0,0,2.1-11.08v-.22a7.43,7.43,0,0,0,6.58-7.56,7.89,7.89,0,0,0-.69-3.23A10,10,0,0,0,530,587.91Zm-35.78,43.47c.11.39.24.77.37,1.15-.59-.57-1.16-1.16-1.75-1.74.23.08.47.15.69.24A3.73,3.73,0,0,1,494.19,631.38Zm-2.83-1.92c-3.46-3-7.46-5.33-11-8.24,1.93.95,3.81,2.06,5.67,3.12q3.31,1.89,6.71,3.63A5.49,5.49,0,0,1,491.36,629.46Zm1.47-7.56.17-.17c0,.43,0,.82,0,1.19l-.93-.32A8.28,8.28,0,0,0,492.83,621.9ZM462.43,630a28.63,28.63,0,0,0,3.68-5.25c1.37,2.39,3.6,4.12,5.49,6.13C468.55,630.49,465.49,630.16,462.43,630Z"
                            transform="translate(-52 -162.63)" fill="url(#a964f849-fa65-4178-8cc4-fb8fb10b3617)" />
                        <polygon points="415.35 438.25 417.53 438.69 424.96 449.68 421.69 450.12 415.35 438.25"
                            fill="#2f2e41" />
                        <path
                            d="M414.49,645.46a42.78,42.78,0,0,0,2.18,5.67,54,54,0,0,0,7.25-2.07,22.86,22.86,0,0,0-1.51-2,7.46,7.46,0,0,0-2.05-1.57,5.64,5.64,0,0,0-2.49,0C416.75,645.46,415.62,645.48,414.49,645.46Z"
                            transform="translate(-52 -162.63)" fill="#fbbebe" />
                        <path
                            d="M420.37,648.39a4.52,4.52,0,0,1-2.48-2.82A9.08,9.08,0,0,0,416,642.2a1.08,1.08,0,0,0-.84.63c-.18.32-.29.68-.49,1-.4.57-1.1.85-1.6,1.33s-.8,1.23-1.34,1.72a5.32,5.32,0,0,1-2.53,1,16.41,16.41,0,0,0-4,1.47,6.9,6.9,0,0,1-1.47.66,5.82,5.82,0,0,1-1.72,0l-3.94-.28a3.08,3.08,0,0,0-1,0,1.91,1.91,0,0,0-1.25,2,3,3,0,0,0,1.25,2.12,8.3,8.3,0,0,0,2.24,1.14,65.9,65.9,0,0,0,10.56,3v.78a18.28,18.28,0,0,0,8.05,1.87,1.36,1.36,0,0,0,.6-.1,1.32,1.32,0,0,0,.5-.78,31.2,31.2,0,0,0,1.65-8.56,6.82,6.82,0,0,0-.17-2.21c-.22-.71.52-.41-.16-.69"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M495.93,633.54c-11.68.7-23.22-2.72-34.92-3.08a17.05,17.05,0,0,0-4.34.27,21.87,21.87,0,0,0-4.3,1.67c-6.27,2.92-12.76,5.34-19.24,7.75l-7.45,2.77a11.28,11.28,0,0,1-4.61,1c-.71,0-1.58-.15-2,.44-1.21,1.8-.64,4.43.16,6.45.26.65.7,1.36,1.4,1.43a4.07,4.07,0,0,0,1.42-.36c1.35-.36,2.7.55,4.1.7,1.72.18,3.32-.8,4.95-1.4,2.7-1,5.64-1,8.48-1.44,4.75-.79,9.16-3,13.28-5.51a15.5,15.5,0,0,1,4.95-2.34,13.7,13.7,0,0,1,6.23.71,143,143,0,0,1,14.29,4.86,66.61,66.61,0,0,0,7.46,2.73,27,27,0,0,0,16.73-1c1.87-.74,3.9-2,4-4.06.07-1.15-.83-2.16-1.42-3.15-.38-.63-.77-1.26-1.18-1.87C501.92,637.21,499.48,633.33,495.93,633.54Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M495.93,633.54c-11.68.7-23.22-2.72-34.92-3.08a17.05,17.05,0,0,0-4.34.27,21.87,21.87,0,0,0-4.3,1.67c-6.27,2.92-12.76,5.34-19.24,7.75l-7.45,2.77a11.28,11.28,0,0,1-4.61,1c-.71,0-1.58-.15-2,.44-1.21,1.8-.64,4.43.16,6.45.26.65.7,1.36,1.4,1.43a4.07,4.07,0,0,0,1.42-.36c1.35-.36,2.7.55,4.1.7,1.72.18,3.32-.8,4.95-1.4,2.7-1,5.64-1,8.48-1.44,4.75-.79,9.16-3,13.28-5.51a15.5,15.5,0,0,1,4.95-2.34,13.7,13.7,0,0,1,6.23.71,143,143,0,0,1,14.29,4.86,66.61,66.61,0,0,0,7.46,2.73,27,27,0,0,0,16.73-1c1.87-.74,3.9-2,4-4.06.07-1.15-.83-2.16-1.42-3.15-.38-.63-.77-1.26-1.18-1.87C501.92,637.21,499.48,633.33,495.93,633.54Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M436.92,646q2.74.93,5.53,1.72c1-1.71,3-2.9,3.43-4.86a.46.46,0,0,0,0-.26.48.48,0,0,0-.21-.19,10.48,10.48,0,0,0-4.34-1.27c-1.2-.07-1.75,1.18-2.29,2.06C438.83,643.59,437.41,646.19,436.92,646Z"
                            transform="translate(-52 -162.63)" fill="#fbbebe" />
                        <path
                            d="M439.48,644.78a4,4,0,0,1-2.69-1.77c-.25-.45-.53-1.06-1.05-1s-.69.6-.8,1.07a30,30,0,0,1-1.51,5.19,9.74,9.74,0,0,1-3.23,4.25c-.68.47-1.43.82-2.1,1.32a14.43,14.43,0,0,1-1.77,1.34,10.51,10.51,0,0,1-1.36.5,9.43,9.43,0,0,0-1.94,1,3.85,3.85,0,0,0-1.33,1.27,1.83,1.83,0,0,0-.1,1.77,1.89,1.89,0,0,0,1.29.88,5.44,5.44,0,0,0,1.61,0c2.13-.15,4.26-.34,6.39-.53a18.44,18.44,0,0,0,2.67-.37l1.39-.38a11.06,11.06,0,0,1,2.43-.36,1.89,1.89,0,0,1,.71.07c.49.16.84.65,1.35.75a2.26,2.26,0,0,0,1-.13,22.08,22.08,0,0,1,4.73-.49c.7,0,1.52-.18,1.84-.8.4-.78-.26-1.65-.53-2.49a8,8,0,0,1-.22-1.63,9.94,9.94,0,0,0-1.17-3.88c-.54-1-1.28-2.1-.9-3.16a3,3,0,0,0,.36-1.09C444.4,644.39,440.46,645,439.48,644.78Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M478.42,614.8a9.12,9.12,0,0,1-4.66-4.62c-.19-.44-.35-.91-.54-1.35a10.26,10.26,0,0,0-2.78-3.87,1.37,1.37,0,0,0-1-.43,1.09,1.09,0,0,0-.75.81,3.09,3.09,0,0,0-.08,1.25,22.27,22.27,0,0,0,.5,2.92l.57,2.58a5.66,5.66,0,0,0,.35,1.15,4,4,0,0,0,.95,1.13c.52.48,1.05.94,1.58,1.4a5.43,5.43,0,0,0,1,.69,5.81,5.81,0,0,0,1.77.52,15.06,15.06,0,0,1,6.64,2.56s0-1.73,0-1.92a2.54,2.54,0,0,0-.5-1.39A8.87,8.87,0,0,0,478.42,614.8Z"
                            transform="translate(-52 -162.63)" fill="#fbbebe" />
                        <path
                            d="M478.42,614.8a9.12,9.12,0,0,1-4.66-4.62c-.19-.44-.35-.91-.54-1.35a10.26,10.26,0,0,0-2.78-3.87,1.37,1.37,0,0,0-1-.43,1.09,1.09,0,0,0-.75.81,3.09,3.09,0,0,0-.08,1.25,22.27,22.27,0,0,0,.5,2.92l.57,2.58a5.66,5.66,0,0,0,.35,1.15,4,4,0,0,0,.95,1.13c.52.48,1.05.94,1.58,1.4a5.43,5.43,0,0,0,1,.69,5.81,5.81,0,0,0,1.77.52,15.06,15.06,0,0,1,6.64,2.56s0-1.73,0-1.92a2.54,2.54,0,0,0-.5-1.39A8.87,8.87,0,0,0,478.42,614.8Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <ellipse cx="450.2" cy="429.57" rx="2.84" ry="2.86" fill="#2f2e41" />
                        <path
                            d="M500.44,590.48a3.07,3.07,0,0,0-2.24.32,3.11,3.11,0,0,0-.77,1.05,15.25,15.25,0,0,0-1.48,3.48c-.25,1-.29,2.13-.61,3.16-.58,1.9-2.07,3.51-2.24,5.49-.08.89.07,1.93-.58,2.53a3.68,3.68,0,0,1-.51.37,3.84,3.84,0,0,0-1.12,1.15,3.77,3.77,0,0,1-.79,1.09c-.58.43-1.54.39-1.82,1s.45,1.44.28,2.16-.8.86-1.25,1.26a4.37,4.37,0,0,0-1.08,2,6.67,6.67,0,0,1-5.44-1.35,17.32,17.32,0,0,1,.85,6.22,2.54,2.54,0,0,1-.5,1.92,34.64,34.64,0,0,1,6.67,1.16,4.6,4.6,0,0,0,2.91,0,4.86,4.86,0,0,0,1.34-1.06c1.2-1.22,2.46-2.55,2.75-4.24a24.91,24.91,0,0,0,.05-2.87,16.18,16.18,0,0,1,.73-3.49,41.53,41.53,0,0,0,1.27-7.18c.13-1.5,1.43-2.7,2.11-4,1.28-2.53,2.6-5.16,2.69-8C501.7,591.73,501.38,590.58,500.44,590.48Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M500.44,590.48a3.07,3.07,0,0,0-2.24.32,3.11,3.11,0,0,0-.77,1.05,15.25,15.25,0,0,0-1.48,3.48c-.25,1-.29,2.13-.61,3.16-.58,1.9-2.07,3.51-2.24,5.49-.08.89.07,1.93-.58,2.53a3.68,3.68,0,0,1-.51.37,3.84,3.84,0,0,0-1.12,1.15,3.77,3.77,0,0,1-.79,1.09c-.58.43-1.54.39-1.82,1s.45,1.44.28,2.16-.8.86-1.25,1.26a4.37,4.37,0,0,0-1.08,2,6.67,6.67,0,0,1-5.44-1.35,17.32,17.32,0,0,1,.85,6.22,2.54,2.54,0,0,1-.5,1.92,34.64,34.64,0,0,1,6.67,1.16,4.6,4.6,0,0,0,2.91,0,4.86,4.86,0,0,0,1.34-1.06c1.2-1.22,2.46-2.55,2.75-4.24a24.91,24.91,0,0,0,.05-2.87,16.18,16.18,0,0,1,.73-3.49,41.53,41.53,0,0,0,1.27-7.18c.13-1.5,1.43-2.7,2.11-4,1.28-2.53,2.6-5.16,2.69-8C501.7,591.73,501.38,590.58,500.44,590.48Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M497.78,636c-2.43-1.16-4.21-3.31-6.18-5.16-3.75-3.53-8.34-6-12.29-9.33-2.62-2.19-5-4.74-7.83-6.58a19.57,19.57,0,0,0-8.39-2.93,2.23,2.23,0,0,0-1,0,2.3,2.3,0,0,0-.95.75,30.22,30.22,0,0,0-3.39,4.65c-5,8.5-12.11,15.64-18,23.54a1.5,1.5,0,0,0-.29.56,1.39,1.39,0,0,0,.22.87l1.2,2.34c.67,1.32,1.75,2.85,3.19,2.59a3.49,3.49,0,0,0,1.67-1.07l5.38-5.15,5.64-5.39c3.3-3.15,6.66-6.38,8.82-10.42,1.68,2.92,4.67,4.83,6.71,7.5.78,1,1.42,2.13,2.12,3.21,1.11,1.72,2.38,3.34,3.64,5l6.47,8.25a12.38,12.38,0,0,0,3,3,11.45,11.45,0,0,0,5.19,1.39,68.59,68.59,0,0,0,7.31.26,12.6,12.6,0,0,0,5.45-1,4.94,4.94,0,0,0,2.95-4.39,6.44,6.44,0,0,0-.93-2.73C505.15,641.59,502.13,638.07,497.78,636Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <ellipse cx="451.95" cy="431.55" rx="2.19" ry="2.2" fill="#e8e8f0" />
                        <path
                            d="M503.47,592.53a4.21,4.21,0,0,1,.24,3.16,12.82,12.82,0,0,1-1.41,2.91,13.85,13.85,0,0,1-1.83,2.6c3.38.16,6.65-1.16,9.62-2.76,2.4-1.29,4.79-2.88,6.07-5.29a2.8,2.8,0,0,1-2.24-.42,8,8,0,0,1-1.71-1.59l-1.69-1.9a7.61,7.61,0,0,1-1-1.37,3.78,3.78,0,0,1-.45-2.21,12.87,12.87,0,0,1-2.24,1.86c-1.21.79-2.54,1.36-3.76,2.14-.42.28-1.38.72-1.13,1.28S503.13,591.93,503.47,592.53Z"
                            transform="translate(-52 -162.63)" fill="#fbbebe" />
                        <path
                            d="M503.47,592.53a4.21,4.21,0,0,1,.24,3.16,12.82,12.82,0,0,1-1.41,2.91,13.85,13.85,0,0,1-1.83,2.6c3.38.16,6.65-1.16,9.62-2.76,2.4-1.29,4.79-2.88,6.07-5.29a2.8,2.8,0,0,1-2.24-.42,8,8,0,0,1-1.71-1.59l-1.69-1.9a7.61,7.61,0,0,1-1-1.37,3.78,3.78,0,0,1-.45-2.21,12.87,12.87,0,0,1-2.24,1.86c-1.21.79-2.54,1.36-3.76,2.14-.42.28-1.38.72-1.13,1.28S503.13,591.93,503.47,592.53Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M503.51,592.86a2.85,2.85,0,0,0,0,3.3c.1.12.46.87.61.88a.55.55,0,0,0,.38-.2,25.1,25.1,0,0,0,2.14-2.55,4.76,4.76,0,0,1,2.72-1.78,5.88,5.88,0,0,1,3.75,1.17,3.56,3.56,0,0,1,1.29,1,3.49,3.49,0,0,1,.42,1.43,68.9,68.9,0,0,1,.38,9.09,35.82,35.82,0,0,1-.43,6.55c-.22,1.11-.54,2.2-.69,3.33a21.24,21.24,0,0,0-.14,3v4.18a11,11,0,0,0,.16,2.29c.2.91.63,1.76.92,2.65a17.33,17.33,0,0,1,.61,3.13l.57,4.32c.18,1.36.32,2.85-.51,4-.37.49-.86.89-1.24,1.38-1.41,1.84-1,4.47-1.55,6.72a8.38,8.38,0,0,1-2.74,4.2,4.53,4.53,0,0,1-3.61,1.29c-1.76-.33-2.81-2.16-3.29-3.89s-.65-3.61-1.69-5.07a13.45,13.45,0,0,0-3.34-2.79,5.77,5.77,0,0,1-2.61-3.39c-.11-.63,0-1.28-.11-1.92a4.53,4.53,0,0,0-2.79-3.67c-.9-.35-2-.48-2.52-1.3a6.07,6.07,0,0,0,2.63-3.53,18.13,18.13,0,0,0,.64-4.46l.3-5c.14-2.25.2-4.47,1.19-6.49.44-.9,1-1.75,1.45-2.64a28.66,28.66,0,0,0,1.55-3.87c.72-2.06,1.44-4.12,2.08-6.2a11.68,11.68,0,0,1,1.14-2.89C501.72,594.19,502.5,593.06,503.51,592.86Z"
                            transform="translate(-52 -162.63)" fill="#e8e8f0" />
                        <path
                            d="M492.36,625.5l1.33,0,.28-2a4.17,4.17,0,0,1,.28-1.17,7,7,0,0,1,.77-1.12c1.3-1.85,1.21-4.3,1.53-6.55a33.33,33.33,0,0,1,2.92-8.56l2.58-5.75a7.94,7.94,0,0,0,.56-1.47,8.82,8.82,0,0,0,.16-1.7c0-.89.28-4.13.31-5,0-.33-.73-.15-.88-.44-.32-.64-.76,1.09-1.37,1.47a3.36,3.36,0,0,0-1.19,1.74c-.56,1.44-.9,3-1.42,4.43a9.05,9.05,0,0,1-2.41,3.92c-.53.46-1.14.83-1.64,1.33-1.6,1.58-1.76,4.09-1.81,6.35C492.32,612.36,492.06,625.5,492.36,625.5Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M511.5,590.47a4.54,4.54,0,0,0-2.37,3.25,16.44,16.44,0,0,1-1.2,4c-1.62,2.82-5.75,3.64-6.9,6.69a12.3,12.3,0,0,0-.46,3.15c-.2,2.19-.92,4.3-1.14,6.48a28.87,28.87,0,0,0,.12,5.09L501,636.35a23,23,0,0,1-.43,7.58,7.3,7.3,0,0,0,4.34-.72c1.35-.62,2.59-1.47,3.9-2.19,2.24-1.24,4.72-2.11,6.69-3.76a4.09,4.09,0,0,0,.9-1A8.65,8.65,0,0,0,517,634a12.2,12.2,0,0,1,.65-1.78,52.45,52.45,0,0,0,1.88-5.32,30.53,30.53,0,0,0,.86-3.64c.16-1,.25-2,.33-3a17.6,17.6,0,0,1,.92-4.55,36.65,36.65,0,0,0,2.11-10.92,5.71,5.71,0,0,0-.11-1.6,8.56,8.56,0,0,0-.88-1.83c-.6-1.13-1-2.37-1.52-3.52a17.31,17.31,0,0,0-5.91-6.21C514.17,590.84,512.81,590,511.5,590.47Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M481.29,618.57a10.43,10.43,0,0,1-2.75-2.09c-.36-.42-.66-.89-1-1.31a6.81,6.81,0,0,0-3.46-2,16.9,16.9,0,0,0-4-.39,7.26,7.26,0,0,0-2.67.32,2.72,2.72,0,0,0-1.77,1.9,3.15,3.15,0,0,0,1.35,2.8,6.36,6.36,0,0,0,2.69,1.3,21.5,21.5,0,0,0,2.43.29c4.78.5,9.05,3.1,13.24,5.47q5.52,3.14,11.26,5.84a23.4,23.4,0,0,0,.19-3.45c0-.86-.07-2.18-.88-2.69a17.66,17.66,0,0,0-3.58-1.07,56.34,56.34,0,0,1-7.21-2.92C483.81,620,482.54,619.3,481.29,618.57Z"
                            transform="translate(-52 -162.63)" fill="#fbbebe" />
                        <ellipse cx="450.2" cy="420.35" rx="8.52" ry="8.57" fill="#fbbebe" />
                        <path
                            d="M513.93,600.18a13.66,13.66,0,0,0-1.65,3.09c-1,2.16-2.7,4-3.53,6.29s-.84,5.23-2.55,7.1a2.49,2.49,0,0,0-.75,1.08,5.16,5.16,0,0,1-.08.78c-.25.68-1.36.71-1.57,1.41-.06.2,0,.42-.1.62-.17.45-.77.52-1.16.79-.83.56-.66,1.86-1.25,2.67a2.25,2.25,0,0,1-2.13.75,7.5,7.5,0,0,1-2.21-.83,2.13,2.13,0,0,0-.8-.25,1.65,1.65,0,0,0-.92.32,5.67,5.67,0,0,0-2.3,4.85,15.84,15.84,0,0,0,1.32,5.43,2.18,2.18,0,0,0,.43.81,1.91,1.91,0,0,0,2.12.16,10,10,0,0,1,2.07-.93c1.32-.24,2.61.67,3.95.59a5.49,5.49,0,0,0,2.66-1.17,14.7,14.7,0,0,0,3.58-3c.58-.77,1-1.64,1.52-2.46a31.54,31.54,0,0,1,2.15-2.87l4.92-6a13.83,13.83,0,0,0,1.32-1.82,12.83,12.83,0,0,0,1-2.75,21.07,21.07,0,0,0,1-4.89,18.79,18.79,0,0,0-.36-4.1,14.49,14.49,0,0,0-1-3.91C518.54,599.68,515.94,597.84,513.93,600.18Z"
                            transform="translate(-52 -162.63)" fill="#2f2e41" />
                        <path
                            d="M531.05,589a9.6,9.6,0,0,0-3.94-7.8,11.41,11.41,0,0,0-9.69-11.11,11.07,11.07,0,0,0-21.81.59c-3.54-.8-6.78.24-7.37,2.42s1.91,5,5.64,6a10.51,10.51,0,0,0,3.62.36,11.08,11.08,0,0,0,7.62,4.75,11.37,11.37,0,0,0,8.32,8.58,9.55,9.55,0,0,0,2.57,3.55c0,.27,0,.55,0,.83a7.21,7.21,0,1,0,14.42,0,7.7,7.7,0,0,0-.69-3.19A9.64,9.64,0,0,0,531.05,589Z"
                            transform="translate(-52 -162.63)" fill="#f86d70" />
                        <path
                            d="M490.64,573.56c.59-2.18,3.83-3.22,7.37-2.42a11.26,11.26,0,0,1,11-9.48l.73,0a10.84,10.84,0,0,0-3.14-.47,11.26,11.26,0,0,0-11,9.48c-3.54-.8-6.78.24-7.37,2.42s1.91,5,5.64,6a11,11,0,0,0,2.14.37C492.44,578.39,490.05,575.79,490.64,573.56Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <path
                            d="M518.37,597.59a7.52,7.52,0,0,1,0-.82,9.34,9.34,0,0,1-2.57-3.55,11.34,11.34,0,0,1-8.32-8.59,11.05,11.05,0,0,1-7.63-4.74,9.6,9.6,0,0,1-2.13-.06,11.11,11.11,0,0,0,7.35,4.37,11.37,11.37,0,0,0,8.32,8.58,9.55,9.55,0,0,0,2.57,3.55c0,.27,0,.55,0,.83a7.34,7.34,0,0,0,7.17,7.46A7.46,7.46,0,0,1,518.37,597.59Z"
                            transform="translate(-52 -162.63)" opacity="0.1" />
                        <ellipse cx="505.04" cy="584.74" rx="1.31" ry="1.75"
                            transform="translate(-302.82 261.95) rotate(-37.22)" fill="#fbbebe" />
                    </svg>
                </div>
            </div>
            <div class="">
                <div>
                    <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
                    <input
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" placeholder="">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                    <input
                        class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text">
                </div>
                <div class="mt-8">
                    <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
                    <textarea class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="mt-8">
                    <button
                        class="uppercase text-sm font-bold tracking-wide bg-green-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- contact us end here --}}

    {{-- footer start here --}}
    <div class="bg-gray-100 pt-5">
        <div class=" container   text-gray-800 sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto">
            <div class="p-5">
                <h3 class="font-bold text-xl text-green-500">Componentity</h3>
                <div class="text-base text-gray-500 text-justify">
                    Education | Definition, Development, History, Types, & Facts ...
                    Education refers to the discipline that is concerned with methods of teaching and learning in
                    schools or school-like environments, as opposed to various nonformal and informal means of
                    socializatio
                </div>
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-green-500 font-bold">Resources</div>
                <a class="my-3 block" href="/#">Documentation <span
                        class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                    href="/#">Tutorials <span class="text-teal-600 text-xs p-1"></span></a><a
                    class="my-3 block" href="/#">Support <span
                        class="text-teal-600 text-xs p-1">New</span></a>
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-green-500 font-bold">Support</div>
                <a class="my-3 block" href="/#">Help Center <span
                        class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Privacy
                    Policy <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                    href="/#">Conditions <span class="text-teal-600 text-xs p-1"></span></a>
            </div>
            <div class="p-5">
                <div class="text-sm uppercase text-green-500 font-bold">Contact us</div>
                <a class="my-3 block" href="/#">XXX XXXX, Floor 4 San Francisco, CA <span
                        class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                    href="/#">contact@company.com <span class="text-teal-600 text-xs p-1"></span></a>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 pt-2">
        <div
            class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col
           max-w-screen-lg items-center">
            <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                <a href="/#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-green-500" width="100%"
                        height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                        xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Twitter"
                            d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                       5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                       -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                       0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                       -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                       0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                       -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                       0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                       -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                       -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                       1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                       -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                       6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                       0.771,-0.67 1.054,-1.093Z">
                        </path>
                    </svg>
                </a>
                <a href="/#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-green-500" width="100%"
                        height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                        xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Facebook"
                            d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                       5.373,-12 12,-12c6.627,0 12,5.373
                       12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                       0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                       -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z">
                        </path>
                    </svg>
                </a>
                <a href="/#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-green-500" width="100%"
                        height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                        xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <g id="Layer_1">
                            <circle id="Oval" cx="12" cy="12" r="12"></circle>
                            <path id="Shape"
                                d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                          -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                          -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                          -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                          -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                          0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                          2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                          1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                          0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                          -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                          -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                          -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                          0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                          0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z"
                                style="fill: rgb(255, 255, 255);"></path>
                        </g>
                    </svg>
                </a>
                <a href="/#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-green-500" width="100%"
                        height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                        xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Shape"
                            d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                       3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                       -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                       -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                       -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                       0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                       3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                       -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                       -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                       1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                       -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                       -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                       0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                       0.4,1.5l0,4.5l2.9,0Z">
                        </path>
                    </svg>
                </a>
                <a href="/#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-green-500" width="100%"
                        height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                        xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Combined-Shape"
                            d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                       -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                       -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                       0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                       0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                       -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z">
                        </path>
                    </svg>
                </a>
            </div>

        </div>
    </div>
    {{-- footer end here --}}

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
