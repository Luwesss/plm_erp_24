<div>
    <div class="flex items-center justify-center h-screen">
        <h1 class="text-8xl font-bold underline">{{ $count }}</h1>
 
        <button wire:click="increment" class="text-8xl font-bold">+</button>
    
        <button wire:click="decrement" class="text-8xl font-bold">-</button>
    </div>
</div>