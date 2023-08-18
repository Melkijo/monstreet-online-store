@extends('layouts.dashboard')
@section('extra-content')
    <div class="overflow-x-auto">
        {{-- description --}}
        <div class="flex justify-between items-center mt-10 mb-5">
            <h1 class="text-[2rem] text-white  font-bold">LIST USER</h1>

        </div>
        <table class="table " aria-describedby="">
            <!-- head -->
            <thead>
                <tr class="text-white">
                    <th>no</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if ($user->type != 'admin')
                        <tr class="backdrop-blur-sm bg-white/30 bg-opacity-30 text-white">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td class="flex gap-5">

                                <form action="{{ route('admin.destroy.user', $user->id) }}" method="POST">

                                    @csrf

                                    @method('DELETE')
                                    <button class="btn btn-error" type="submit">Delete</button>

                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="px-5 py-5">
            {{ $users->links() }}

        </div>
    </div>
@endsection
