@extends('layouts.x-master')
@section('content')
    <div
        class="mx-auto gap-5 pe-10 flex backdrop-blur-sm my-16 rounded-2xl items-center w-[1000px] bg-white/30 bg-opacity-30 ">
        <img src="./assets/logo.png" alt="" class="w-80 h-80 object-cover">
        <div class="text-white py-5">
            <h1 class="text-4xl font-bold mb-3">MONSTREET</h1>
            <p class="text-medium">Monstreet is an online clothing brand that offers bold, modern and unique styles for
                individuals who want to express their personality through clothing. With a focus on the latest fashion
                trends and innovative designs, Monstreet has become the go-to destination for those seeking clothing that is
                not only comfortable and quality, but also reflects the urban spirit that is full of energy.</p>
        </div>
    </div>
    <div
        class="mx-auto gap-5 ps-10 flex backdrop-blur-sm my-16 rounded-2xl items-center w-[1000px] bg-white/30 bg-opacity-30 ">
        <div class="text-white py-5 h-full">
            <h1 class="text-4xl font-bold mb-3">THE CREATOR</h1>
            <p class="text-medium">
            <ul class="pb-5">
                <li>Name: Melki Jonathan Andara</li>
                <li>Age: 21</li>
                <li>Education: Mataram University</li>
            </ul>
            I am currently a student at Mataram University pursuing a degree in Informatics Engineering. I have a profound
            passion for the field of technology, as it provides me with valuable knowledge that can be applied across
            various domains. My goal is to become a skilled software engineer who can leverage technology to help others
            solve their problems.
            <p class="font-bold mt-5">More about me:</p>
            <div class="flex  gap-5 mt-3">
                <a href="https://www.mejodev.online/" target="_blank">
                    <i class="fa-solid fa-globe fa-xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/melki-jonathan/" target="_blank">
                    <i class="fa-brands fa-linkedin fa-xl"></i>
                </a>
                <a href="https://github.com/Melkijo" target="_blank">
                    <i class="fa-brands fa-github fa-xl"></i>
                </a>
                <a href="https://www.instagram.com/melkijo/" target="_blank">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                </a>
            </div>
            </p>
        </div>
        <img src="./assets/about-profile.png" alt="" class="w-80 h-[450px] object-cover">
    </div>
@endsection
