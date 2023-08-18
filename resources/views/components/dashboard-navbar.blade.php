<div class="navbar bg-[#100F0F]">
    <div class="flex-1">
        <a href="/" class="btn btn-ghost normal-case text-xl text-white">MONSTREET</a>
    </div>
    <div class="flex-none">

        <div class="dropdown dropdown-end">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Logout" class="btn btn-error w-full">

            </form>
        </div>
    </div>
</div>
