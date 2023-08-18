@extends('layouts.dashboard')
@section('extra-content')
    <div class="overflow-x-auto">
        {{-- description --}}
        <div class="flex justify-between items-center mt-10 mb-5">
            <h1 class="text-[2rem] text-white  font-bold">LIST PRODUCT</h1>
            <div>
                <a href="{{ route('admin.create') }}" class="btn btn-success"> Add Product +</a>
            </div>
        </div>
        <table class="table " aria-describedby="">
            <!-- head -->
            <thead>
                <tr class="text-white">
                    <th>no</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>stok</th>
                    <th>Desc</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="backdrop-blur-sm bg-white/30 bg-opacity-30 text-white">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->desc }}</td>
                        <td>{{ $product->stock }}</td>
                        <td class="flex gap-5">
                            <form action="{{ route('admin.edit', $product->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-warning" type="submit">Edit</button>

                            </form>

                            <form action="{{ route('admin.destroy', $product->id) }}" method="POST">

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
            {{ $products->links() }}

        </div>
    </div>
@endsection
