<div class="drawer lg:drawer-open ">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col px-5">
        <!-- Page content here -->
        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        @yield('extra-content')

    </div>
    <div class="drawer-side  ">
        <label for="my-drawer-2" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 h-full text-white  bg-[#100F0F]">
            <!-- Sidebar content here -->
            @if (Auth::user()->type == 'admin')
                <li><a href="{{ route('admin') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.products') }}">Product</a></li>
                <li><a href="{{ route('admin.orders-history') }}">History Order</a></li>
                <li><a href="{{ route('admin.users') }}">List User</a></li>
            @else
                <li><a href="{{ route('user') }}">Carts</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
                <li><a href="{{ route('order.history') }}">Order History</a></li>
            @endif



        </ul>

    </div>
</div>
