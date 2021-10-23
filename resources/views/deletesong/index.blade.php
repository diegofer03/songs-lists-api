@extends('layouts.web')

@section('content')
    <div class="flex flex-col justify-between items-center ">
        <h1 class="text-red-1 mb-2 uppercase m-8 font-bold">
            Delete Song:
            <h2 class="font-semibold text-xl"> {{$song->name}}</h2>
        </h1>
        <br>
        <a class="w-20 text-white rounded-lg bg-green-200 text-center" href="/">Go Back</a>
        <br>
        <form action="/song/{{$song->id}}" method="POST">
            @csrf
            @method('delete')
            <button class=" w-25 h-12 text-xl text-white rounded-lg bg-red-1 m-10 " type="submit">Delete</button>
        </form>
    </div>
@endsection