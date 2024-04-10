<div class="text-primary-content" style="background-image: url('{{ asset('img/plm_bg.jpg') }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">    <div class="bg-white navbar">
        <div class="flex-1">
            <img src="{{ asset('img/PLM1.png') }}" width="300" height="200">
        </div>
        <button class="btn btn-square btn-ghost" onclick="history.back();">
            <svg class="w-8 h-8 text-neutral-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
        </button>
    </div>
    <div class="p-4 justify-content-start" >
        <div>
            <b style="color: black; font-size: 30px;">Super Admin: Role Management</b>
        </div>
        <br>

        <div class="flex flex-grow p-10" style="color: black">
            <div class="flex-1 bg-white shadow-xl card w-96">
            <div class="card-body">
              <b class="flex justify-center">ADD ROLE</b>
              <br>
              <b>Role ID Extension</b>
              <input type="text" placeholder="Ex: StdMOD_'Manager'" class="bg-white input input-bordered" />

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

              <button class="btn btn-outline btn-success" style="color: black; ">Add Role</button>

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
          <div class="p-4 ml-5 bg-white shadow-xl flex-end card w-96" style="height: 100%;>
            <div class="card-body">
                <b class="flex justify-center">DELETE ROLE</b>
                <br>
                <b>Role ID</b>
                <select class="bg-white select select-bordered" style="color: black">
                    <option disabled selected></option>
                    <option>Budgeting_ADMIN</option>
                    <option>DRS_ADMIN</option>
                  </select>
                  <br>

                  <button class="btn btn-outline btn-error" style="color: black; ">Delete Role</button>

              </div>
          </div>

        </div>


    </div>

</div>
