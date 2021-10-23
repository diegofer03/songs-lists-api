@extends('layouts.web')

@section('content')
    <div class="flex flex-col justify-between items-center">
        <h1 class="text-green-600 mb-2 uppercase m-8 font-bold">
            New Song
        </h1>
        <br>
        <a class="w-20 text-white rounded-lg bg-red-1 text-center" href="/">Go Back</a>
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
        <form class="flex flex-col justify-between items-center" action="/song" method="POST">
            @csrf
            
            <label for="title">Name</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" >                   
        
        
            <label for="title">Description</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="description" name="description" placeholder="Description" value="{{ old('description') }}" >                   
        
    
            <label for="title">Genre</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="genre" name="genre" placeholder="Genre" value="{{ old('genre') }}">                   
        
    
            <label for="title">Url image</label>
            <input class="mb-4 no-outline w-60 mx-7 rounded-lg bg-gray-200" type="text" id="image" name="image" placeholder="Url image" value="{{ old('image') }}">                    
            <br>
            <button class="no-outline button bg-green-200 text-white mx-7 w-18 text-center rounded-lg" type="submit">Add</button>
        </form>
    </div>
@endsection