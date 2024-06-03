<div wire:poll.keep-alive.100ms class="text-primary-content" style="background-image: url('{{ asset('img/bg3.png') }}'); width: 100%; height: 100%; background-size: cover; background-position: center;">
    <div class="bg-white navbar text-primary-content" style="position: fixed">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
        </div>
        <div>
            <h1>Student Dashboard--</h1>
        </div>
        <div>Logged in as: </div>
        <div class="flex-none gap-2 ml-4">
            <div class="dropdown dropdown-hover dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost rounded-btn">
                    <span class="text-xs">{{ $userId }}</span>
                </div>
                <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow rounded-box w-52 mt-4 bg-white">
                  <li><a href="superAdmin">Go to Super Admin</a></li>
                  <li><a href="moduleAdmin">Go to Module Admin</a></li>
                  <li><a>Settings</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center h-screen">
        <div class="p-4 shadow-xl card" style="background-color:rgba(0, 0, 0, 0.10);backdrop-filter: blur(10px)">
            <div class="flex flex-col items-center card-body">
                <div class="flex flex-wrap justify-center gap-4 card-actions">
                    <button class="btn" style="width: 150px; height: 150px">Student Portal <img src="{{ asset('img/grad.png') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px" wire:click='redirectTo'>Student Performance <img src="{{ asset('img/performance.png') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Enrollment <img src="{{ asset('img/clipboard.png') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Discipline <img src="{{ asset('img/discipline.png') }}" width="50px"></button>
                </div>
                <div class="flex flex-wrap justify-center gap-4 mt-4 card-actions">
                    <button class="btn" style="width: 150px; height: 150px">Scholarship <img src="{{ asset('img/star.svg') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Clinic Portal<img src="{{ asset('img/clinic.png') }}" width="60px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Library Module<img src="{{ asset('img/scholarship.png') }}" width="60px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Guidance <img src="{{ asset('img/compass.png') }}" width="50px"></button>
                </div>
            </div>
        </div>
    </div>
    
   

    <script src="/livewire/livewire.js?id={{ now()->timestamp }}"></script>
</div>
