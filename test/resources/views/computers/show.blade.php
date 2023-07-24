@extends('layout')
@section('title' , 'Show Computers')
@section('content')

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 ">
            <h1>Computers</h1>
        </div>

        <div class="mt-8">
            <h3>{{$computer['name']}} is from <strong>({{$computer['origin']}}) </strong>{{$computer['price']}} </h3>
        </div>
        <a class="edit-btn" href="{{route('computers.edit' , $computer->id)}}">Edit</a>
        <form action="{{route('computers.destroy' , $computer->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input class"edit-btn" type="submit" value="delete" />
        </form>
    </div>
@endsection

