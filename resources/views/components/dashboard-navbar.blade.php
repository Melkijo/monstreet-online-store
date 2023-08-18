<div class="navbar backdrop-blur-sm bg-white/30 bg-opacity-30 py-3">
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
