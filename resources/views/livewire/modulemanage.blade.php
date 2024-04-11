<?php
    session_start();
    if(isset($_SESSION['Module_userid']) && isset($_SESSION['Module_roleid'])){
      $this->userId = $_SESSION['Module_userid'];
      $this->oldRoleId = $_SESSION['Module_roleid'];
    }
?>



<div wire:poll.keep-alive.100ms style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh; color: black; display: flex; flex-direction: column; justify-content: flex-start;">
    <div  class="text-primary-content" style="background-image: url('{{ asset("img/plm_bg.jpg") }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">    
        <div class="bg-white navbar">
            <div class="flex-1">
                <img src="{{ asset('img/PLM1.png') }}" width="300" height="200">
            </div>
            <button wire:click="clearGlobal" class="btn btn-square btn-ghost" onclick="history.back();">
                <svg class="w-8 h-8 text-neutral-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
            </button>
        </div>
    </div>
    <div style="text-align: center; padding-top: 1rem; font-size: 25px;">
        <strong style="font-weight: bold;">Module Admin: Account Permission Management</strong>
    </div>
    
    <div class="flex-1 ml-5 bg-white shadow-xl card w-96">
            <div class="card-body">
                <b class="flex justify-center">MODIFY ROLE OF ACCOUNT: {{$this->userId}}</b>
                <b>TABLE</b>
                    <select wire:model="moduleName" class="bg-white select select-bordered" style="color: black">
                    <option selected>-----</option>
                        @php
                        $temp = 0;
                        foreach($this->describeRoles() as $roleColumn){
                            if($temp > 1){
                            echo '<option>'.$roleColumn->Field.'</option>';
                            }
                            $temp++;
                        }
                        @endphp
                    </select>
                <b>ROLE</b>
                <select wire:model="roleId" class="bg-white select select-bordered" style="color: black">
                <option selected>-----</option>
                    @foreach($this->getModuleRoles() as $role)
                        <option value="{{$role->role_id}}"> {{$role->role_name }}</option>
                    @endforeach
                </select>

                <button wire:click="implementUpdate" class="btn btn-outline btn-info" style="color: black; ">Modify Permission</button>

            </div>
    </div>
</div>
