<div style="display: flex;">
    <div class="sidebar bg-blue-900 text-gray-100" style="width: 250px;">
        <!-- Sidebar header -->
        <h2 class="font-semibold" style="padding: 20px; padding-top: 80px; font-size: 20px">Module</h2>
        <!-- Sidebar content goes here -->
        <ul>
            <li class="my-2">
                <div class="dropdown">
                    <button class="btn btn-dropdown">Financial System</button>
                    <ul class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
            <li class="my-2">
                <div class="dropdown">
                    <button class="btn btn-dropdown">Registrar Module</button>
                    <ul class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
            <li class="my-2">
                <div class="dropdown">
                    <button class="btn btn-dropdown">Different portals</button>
                    <ul class="p-2 shadow menu dropdown-content bg-blue-100 rounded-box w-52">
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
            <li class="my-2">
                <div class="dropdown">
                    <button class="btn btn-dropdown">HR Process Automation</button>
                    <ul class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
            <li class="my-2">
                <div class="dropdown">
                    <button class="btn btn-dropdown">Academic Management</button>
                    <ul class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <!-- Add more submenu items as needed -->
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div style="flex: 1;">
        <div style="background-image: url('{{ asset('img/bg.png') }}'); height: 100vh; color: black; display: flex; flex-direction: column; justify-content: flex-start;">
            <div class="navbar bg-base-100, bg-white" style="position: absolute; top: 0; left: 0; right: 0; z-index: 3;">
                <!-- Navbar content goes here -->
                <div class="flex-1 ">
                    <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="200" height="200">
                </div>
                <div class="dropdown dropdown-end">
                    <div style="display: flex; align-items: center;">
                        <span>AccountID: 202100000</span>
                        <span style="font-size: smaller; margin-left: 5px;">Roles: AAT_ADMIN, AccPay_ADMIN, Enrollment_ADMIN, GenLed_ADMIN, LDESS_ADMIN, LegAffMod_ADMIN, RSPPR_ADMIN, Scholarship_ADMIN</span>
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar ml-2">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 bg-white rounded-box w-52">

                        <li><a>Go to Super Admin</a></li>
                        <li><a>Go to Module Admin</a></li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- Main content goes here -->
        </div>
    </div>
</div>
