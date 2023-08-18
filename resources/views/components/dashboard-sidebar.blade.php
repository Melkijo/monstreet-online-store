<div class="drawer lg:drawer-open ">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col px-5">
        <!-- Page content here -->
        <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
        @yield('extra-content')

    </div>
    <div class="drawer-side  ">
        <label for="my-drawer-2" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 h-full text-white  bg-[#100F0F] flex flex-col gap-5 font-medium">
            <!-- Sidebar content here -->
            @if (Auth::user()->type == 'admin')
                <li><a href="{{ route('admin') }}"><i class="fa-solid fa-tv" style="color: #ffffff;"></i>Dashboard</a>
                </li>
                <li><a href="{{ route('admin.products') }}"><i class="fa-solid fa-cube" style="color: #ffffff;"></i>
                        Product</a></li>
                <li><a href="{{ route('admin.orders-history') }}"><i class="fa-solid fa-scroll"
                            style="color: #ffffff;"></i>History Order</a></li>
                <li><a href="{{ route('admin.users') }}"><i class="fa-solid fa-users" style="color: #ffffff;"></i>List
                        User</a></li>
            @else
                <li><a href="{{ route('user') }}"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                        Carts</a></li>
                <li><a href="{{ route('profile') }}"><i class="fa-solid fa-user" style="color: #ffffff;"></i>
                        Profile</a></li>
                <li><a href="{{ route('order.history') }}"><i class="fa-solid fa-scroll" style="color: #ffffff;"></i>
                        Order History</a></li>
            @endif



        </ul>

    </div>
</div>
