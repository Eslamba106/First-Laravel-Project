@extends('layouts.app')

@section('content')
{{session()->get('message')}}
<div>
<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">{{$post->title}}</h1>
</div>
<div class="flex justify-center">
    <span>By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
        on: <span class="text-gray-500 italic">{{date('d-m-Y' , strtotime($post->updated_at))}}</span>

    </span>
</div>
<div class="flex justify-center mt-20">
    <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
</div>
<div class="container flex justify-center mt-20 pt-15 pb-5">{{$post->description}}</div>
@if (Auth::user() && Auth::user()->id==$post->user_id)

<a href="/blog/{{$post->slug}}/edit" class="bg-gray-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block place-self-start">edit post</a>

<form action="/blog/{{$post->slug}}" method="post" class="inline-block">
    @csrf
    @method('delete')
    <button type="submit" class="bg-red-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block place-self-start">Delete</button>
</form>
@endif
</div>
@endsection
