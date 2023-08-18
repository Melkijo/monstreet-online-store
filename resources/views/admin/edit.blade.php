@extends('layouts.dashboard')
@section('extra-content')
    <h1 class="text-white text-[2rem] font-bold mt-10 mb-5">Edit</h1>
    <form method="POST" action="{{ route('admin.edit', $product->id) }}" enctype="multipart/form-data">
        @if (Session::has('success'))
            <div class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ Session::get('success') }}</span>
            </div>
        @endif
        @csrf
        @method('PUT')
        <div class="text-white flex  gap-10">
            <div class=" basis-1/2  flex flex-col gap-3">
                <div class="flex flex-col">
                    <label for="">Name</label>
                    <input type="text" name="title" placeholder="Type here" value="{{ $product->title }}"
                        class="input input-bordered w-full  text-black" />
                </div>
                <div class="flex flex-col">
                    <label for="">Image</label>
                    <input type="file" name="image" class="file-input file-input-bordered w-full  text-black"
                        value="{{ $product->image }}" />
                </div>
                <div class="flex flex-col">
                    <label for="">Price</label>
                    <input type="text" name="price" placeholder="Type here" value="{{ $product->price }}"
                        class="input input-bordered w-full  text-black" />
                </div>
            </div>
            <div class="basis-1/2 flex flex-col gap-3">
                <div class="flex flex-col">
                    <label for="">stok</label>
                    <input name="stock" type="number" placeholder="Type here" value="{{ $product->stock }}"
                        class="input input-bordered w-full  text-black" />
                </div>
                <div class="flex flex-col h-full">
                    <label for="">desc</label>
                    <textarea name="desc" class="textarea textarea-bordered h-full text-black" placeholder="Bio">{{ $product->desc }}</textarea>
                </div>
            </div>


        </div>
        <input class="btn btn-success mt-5" type="submit" value="Submit">
    </form>
@endsection
