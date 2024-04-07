<div>
    <h1 class="text-3xl font-bold text-red-500">SUPER ADMIN : ACCOUNT MANAGEMENT</h1>
    <div class="mt-2 mb-2">
        <button type="submit" class="w-[100px] btn btn-warning" wire:loading.attr="disabled">Back</button>
    </div>
    <div class="flex items-center justify-center h-screen">
        <form class="w-[500px]" wire:submit.prevent="login">
            @csrf
            <div class="">
                <h1 class="text-2xl font-bold">ADD ACCOUNT</h1>
            </div>
            <div class="mb-2">
                <label for="uid">USER ID</label>
                <input wire:model="userId" type="text" placeholder="Type here" class="w-full input input-bordered" />
            </div>
            <div class="mb-2">
                <label for="password">PASSWORD</label>
                <input wire:model="password" type="password" placeholder="Type here" class="w-full input input-bordered" />
            </div>
            <div class="mb-2">
                <label for="password">CONFIRM PASSWORD</label>
                <input wire:model="password" type="password" placeholder="Type here" class="w-full input input-bordered" />
            </div>
            <div class="mb-2">
                <button type="submit" class="w-full btn btn-warning" wire:loading.attr="disabled">Add User</button>
            </div>
        </form>
        <form class="w-[500px]" wire:submit.prevent="login">
            @csrf
            <div class="">
                <h1 class="text-2xl font-bold">REMOVE ACCOUNT</h1>
            </div>
            <label for="uid">USER ID</label>
            <div class="mb-2">
                <details class="dropdown">
                    <summary class="m-1 btn">.... v</summary>
                    <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                      <li><a>Item 1</a></li>
                      <li><a>Item 2</a></li>
                    </ul>
                </details>
            </div>
            <div class="mb-2">
                <button type="submit" class="w-full btn btn-warning" wire:loading.attr="disabled">Remove User</button>
            </div>
        </form>
    </div>
</div>