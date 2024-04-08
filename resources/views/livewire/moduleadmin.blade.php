<div class="p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">MODULE ADMIN</h2>
    <form wire:submit.prevent="login" class="flex flex-col justify-center items-center">
        <div class="mb-4"> <label for="username" class="block font-semibold mb-1 text-center">USER_ID</label>
            <input wire:model="username" type="text" id="username" name="username" class="input input-bordered w-48 md:w-40 mx-auto text-center " placeholder="Enter your user ID">
            @error('username') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-6"> <label for="password" class="block font-semibold mb-1 text-center">Password</label>
            <input wire:model="password" type="password" id="password" name="password" class="input input-bordered w-48 md:w-48 mx-auto text-center " placeholder="Enter your password">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary w-48">Submit</button>

        <div class="mt-8 flex justify-center">
            <button class="btn btn-secondary w-48">Go to Super Admin</button>
            <button class="btn btn-secondary w-48 ml-4">Go to Module Admin</button>
        </div>
    </form>
</div>
    </form>
</div>
