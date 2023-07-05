@extends('layouts.user.app')
@section('title', 'Tutor singup')
@section('content')

    <section class="container mx-auto bg-gray-50 shadow-2xl py-1 px-3">
        <div class="text-sm breadcrumbs">
            <ul>
                <li><a>Home</a></li>
                <li><a>Tutor</a></li>
                <li>Payment</li>
            </ul>
        </div>
    </section>

    <section class="md:w-[650px] mx-auto ">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class=" col-span-1 my-auto float-right">
                <div class="grid grid-cols-2 md:grid-cols-5 ">
                    {{-- card start here --}}
                    <div class="mx-auto shadow mt-3 w-80">
                        <img class="h-48  rounded-md" src="{{ asset($tutor->image) }}" alt="">
                        <p class="text-center my-3">
                            <span class="font-bold">{{ $tutor->name }}</span><br>
                            <span class="text-gray-400">{{ $tutor->subject ? $tutor->subject->subject_name : '' }}</span>
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
                            <span class="text-gray-400">Fee: {{ $tutor->fee }}</span>
                        </div>
                        <br>
                    </div>
                    {{-- card end here --}}
                </div>
            </div>
            {{-- payment form --}}
            <div class=" col-span-1">
                <section class="w-96 md:w-[450px] mx-auto  rounded-md shadow-lg p-5 mt-12 mb-12">
                    <img class="h-12 mx-auto"
                        src="https://play-lh.googleusercontent.com/bXqShzaPZQpV1EmdqnmCqLFNfFbidLo8AMJylMhkMqXQLY97yIJV04zWb6YV_JM1tg"
                        alt="">

                    <form method="POST" action="@route('tutor.payment', $tutor->tutor_id)">
                        @csrf
                        <br>
                        <span class="text-success">Payment number (bkash, rocket, nogud): 01300573753</span>
                        <input type="hidden" name="tutor_id" value="{{$tutor->tutor_id}}" id="">
                        {{-- payment amount --}}
                        <div class="my-4">
                            <label for="" class=" ">Total Amount <span class="bg-green-400 px-2 rounded-full text-white">{{ $tutor->fee }} Tk</span> </label><br>
                            <input name="amount" value="{{$tutor->fee}}" type="number" placeholder="amount"
                                class="input input-bordered w-full " />

                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- payment name --}}
                        <div class="my-4">
                            <label for="">Payment Name</label><br>
                            <input name="payment_name" type="text" placeholder="Bkash, Rocket, Nagad"
                                class="input input-bordered w-full " />

                            @error('payment_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- payment number --}}
                        <div class="my-4">
                            <label for="">Payment number</label><br>
                            <input name="payment_number" type="text" placeholder="01927xxxxxxx"
                                class="input input-bordered w-full " />

                            @error('payment_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- transection_id --}}
                        <div class="my-4">
                            <label for="">Transection Id</label><br>
                            <input name="transection_id" type="text" placeholder="kj23xowxxx"
                                class="input input-bordered w-full " />

                            @error('transection_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- form submit button --}}
                        <div class="mx-auto text-center">
                            <input type="submit" class="btn btn-outline btn-success" name="" id="">
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </section>


@endsection
