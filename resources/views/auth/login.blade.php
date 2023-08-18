@extends('layouts.x-master')
@section('content')
    <div class=" flex justify-center my-40 ">
        <form method="POST" action="{{ route('login') }}" class="max-w-[1440px] mx-auto ">
            @if (Session::has('error'))
                <div class="alert alert-error absolute w-fit -top-24 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ Session::get('error') }}</span>
                </div>
            @endif
            @csrf
            <div
                class="flex flex-col gap-5 px-10  items-center w-[500px] py-5 rounded-xl backdrop-blur-sm bg-white/30 bg-opacity-30  text-white">
                <h3 class="text-[2rem] font-bold">LOGIN</h3>

                <div class="flex flex-col  w-full gap-2">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Type here"
                        class="input input-bordered w-full text-black" />
                </div>
                <div class="flex flex-col w-full  gap-2">
                    <label for="password">password</label>
                    <input id="password" name="password" type="password" placeholder="Type here"
                        class="input input-bordered w-full text-black" />
                </div>

                <input class="btn btn-neutral w-full" type="submit" value="Login">
                <p>dont have an account? <a href="/register" class=" underline">Register</a></p>
            </div>

        </form>
    </div>
@endsection
