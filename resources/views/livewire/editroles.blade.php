<?php
  session_start();
  if(isset($_SESSION['account_id'])){
    $this->accountId = $_SESSION['account_id'];
  }
?>

<div wire:poll.keep-alive.100ms class="text-primary-content" style="background-image: url('{{ asset('img/plm_bg.jpg') }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">
    <div class="bg-white navbar">
        <div class="flex-1">
            <img src="{{ asset('img/PLM1.png') }}"width="300" height="200">
        </div>
        <button wire:click="clearGlobal" class="btn btn-square btn-ghost" onclick="history.back();">
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
                  <b>User ID</b>
                  <input wire:model="accountId" type="text" placeholder="User ID" class="bg-white input input-bordered" disabled/>
                  <div style="display: flex; justify-content: center;">
                    <button wire:click="updateRoles" type="submit" class="btn btn-outline btn-info" style="color:black">Modify Roles</button>
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
                          <th>PERMISSION</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            foreach($this->getAllRoles() as $role){
                              echo
                              '<tr>
                                <td>'. $role->role_name .'</td>'
                              ;
                              $this->got = true;
                              foreach($this->getAllUserRoles() as $uRole){
                                if($uRole->role_id == $role->role_id){
                                  $this->got = false;
                                  echo '<td><input type="checkbox" name="check_list[]" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" checked /></td>';
                                }
                              }
                              if($this->got)
                                echo '<td><input type="checkbox" name="check_list[]" class="toggle [--tglbg:white] bg-blue-500 hover:bg-blue-700 border-blue-500" /></td>';
                              echo '</tr>';
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
    </div>
</div>
