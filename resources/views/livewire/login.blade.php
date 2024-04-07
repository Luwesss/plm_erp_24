<div>
    <div class="flex items-center justify-center h-screen"> 
        <form class="w-[500px]" wire:submit.prevent="login">
            @csrf
            <div class="">
                <h1 class="text-2xl font-bold">PLM ERP</h1>
                <p>Sign In.</p>
            </div>
            <div class="mb-2">
                <label for="uid">User Id</label>
                <input wire:model="userId" type="text" placeholder="Type here" class="w-full input input-bordered" />
            </div>
            <div class="mb-2">
                <label for="password">Password</label>
                <input wire:model="password" type="password" placeholder="Type here" class="w-full input input-bordered" />
            </div>
            <div class="mb-2">
                <button type="submit" class="w-full btn btn-warning" wire:loading.attr="disabled">Login</button>
            </div>
            <p class="text-center">-- OR --</p>
            <div class="mt-2 mb-2">
                <button type="submit" class="w-full btn btn-warning" wire:loading.attr="disabled">Continue with Microsoft</button>
            </div>
        </form>
    </div>
    <div class="mt-2 mb-2">
        <button wire:click="sample" class="w-full btn btn-warning" wire:loading.attr="disabled">Trial</button>
    </div>
</div>