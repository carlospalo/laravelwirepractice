<div>
    <h1 class="text-xl my-2">Comments</h1>
    @error('newComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    <div>
        @if (session()->has('message'))
        <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <section class="my-4 ">
        @if($image)
        <img src={{$image}} width="200" />
        @endif
        <input type="file" id="image" wire:change="$emit('fileChoosen')">
    </section>

    <form class="my-2 flex" wire:submit.prevent="addComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."
            wire:model.debounce.500ms="newComment">
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
        </div>
    </form>
    @forelse($comments as $comment)
    <div class="rounded bg-white shadow p-3 my-2">
        <div class="flex justify-between mb-2">
            <div class="flex">
                <p class="font-bold text-lg">{{$comment->creator->name}}</p>
                <p class="mx-3 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}
                </p>
            </div>
            <i class="fas fa-times text-red-400 hover:text-red-600 cursor-pointer"
                wire:click="remove({{$comment->id}})"></i>
        </div>
        <p class="text-gray-800">{{$comment->body}}</p>
        @if($comment->image)
        <img src="{{$comment->imagePath}}" />
        @endif
    </div>
    @empty
    <p class="text-gray-800">No tiene comentarios</p>
    @endforelse
    {{$comments->links('pagination-links')}}
</div>

<script>
    window.livewire.on('fileChoosen', () => {
        let inputField = document.getElementById('image')
        let file = inputField.files[0]
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result)
        }
        reader.readAsDataURL(file);

    })
</script>