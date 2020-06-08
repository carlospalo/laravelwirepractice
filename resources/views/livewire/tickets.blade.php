<div>
    <h1 class="text-xl my-2">Support Tickets</h1>
    @foreach($tickets as $ticket)
    <div class="rounded shadow-sm bg-white py-3 px-3 my-4 {{$active == $ticket->id ? 'bg-gray-400   ':''}}"
        wire:click="$emit('ticketSelected',{{$ticket->id}})">
        <p class="text-gray-800">{{$ticket->question}}</p>
    </div>
    @endforeach
</div>