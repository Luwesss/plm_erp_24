<div style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh;">
    <div class="bg-white navbar">
        <div class="flex-1">
            <img src="{{ asset('img/PLM1.png') }}"width="300" height="200">
        </div>
        <button class="btn btn-square btn-ghost" onclick="history.back();">
            <svg class="w-8 h-8 text-neutral-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
        </button>
    </div>
    <div class="p-4">
        <h1 class="font-bold" style="color: black; font-size: 30px">Super Admin: Role Management</h1>
        <br>
          <div class="flex p-4">
            <div class="bg-white shadow-xl card w-96" style="color: black">
                <div class="card-body">
                  <h2 class="font-bold text-center">Edit Account Roles</h2>
                  <br>
                  <b cla>User ID</b>
                  <input type="text" placeholder="User ID" class="bg-white input input-bordered"/>
                  <div style="display: flex; justify-content: center;">
                    <button class="btn btn-ghost" style="border-color:black">Modify Roles</button>
                  </div>
                </div>
              </div>

              <div class="flex-1 ml-4 bg-white shadow-xl card" style="color: black">
                <div class="card-body">
                  <div class="overflow-x-auto">
                    <table class="table table-lg" style="color: black">
                      <thead style="color: black">
                        <tr>
                          <th>ROLE</th>
                          <th>ADD</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Accounts Payable Admin</td>
                             <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                        </tr>
                        <tr>
                            <td>Accounts Receivable Admin</td>
                             <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
    </div>
</div>
