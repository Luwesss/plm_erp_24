<div class="text-primary-content " style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh;">
    <div class="bg-white navbar text-primary-content">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
        </div>
        <div class="flex-none gap-2">
            <div class="flex-1">
                <a class="text-xl">Search Account ID: </a>
            </div>
            <div class="form-control">
                <input type="text" class="bg-transparent input input-bordered" />
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

    <div>
        <div class="navbar">
            <div class="flex-1">
                <h1 class="text-xl font-bold" style="font-size: 30px">All Accounts</h1>
            </div>
        </div>

        <div class="p-4">
            <div class="navbar">
                <div class="flex-1">
                    <h1 class="text-xl">Account List</h1>
                </div>
            </div>
            <div class="p-4 bg-white shadow-lg card">
                <div class="overflow-x-auto">
                    <table class="table table-lg">
                        <thead>
                            <tr style="color:black">
                                <th>Accounts ID</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>023191283</td><td>AAT Admin, Clinic Admin, Student Affair (Organization) Admin</td></tr>
                            <tr><td>120938109</td><td>Accounts Payable Admin</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
