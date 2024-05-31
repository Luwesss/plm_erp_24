<div wire:poll.keep-alive.100ms class="text-primary-content" style="background-image: url('{{ asset('img/plm_bg.jpg') }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">
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
                  <select wire:model="accountId" class="w-full bg-white select select-bordered " style="color:black">
                    <option selected>---</option>
                    <!--put all the account ID option here-->
                    <!--IDK WHY IT WORKS LIKE THIS BUT IT DOES WHAT I NEED IT TO DO T_T-->
                    @foreach ($this->getAllAccounts() as $account)
                      <option>{{$account->user_id}}</option>
                    @endforeach
                    
                  </select>
                  <div class="navbar">
                      <!--div>
                        <button wire:click="checkAccount" class="btn btn-outline btn-success" style="color: black">CHECK</button>
                      </div-->
                      <div class="ml-10">
                        <a href="/userCreation">
                          <button class="btn btn-outline btn-info" style="color: black">MANAGE USERS</button>
                        </a>
                      </div>
                      <div class="ml-10">
                        <a href="/usersList">
                          <button class="btn btn-outline btn-warning" style="color: black">SEE ALL USERS</button>
                        </a>
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
                    <div class="w-full card card-bordered">
                        <div class="card-body">
                            <!--depending on the users roles-->
                          @foreach($this->getAllUserRoles() as $role)
                            <p> {{ $role->role_id }} </p>
                          @endforeach
                        </div>
                      </div>
                </div>
                <div class="navbar">
                    <div>
                        <a wire:click="saveGlobal" href="/editRoles">
                          <button class="btn btn-outline btn-success" style="color: black">MODIFY</button>
                        </a>
                    </div>
                    <div class="ml-10">
                        <a href="/roleCreation">
                          <button class="btn btn-outline btn-info" style="color: black">MANAGE ROLES</button>
                        </a>
                    </div>
                    <div class="ml-10">
                        <a href="/rolesList">
                          <button class="btn btn-outline btn-warning" style="color: black">SEE ALL ROLES</button>
                        </a>
                    </div>
                </div>
              </div>


        </div>
      </div>
      <div class="flex-1 ml-5 bg-white shadow-xl card w-96">
        <div class="card-body">
            <b class="flex justify-center">Permission List</b>
            <br>
            <div class="overflow-x-auto">
                <table class="table table-lg">
                    <thead>
                        <tr style="color:black">
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
                        @foreach($this->getAllRolePermissions() as $permission)
                          <tr>
                            <td>
                              {{$loop->iteration}}
                            </td>
                            <td>
                              {{$permission[1]}}
                            </td>
                            @if($permission[0]->permission_id == "SUPER_ADMIN")
                              <td>
                                <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                              </td>
                              <td>
                                <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                              </td>
                              <td>
                                <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                              </td>
                              <td>
                                <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                              </td>
                              <td>
                                <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked/>
                              </td>
                            @else
                              @if($permission[0]->permission_id == "ALL")
                                <td>
                                  <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                </td>
                                <td>
                                  <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                </td>
                                <td>
                                  <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                </td>
                                <td>
                                  <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                </td>
                                <td>
                                  <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                </td>
                              @else
                                @if($permission[0]->permission_id == "MODIFY")
                                  <td>
                                    <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                  </td>
                                  <td>
                                    <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                  </td>
                                  <td>
                                    <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                  </td>
                                  <td>
                                    <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                  </td>
                                  <td>
                                    <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                  </td>
                                @else
                                  @if($permission[0]->permission_id == "MODIFY_REMOVE")
                                    <td>
                                      <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                    </td>
                                    <td>
                                      <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                    </td>
                                    <td>
                                      <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                    </td>
                                    <td>
                                      <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                    </td>
                                    <td>
                                      <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                    </td>
                                  @else
                                    @if($permission[0]->permission_id == "REMOVE")
                                      <td>
                                        <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                      </td>
                                      <td>
                                        <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                      </td>
                                      <td>
                                        <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                      </td>
                                      <td>
                                        <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                      </td>
                                      <td>
                                        <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                      </td>
                                    @else
                                      @if($permission[0]->permission_id == "VIEW")
                                        <td>
                                          <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                        </td>
                                        <td>
                                          <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked />
                                        </td>
                                        <td>
                                          <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                        </td>
                                        <td>
                                          <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                        </td>
                                        <td>
                                          <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                        </td>
                                      @else
                                        <input type="checkbox" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" />
                                      @endif
                                    @endif
                                  @endif
                                @endif
                              @endif
                            @endif
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
      </div>
      <script src="/livewire/livewire.js?id={{ now()->timestamp }}"></script>s
      </div>








</div>
