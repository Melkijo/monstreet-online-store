@extends('layouts.dashboard')
@section('extra-content')
    <div class="overflow-x-auto">
        {{-- description --}}
        <div class="flex justify-between items-center mt-10 mb-5">
            <h1 class="text-[2rem] text-white  font-bold">LIST ORDER</h1>

        </div>
        <table class="table " aria-describedby="">
            <!-- head -->
            <thead>
                <tr class="text-white">
                    <th>no</th>
                    <th>date</th>
                    <th>products</th>
                    <th>total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="backdrop-blur-sm bg-white/30 bg-opacity-30 text-white">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>
                            <ul>
                                @foreach (json_decode($order->cart) as $item)
                                    <li>
                                        - {{ $item->title }} ({{ $item->quantity }})= {{ $item->price }}

                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $order->total }}</td>
                        <td class="flex gap-5  items-center">

                            <form action="" method="POST">

                                @csrf

                                @method('DELETE')
                                <button class="btn btn-error" type="submit">Delete</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-5 py-5">
            {{ $orders->links() }}

        </div>
    </div>
@endsection
