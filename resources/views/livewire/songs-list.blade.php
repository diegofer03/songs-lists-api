<div class="grid grid-cols-3 gap-4 mt-8 px-4 mb-40">
    @foreach ($songs as $song)
        <x-song-card :song="$song" />
    @endforeach
</div>
