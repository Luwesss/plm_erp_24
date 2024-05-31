<div>
    <div class="flex items-center justify-center h-screen">
        <h1 class="font-bold underline text-8xl">{{ $count }}</h1>
 
        <button wire:click="increment" class="font-bold text-8xl">+</button>
    
        <button wire:click="decrement" class="font-bold text-8xl">-</button>
        <script src="/livewire/livewire.js?id={{ now()->timestamp }}"></script>
    </div>
</div>