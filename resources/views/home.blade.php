@extends('layouts.app')

@section('titulo')
    Principal
@endsection

@section('contenido')
    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
        @if($follow_posts->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($follow_posts as $follow_post)
                    <div>
                        <a href="{{ route('posts.show',['user' => $follow_post->user, 'post' => $follow_post])}} "><img src="{{ asset('uploads').'/'.$follow_post->imagen }}" alt="Imagen del post {{$follow_post->titulo }}"/></a>
                        {{ $follow_post->descripcion }}
                    </div>
                @endforeach
            </div>
            <div class="my-10">
                {{ $follow_posts->links('pagination::tailwind') }}
            </div>
        @else
            <p Class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts</p>
        @endif
    </section>
@endsection