@extends('layouts.user.app')
@section('title', 'Tutor singup')
@section('content')

    <section class="w-96 md:w-[450px] mx-auto border border-green-400 rounded-md shadow p-5 mt-12 mb-12">
        <img class="h-12 mx-auto"
            src="https://play-lh.googleusercontent.com/bXqShzaPZQpV1EmdqnmCqLFNfFbidLo8AMJylMhkMqXQLY97yIJV04zWb6YV_JM1tg"
            alt="">

         <form method="POST" action="{{ route('login') }}">
                        @csrf
            {{-- email --}}
            <div class="my-4">
                <label for="">Email</label><br>
                <input name="email" type="email" placeholder="Type here" class="input input-bordered w-full " />
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- password --}}
            <div class="my-4">
                <label for="">Password</label><br>
                <input name="password" type="password" placeholder="Type here" class="input input-bordered w-full " />
                
                @error('password')
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
@endsection
