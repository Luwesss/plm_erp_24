<div class="text-primary-content" style="background-image: url('{{ asset('img/plm_bg.jpg') }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">
<div class="bg-white navbar">
    <div class="flex-1">
        <img src="{{ asset('img/PLM1.png') }}" width="300" height="200">
    </div>
    <button class="btn btn-square btn-ghost" onclick="history.back();">
        <svg class="w-8 h-8 text-neutral-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
    </button>
</div>

<b class="p-4" style="font-size: 30px">
    Super Admin: Account Management
</b>

<div class="flex items-center justify-center text-primary-content" style="padding-top: 200px">
    <div class="bg-white shadow-xl card w-max">
        <div class="card-body">
            <img src="{{ asset('img/PLM1.png') }}" width="400">
            <b class="text-center">Add Account</b>
            <div class="font-semibold">
                User ID
                <input type="text" class="w-full bg-white input input-bordered"/>
            </div>
            <div class="font-semibold">
                Password
                <input type="password" placeholder="*********" class="w-full bg-white input input-bordered"/>
            </div>
            <div class="font-semibold">
                Confirm Password
                <input type="password" placeholder="*********" class="w-full bg-white input input-bordered"/>
            </div>
            <button class="btn btn-outline btn-warning" style="color: black">
                Add User
            </button>
        </div>
      </div>


      <div class="h-56 m-10 bg-white shadow-xl card w-96">
        <div class="card-body">
            <b class="text-center">Remove Account</b>
            <div class="font-semibold">
                User ID
                <select class="w-full max-w-xs bg-white select select-bordered">
                    <option disabled selected></option>
                    <option>2021000000</option>
                    <option>2020152365</option>
                  </select>
            </div>
            <button class="btn btn-outline btn-error" style="color: black">
                Remove User
            </button>
        </div>
      </div>

</div>





</div>
