<div class="text-primary-content " style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh;">
    <div class="bg-white navbar text-primary-content">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
        </div>
        <div class="flex-none gap-2">
            <div class="flex-1">
                <a>Search Account ID: </a>
            </div>
            <div class="form-control">
                <input type="text" placeholder="Ex. 023191283" class="bg-transparent input input-bordered" />
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <svg class="w-8 h-8 text-neutral-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="11" cy="11" r="8" />  <line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
                    </div>
                </div>
            </div>
        </div>
      </div>

   <div style="display: flex; justify-content: center; align-items: flex-start; flex-grow: 1;">
        <div class="bg-white shadow-xl card w-96" style="margin-top: 50px;">
            <div class="card-body" >
                <div style="text-align: center;">
                    <b style="font-size: 20px;">Module Admin</b>
                </div>
                <p class="font-medium " style="padding-top: 10px">User ID</p>
                    <input type="text" class="w-full bg-white input input-bordered" />
                <p class="font-medium " style="padding-top: 10px">Password</p>
                    <input type="password" placeholder="*********" class="w-full bg-white input input-bordered" />
                <button class="btn btn-outline btn-success" style="color: black">Submit</button>
                <button class="btn btn-outline btn-warning" style="color: black">Go to Super Admin</button>
                <button class="btn btn-outline btn-warning" style="color: black">Go to Module Admin</button>
            </div>
        </div>
    </div>
</div>