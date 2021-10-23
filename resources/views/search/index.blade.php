@extends('layouts.web')

@section('content')

    <div class="flex-container justify-between items-center ">
        <a href="/song/create" class="bg-green-200 text-white mx-7 w-20 text-center rounded-lg h-9 pt-2-5 ">Add</a>        
        <a href="/" >
            <h1 class="text-green-600 mb-2 uppercase m-8 font-bold marginres">
                Available Songs
            </h1>
        </a>               
        <form action="/song" method='GET' class='flex '>
            <input class="no-outline w-30 mx-7 rounded-lg bg-gray-200" type="search" id="name" name="name" placeholder="Name">                   
            <input class="no-outline w-30 mx-7 rounded-lg bg-gray-200" type="search" id="genre" name="genre" placeholder="Genre">                   
            <button type="submit" class=" no-outline button mx-7 w-20 text-white rounded-lg bg-blu-200">Search</button>
        </form>           
    </div>

    <div class="grid grid-cols-3 gap-4 mt-8 px-4 mb-40">
    @foreach ($songs as $song)
        <x-song-card :song="$song" />
    @endforeach
    </div>
    <a  class='m-15 px-2 mt-5 w-60 text-white rounded-lg bg-blu-200' href="{{ route('downloadPDF') }}">Download List</a>
@endsection