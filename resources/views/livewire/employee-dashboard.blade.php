<div wire:poll.keep-alive.100ms class="text-primary-content" style="background-image: url('{{ asset('img/bg3.png') }}'); width: 100%; height: 100%; background-size: cover; background-position: center;">
    <div class="bg-white navbar text-primary-content" style="position: fixed">
        <div class="flex-1 " >
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200" >
        </div>
        <div>
            <h1>Employee Dashboard--</h1>
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
                    <button class="btn" style="width: 150px; height: 150px" wire:click='EmpRedirect'>Employee Portal<img src="{{ asset('img/briefcase.png') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Clinic Portal <img src="{{ asset('img/clinic.png') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Library Module <img src="{{ asset('img/scholarship.png') }}" width="50px"></button>
                    <button class="btn" style="width: 150px; height: 150px">Guidance <img src="{{ asset('img/compass.png') }}" width="50px"></button>
                </div>
                <div class="flex flex-wrap justify-center gap-4 card-actions">
                    @if ($role == 2 || $role == 3 || $role == 4)
                    <button class="btn" style="width: 150px; height: 150px;" wire:click='redirect-ledge'>General Ledger <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 5 || $role == 6 || $role == 7)
                    <button class="btn" style="width: 150px; height: 150px;">Accounts Payable <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 8)
                    <button class="btn" style="width: 150px; height: 150px;">Cash Management Billing <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 10 || $role == 11)
                    <button class="btn" style="width: 150px; height: 150px;">Financial Reporting <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 12 || $role == 13)
                    <button class="btn" style="width: 150px; height: 150px;">Purchasing <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 14)
                    <button class="btn" style="width: 150px; height: 150px;">Inventory <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 15 || $role == 16)
                    <button class="btn" style="width: 150px; height: 150px;">Project Cost Accounting <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 17 || $role == 18 || $role == 19)
                    <button class="btn" style="width: 150px; height: 150px;">Procurement Management and Monitoring System <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 20 || $role == 21)
                    <button class="btn" style="width: 150px; height: 150px;">PLM Assets and Supplies Inventory System <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 22 || $role == 23)
                    <button class="btn" style="width: 150px; height: 150px;">Student Performance/Student Service <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 24)
                    <button class="btn" style="width: 150px; height: 150px;">Student Information <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 25 || $role == 26 || $role == 27 || $role == 28)
                    <button class="btn" style="width: 150px; height: 150px;">Faculty Portal <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 32 || $role == 34) {{-- 33 is student lang ata. medyo dont know --}}
                    <button class="btn" style="width: 150px; height: 150px;">Alumni Portal <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 35 || $role == 36 || $role == 37 || $role == 38)
                    <button class="btn" style="width: 150px; height: 150px;">Discipline Portal <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 39)
                    <button class="btn" style="width: 150px; height: 150px;">Scholarship Portal <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 40)
                    <button class="btn" style="width: 150px; height: 150px;">Student Affairs <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 46)
                    <button class="btn" style="width: 150px; height: 150px;">Legal Affairs <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @elseif ($role == 53)
                    <button class="btn" style="width: 150px; height: 150px;">Admissions <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @endif

                    @if ($role == 2)
                    <button class="btn" style="width: 150px; height: 150px;">Financial Reporting <img src="{{ asset('img/compass.png') }}" width="50px"></button>                    
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

    
    
    
    
    
   

    <script src="/livewire/livewire.js?id={{ now()->timestamp }}">

    </script>
</div>
