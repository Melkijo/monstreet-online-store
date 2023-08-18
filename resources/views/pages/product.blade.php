@extends('layouts.x-master')
@section('content')
    <div class="flex justify-center my-20">
        <div class=" flex w-fit px-10 gap-10 py-10 rounded-xl backdrop-blur-sm bg-white/30 bg-opacity-30  text-white">
            <img class=" h-80 w-80 object-cover rounded-md"
                src="{{ $product->created_at ? asset('images/' . $product->image) : $product->image }}" alt="Shoes" />
            <div class="">
                <h1 class="text-[2rem] font-bold mb-3">{{ $product->title }}</h1>
                <div class="mb-3">
                    <p class="font-bold mb-2">Price: </p>
                    <p>{{ $product->price }}</p>
                </div>
                <div class="mb-3">
                    <p class="font-bold mb-2">Stock: </p>
                    <p>{{ $product->stock }}</p>
                </div>
                <div class="mb-5">
                    <p class="font-bold mb-2">Description</p>
                    <p>{{ $product->desc }}</p>
                </div>

                <div>
                    @if (Auth::check() && Auth::user()->type == 'user')
                        <a href="{{ route('add.to.cart', $product->id) }}">
                            <button class="btn btn-neutral">Add to Cart</button>
                        </a>
                    @else
                        <button class="btn btn-neutral" disabled>Add to Cart</button>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
