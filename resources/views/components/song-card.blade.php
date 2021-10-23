<div class="bg-white shadow-lg rounded-lg px-4 py-4 text-center">
    <img src="{{$song->image}}" alt="image" class="rounded-md mb-2" >
    <h2 class="text-lg truncateres">{{$song->name}}</h2>
    <h4 class="text-sm text-gray-600 truncate" >{{$song->description}}</h4>
    <h5 class="text-xs text-gray-500">{{$song->genre}}</h5>
    <br>
    <div class="flex justify-evenly ">
        <a class=" w-15 text-white rounded-lg bg-yellow-600" href="/song/{{ $song->id }}/edit">Edit</a>
        <a class="w-18 text-white rounded-lg bg-red-1 " href="/song/{{ $song->id }}/confirmDelete">Delete</a>
    </div>
</div>