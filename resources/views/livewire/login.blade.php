<div class="flex items-center justify-center text-primary-content" style="background-image: url('{{ asset('img/login_background.svg') }}'); width: 100%; height: 100vh; background-size: cover; background-position: fixed;">

    <div>
        <div class="p-20">
            <div class="max-w-full max-h-full p-5 bg-white shadow-xl card">
                <div class="card-body">
                    <div class="flex-1 ">
                        <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="400" height="200">
                    </div>
                    <br>
                    <div style="color:#2D6B9A">
                        <b style="font-size: 40px">PLM ERP</b>
                        <br>
                        <h1 class="font-semibold " style="font-size: 30px">Sign In</h1>
                    </div>
                    <div>
                        <p class="font-medium " style="padding-top: 10px">User ID</p>
                        <input type="text" wire:model="userId" placeholder="2021*****" class="w-full bg-white input input-bordered" />
                        <div class="flex" style="padding-top: 10px">
                            <p class="flex-1 font-medium ">Password</p>
                            <a style="color:#4F74BB" href="youtube.com">Forgot Password?</a>
                        </div>
                        <input type="text" wire:model="password" placeholder="********" class="w-full bg-white input input-bordered" />
                    </div>
                    <div class="flex">
                        <label class="cursor-pointer label">
                            <input type="checkbox" checked="checked" class="checkbox [--chkbg:#4F74BB] [--chkfg:white]" />
                            <span class="ml-4 label-text" style="color: black">Keep me signed in</span>
                        </label>
                    </div>
                    <button wire:click="login" class="btn btn-outline" style="color:#4F74BB">Login</button>

                </div>
            </div>
        </div>
    </div>

</div>
