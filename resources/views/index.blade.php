@extends('layout.base')

@section('title', 'Página Inicial')

@section('content')
    <div class="px-10 flex flex-col gap-4">

        @if (Session::has('success'))
            @include('layout.notification', ['message' => Session::get('success')])
        @endif

        <x-alert 
            type="error"
            :title="$title"
            :$message
        />

        @datetime(now());
        <form action="{{ route('send-form') }}" method="POST">
            @csrf
            <div class="flex flex-col gap-4">

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input 
                            type="email"
                            name="email"
                            id="email"
                            value=" {{ old('email') }}"
                            @class([
                                "block w-full border rounded-md shadow-sm focus:boder-indigo-500 focus:ring-indigo-500 sm:text p-2",
                                "border-gray-300" => !$errors->has('email'),
                                "border-red-300" => $errors->has('email'),
                            ])
                            placeholder="you@exemple.com"
                        >
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Name</label>
                    <div class="mt-1">
                        <input 
                            type="text"
                            name="name"
                            id="name"
                            value=" {{ old('name') }}"
                            @class([
                                "block w-full border rounded-md shadow-sm focus:boder-indigo-500 focus:ring-indigo-500 sm:text p-2",
                                "border-gray-300" => !$errors->has('name'),
                                "border-red-300" => $errors->has('name'),
                            ])
                            placeholder="Your name here"
                        >
                    </div>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-start mt-1">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
                </div>
            </div>
        </form>
    </div>

   
@endsection