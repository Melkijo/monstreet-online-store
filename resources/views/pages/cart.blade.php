@extends('layouts.x-master')
@section('content')

    <div class="overflow-x-auto text-white py-20">
        <h1 class="text-[2rem] font-bold mb-5">My Cart List</h1>
        <table id="cart" class="table  " aria-label="cart">
            <thead>
                <tr class="text-white">
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr class="py-5 rounded-xl backdrop-blur-sm bg-white/30 bg-opacity-30 ">
                            <td>
                                <div class="row flex gap-5 items-center">
                                    <img src="{{ $details['image'] }}" class="object-cover w-40 h-40" alt="cart" />

                                    <div>
                                        <h4 class="text-[1rem] font-bold">{{ $details['title'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td>Rp. {{ $details['price'] }}</td>
                            <td>
                                {{ $details['quantity'] }}
                            </td>
                            <td>Rp. {{ $details['price'] * $details['quantity'] }}</td>
                            <td>
                                <form action="{{ route('remove.from.cart', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-error" value="Delete">

                                </form>

                            </td>


                        </tr>
                    @endforeach
                @endif
            </tbody>


        </table>


        <div class="flex justify-end my-5 w-full text-left">
            <h3><strong>Total Rp. {{ $total }}</strong></h3>
        </div>


        <div class="flex justify-end gap-5 w-full">
            <a href="{{ url('/') }}" class="btn btn-outline text-white border-white  hover:bg-white hover:text-black">
                Continue
                Shopping</a>
            <button class="btn btn-success">Checkout</button>
        </div>

    </div>


@endsection
