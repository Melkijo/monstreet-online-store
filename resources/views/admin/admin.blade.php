@extends('layouts.dashboard')
@section('extra-content')
    <div class="flex gap-10 flex-wrap mt-14">
        <div class="p-5 rounded-xl flex flex-col gap-3 text-white backdrop-blur-sm bg-white/30 bg-opacity-30">
            <h3 class="font-bold text-[1.5rem]">TOTAL ORDERS</h3>
            <h5 class="text-[1.25rem]">{{ $totalOrder }} </h5>
        </div>
        <div class="p-5 rounded-xl flex flex-col gap-3 text-white backdrop-blur-sm bg-white/30 bg-opacity-30">
            <h3 class="font-bold text-[1.5rem]">TOTAL REVENUE</h3>
            <h5 class="text-[1.25rem]">Rp. {{ $totalRevenue }}</h5>
        </div>
        <div class="p-5 rounded-xl flex flex-col gap-3 text-white backdrop-blur-sm bg-white/30 bg-opacity-30">
            <h3 class="font-bold text-[1.5rem]">TOTAL USER</h3>
            <h5 class="text-[1.25rem]">{{ $totalUser }}</h5>
        </div>
        <div class="p-5 rounded-xl flex flex-col gap-3 text-white backdrop-blur-sm bg-white/30 bg-opacity-30">
            <h3 class="font-bold text-[1.5rem]">TOTAL PRODUCT</h3>
            <h5 class="text-[1.25rem]">{{ $totalProduct }}</h5>
        </div>

    </div>
@endsection
