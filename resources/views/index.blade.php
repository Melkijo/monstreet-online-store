@extends('layouts.x-master')
@section('content')

    <div class="my-10">
        <img class=" mx-auto rounded-xl h-[450px] w-full object-cover" src="./assets/hero.png" alt="">
    </div>


    <div class="my-10 flex">
        <div class="flex flex-col gap-10 w-full">
            <div class="flex justify-between flex-wrap gap-5 px-3 w-full">
                <h1 class="text-white font-bold text-[2rem]">ALL PRODUCTS</h1>
                <form method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" value="{{ request()->get('search') }}"
                            class="form-control ps-5" placeholder="Search..." aria-label="Search"
                            aria-describedby="button-addon2">
                        <button class="btn btn-neutral" type="submit" id="button-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <div class="mx-auto">
                <div class="flex justify-center gap-12 flex-wrap items-center px-2
                ">
                    @foreach ($products as $product)
                        <div class="card card-compact w-80 bg-base-100  border">
                            <figure><img class=" h-64 w-full object-cover"
                                    src="{{ $product->created_at ? asset('images/' . $product->image) : $product->image }}"
                                    alt="Shoes" />
                            </figure>
                            <div class="card-body h-48">
                                <h2 class="card-title">{{ $product->title }}</h2>
                                <p>Rp. {{ $product->price }}</p>
                                <div class="card-actions mt-3 justify-between">
                                    <a href="/products/{{ $product->id }}">
                                        <button class="btn btn-neutral btn-outline ">view more</button>
                                    </a>
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
                    @endforeach


                </div>
            </div>

        </div>

    </div>
    <div class="px-5 pb-10">
        {{ $products->links() }}

    </div>

@stop
