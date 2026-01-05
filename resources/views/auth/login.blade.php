@extends('layouts.app')

@section('titulo')
    Login en Laravel - tailwind
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login')}} " method="POST">
                @csrf
                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-t-lg text-sm p-2">{{ session('mensaje') }}</p>
                @endif
                <div calss="md-5">
                    <label id="username" class="md-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Tu Username" class="border p-3 w-full rounded-lg  @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-t-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div calss="md-5">
                    <label id="password" class="md-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-t-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div calss="md-5">
                    <input type="checkbox" id="remember" name="remember"> 
                    <label id="remember" class="text-gray-500 text-sm">
                        Mantener mi sesión abierta
                    </label>
                </div>

                <input type="submit" value="Iniciar session" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-blod w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>

@endsection
