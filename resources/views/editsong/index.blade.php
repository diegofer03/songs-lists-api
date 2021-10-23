@extends('layouts.web')

@section('content')
    <div class="flex flex-col justify-between items-center">
        <h1 class="text-yellow-1 mb-2 uppercase m-8 font-bold">
            Edit Song
        </h1>
        <br>
        <a class="w-20 text-white rounded-lg bg-red-1 text-center" href="/" class="">Go Back</a> 
        <br>
        @if($errors->any())
            <div>
                <ul class='text-center bg-red-400 text-white rounded'>
                    @foreach($errors->all() as $error)
                        <li type='circle'>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="flex flex-col justify-between items-center" action="/song/{{$song->id}}" method="POST">
            @csrf
            @method('put')

            <label for="title">Name</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="name" name="name" value="{{$song->name}}">                   
        
    
            <label for="title">Description</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="description" name="description" value="{{$song->description}}">                   
        
    
            <label for="title">Genre</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="genre" name="genre" value="{{$song->genre}}">                   
        
    
            <label for="title">Url image</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="image" name="image" value="{{$song->image}}">                    
            <br>
            <button class=" w-15 text-white rounded-lg bg-yellow-600" type="submit">Edit</button>
        </form>
        
    </div>
    
    
@endsection