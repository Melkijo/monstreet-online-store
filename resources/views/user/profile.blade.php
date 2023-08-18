@extends('layouts.dashboard')
@section('extra-content')
    <h1 class="text-white text-[2rem] font-bold mt-10 mb-5">PROFILE</h1>
    <div id="profile-form">
        <form action="{{ route('profile.edit', Auth::user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="text-white flex  gap-10 mb-5">
                <div class=" basis-1/2  flex flex-col gap-3">
                    <div class="flex flex-col">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                            class="input input-bordered w-full  text-black" readonly />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}"
                            class="input input-bordered w-full  text-black" readonly />
                    </div>
                    <div class="flex flex-col">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="********" value={{ Auth::user()->password }}
                            class="input input-bordered w-full  text-black" readonly />
                    </div>
                </div>
            </div>

            <div id="editTrue" class="hidden flex gap-3">
                <button class="btn" id="cancel">Cancel</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>

            <div id="editFalse">
                <button class="btn btn-success" id="edit">Edit</button>

            </div>

        </form>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let form = document.querySelector('#profile-form form');
            let inputs = form.querySelectorAll('input');
            let editButton = document.querySelector('#profile-form #edit');
            let editFalse = document.querySelector('#profile-form #editFalse');

            let editTrue = document.querySelector('#profile-form #editTrue');
            editButton.addEventListener('click', function(event) {
                event.preventDefault();

                editTrue.classList.remove('hidden');
                editFalse.classList.add('hidden');
                // Toggle the 'readonly' attribute on input fields
                inputs.forEach(function(input) {
                    input.readOnly = false;
                });
            });

            let cancelButton = document.querySelector('#profile-form #cancel');
            cancelButton.addEventListener('click', function(event) {
                event.preventDefault();
                editTrue.classList.add('hidden');
                editFalse.classList.remove('hidden');
                inputs.forEach(function(input) {
                    input.readOnly = true;
                });
            })
        });
    </script>
@endsection
