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
                        <p class="font-medium " style="padding-top: 10px">Email Address</p>
                        <input type="text" wire:model="userId" placeholder="juandelacruz@plm.edu.ph" class="w-full bg-white input input-bordered" />
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
                    <div class="text-gray-500 divider" style="font-size: 12px">or sign in with</div>
                    <button class=" bg-slate-300 btn btn-outline" style="font-color:black ;color: black">
                        <div class="flex">
                            <img src="{{ asset('img/ms.png') }}" width="15" height="10">
                        </div>
                        Continue with Microsoft
                    </button>

                </div>
            </div>
        </div>
    </div>

</div>
