<div style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh; color: black; display: flex; flex-direction: column; justify-content: flex-start;">
    <div class="navbar bg-base-100, bg-white">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="200" height="200">
        </div>
        <div class="flex-none gap-2">
            <div class="flex-1">
                <a>Search Account ID: </a>
            </div>
            <div class="form-control">
                <input type="text" placeholder="Ex. 023191283" class="bg-white input input-bordered" style="background-color: white;" />
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <svg class="w-8 h-8 text-neutral-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> <circle cx="11" cy="11" r="8" /> <line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div style="display: flex; justify-content: center; align-items: flex-start; flex-grow: 1;">
        <div class="card w-96 bg-white shadow-xl p-20" style="margin-top: 50px;">
            <div class="card-body" style="margin-top: -70px;">
                <div style="text-align: center;">
                    <b style="font-size: 20px;">Module Admin</b>
                </div>
                <label class=" mb-2">USER_ID</label>
                <label class="input input-bordered flex items-center gap-2" style="height: 45px;">
                    <input type="text" class="grow" placeholder="Enter your USER_ID" style="height: 100%;" />
                </label>
                <label>Password</label>
                <label class="input input-bordered flex items-center gap-2" style="height: 45px;">
                    <input type="text" class="grow" placeholder="Enter your password" style="height: 100%;" />
                </label>
                <button class="btn btn-white" style="background-color: white; color: black;">Submit</button>
                <button class="btn btn-white" style="background-color: white; color: black;">Go to Super Admin</button>
                <button class="btn btn-white" style="background-color: white; color: black;">Go to Super Admin</button>
            </div>
        </div>
    </div>
</div>
