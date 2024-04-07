<div style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh; color:black">
    <div class="bg-white navbar">
        <div class="flex-1">
            <img src="{{ asset('img/PLM1.png') }}" alt="Example Image" width="300" height="200">
        </div>
        <button class="btn btn-square btn-ghost" onclick="history.back();">
            <svg class="w-8 h-8 text-neutral-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
        </button>
    </div>


      <div class="p-4">
        <div class="navbar">
            <div>
              <a class="font-bold" style="font-size: 30px">Super Admin</a>
            </div>
          </div>

          <div class="flex navbar ">
            <div>
              <a class="text-xl font-bold">ACCOUNT ID: </a>
            </div>
            <div class="ml-4">
              <select class="w-full max-w-xs select select-ghost select-bordered">
                <option disabled selected>Account ID</option>
                <option>202101351</option>
                <option>202102462</option>
              </select>
            </div>
            <div class="ml-4">
              <button class="btn btn-ghost">CHECK</button>
            </div>
            <div class="ml-4">
              <button class="btn btn-ghost">MANAGE USERS</button>
            </div>
            <div class="ml-4">
              <button class="btn btn-ghost">SEE ALL USERS</button>
            </div>
          </div>

          <div class="flex navbar ">
            <div>
              <a class="text-xl font-bold">Roles: </a>
            </div>
            <div class="ml-4">
              <select class="w-full max-w-xs select select-ghost select-bordered">
                <option disabled selected>Roles</option>
                <option>AAT Admin</option>
                <option>Clinic Admin</option>
              </select>
            </div>
            <div class="ml-4">
                <button class="btn btn-ghost">MODIFY</button>
            </div>
            <div class="ml-4">
                <button class="btn btn-ghost">MANAGE ROLES</button>
            </div>
            <div class="ml-4">
                <button class="btn btn-ghost">SEE ALL ROLES</button>
            </div>
          </div>

          <br>

          <div class="flex">
            <div class="flex-1">
              <a class="text-xl">Roles</a>
            </div>
      </div>

        <div class="bg-white shadow-xl card">
            <div class="card-body">
                <div>


                    <div class="overflow-x-auto">
                        <div class="flex">
                          <table class="table table-large">
                            <thead style="color: black">
                              <tr>
                                <th>No.</th>
                                <th>Module</th>
                                <th>Tables</th>
                                <th>View</th>
                                <th>Remove</th>
                                <th>Modify</th>
                                <th>Modify Permission</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>1</th>
                                <td>Academic Admission and Testing Support</td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                              </tr>
                              <tr>
                                <th>2</th>
                                <td>Clinic Portal</td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
                                <td><input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>
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

</div>
