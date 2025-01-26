@extends('layout.base')

@section('title', 'Página Inicial')

@section('content')
    <div class="px-10 flex flex-col gap-4">

        @if (Session::has('success'))
            @include('layout.notification', ['message' => Session::get('success')])
        @endif

        <x-alert 
            andre="costa"
            type="success"
            :title="$title"
            :$message
            class="mt-4"
        >
            <x-slot:icon>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
              </x-slot:icon>
            <x-button andre="costa"></x-button>
        </x-alert>

        <img src="{{ Vite::images('image1.jpg')}}" alt="dasd">

        

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