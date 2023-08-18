<div class="pt-5 relative z-20">
    <div
        class=" md:flex-nowrap rounded-full navbar mx-auto px-5 max-w-[1440px] backdrop-blur-sm bg-white/30 bg-opacity-30  text-white ">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-black gap-3 py-3">
                    <li><a href="/" class="">Product</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl" href="/">MONSTREET</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-[1rem] font-semibold">
                <li><a href="/">Product</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </div>
        @if (Auth::check())
            <div class="navbar-end">
                <div class="flex gap-5 items-center">
                    @if (Auth::user()->type === 'user')
                        <a href="{{ route('user') }}" class="btn ">
                            MY CART
                        </a>
                    @endif
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full  border-white border-2">
                                <img src="/assets/carousel1.jpg" alt="IMG" />
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content mt-3 z-[1] p-2
                            shadow bg-base-100 rounded-box w-52 text-black gap-3 py-3">
                            <li>
                                @if (Auth::user()->type == 'admin')
                                    <a href="{{ route('admin') }}">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('user') }}">
                                        Dashboard
                                    </a>
                                @endif

                            </li>

                            <li class="p-0">
                                <form action="{{ route('logout') }}" method="POST" class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" w-44 flex justify-start">
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        @else
            <div class="navbar-end">
                <div class="menu menu-horizontal px-1 flex items-center gap-7">
                    <div><a href="/login" class="font-bold">LOGIN</a></div>

                    <div><a href="/register" class="hover:none"><button
                                class="font-bold btn bg-[#3DB39E] border-none rounded-full px-7 text-white hover:bg-[#5cc4b3]">Register</button>
                        </a></div>
                    </ul>

                </div>
        @endif

    </div>
</div>
