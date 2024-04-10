<div style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh; color:black">
    <div class="bg-white navbar">
        <div class="flex-1">
            <img src="{{ asset('img/PLM1.png') }}" alt="Example Image" width="300" height="200">
        </div>
        <button class="btn btn-square btn-ghost" onclick="history.back();">
            <svg class="w-8 h-8 text-neutral-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
        </button>
    </div>
    <a class="p-4 font-bold " style="font-size: 30px">Super Admin</a>
<br>
    <div class="flex p-10" style="color: black">
        <div class="bg-white shadow-xl card">
        <div class="card-body">
            <br>
            <br>
            <div>
                <div>
                  <b>Account ID: </b>

                  <select  class="w-full bg-white select select-bordered " style="color:black">
                    <option disabled selected></option>
                    
                    <!--put all the account ID option here-->
                    <!--IDK WHY IT WORKS LIKE THIS BUT IT DOES WHAT I NEED IT TO DO T_T-->
                    @foreach ($this->getAllAccounts() as $account)
                      <option>{{$account->user_id}}</option>
                    @endforeach
                    
                  </select>
                  <div class="navbar">
                      <div>
                        <button wire:click="checkAccount" class="btn btn-outline btn-success" style="color: black">CHECK</button>
                      </div>
                      <div class="ml-10">
                        <button class="btn btn-outline btn-info" style="color: black"">MANAGE USERS</button>
                      </div>
                      <div class="ml-10">
                        <button class="btn btn-outline btn-warning" style="color: black">SEE ALL USERS</button>
                      </div>
                  </div>
                </div>
                <br>


              </div>

              <div>
                <div>
                  <b>Roles:</b>
                </div>
                <div>
                  <select class="w-full bg-white select select-bordered " style="color:black" >
                    <option disabled selected></option>
                    <!--options in Roles-->
                    @foreach ($this->getAllRoles() as $role)
                      <option>{{$role->role_id}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="navbar">
                    <div>
                        <button class="btn btn-outline btn-success" style="color: black">MODIFY</button>
                    </div>
                    <div class="ml-10">
                        <button class="btn btn-outline btn-info" style="color: black">MANAGE ROLES</button>
                    </div>
                    <div class="ml-10">
                        <button class="btn btn-outline btn-warning" style="color: black">SEE ALL ROLES</button>
                    </div>
                </div>
              </div>


        </div>
      </div>
      <div class="flex-1 ml-5 bg-white shadow-xl card w-96">
        <div class="card-body">
            <b class="flex justify-center">MODIFY ROLE</b>
            <br>
            <b>Role ID</b>
            <select class="bg-white select select-bordered" style="color: black">
                <option disabled selected></option>
                <option>Budgeting_ADMIN</option>
                <option>DRS_ADMIN</option>
              </select>

            <b>Role Name</b>
            <input type="text" placeholder="Ex: Student Module Manager'" class="bg-white input input-bordered" />
            <br>
            <b>Access to Tables</b>
          <select class="bg-white select select-bordered" style="color: black">
              <option disabled selected></option>
              <option>Budgeting</option>
              <option>DRS</option>
            </select>
            <b>Type of Access</b>
          <select class="bg-white select select-bordered" style="color: black">
              <option disabled selected></option>
              <option>ALL</option>
              <option>MODIFY</option>
            </select>

            <button class="btn btn-outline btn-info" style="color: black; ">Modify Role</button>
          </div>
      </div>
      </div>








</div>
