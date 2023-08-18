@extends('layouts.x-master')
@section('content')
    <div class="flex justify-center my-40">
        <form class="max-w-[1440px] mx-auto h-full" method="POST" action="{{ route('register') }}">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ Session::get('success') }}</span>
                </div>
            @endif
            @csrf
            <div
                class="flex flex-col gap-5 px-10  items-center w-[500px] py-5 rounded-xl backdrop-blur-sm bg-white/30 bg-opacity-30  text-white">

                <h3 class="text-[2rem] font-bold">REGISTRATION</h3>
                <div class="flex flex-col  w-full gap-2 ">
                    <label for="name">name</label>
                    <input id="name" type="text" name="name" placeholder="Type here"
                        class="input input-bordered w-full text-black" />
                </div>
                <div class="flex flex-col   w-full gap-2">
                    <label for="email">Email</label>
                    <input id="email" type="email"name="email" placeholder="Type here"
                        class="input input-bordered w-full  text-black" />
                </div>
                <div class="flex flex-col  w-full gap-2">
                    <label for="password">password</label>
                    <input id="password" type="password" name="password" placeholder="Type here"
                        class="input input-bordered w-full text-black" />
                </div>

                <input class="btn btn-neutral w-full" type="submit" value="Register">
                <p>Already have an account? <a href="/login" class=" underline">Login</a></p>
            </div>

        </form>
    </div>
@endsection
