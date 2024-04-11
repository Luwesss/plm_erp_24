<div  class="text-primary-content" style="background-image: url('{{ asset('img/plm_bg.jpg') }}'); width: 100%; height: 100vh; background-size: cover; background-position: center;">    <div class="bg-white navbar text-primary-content">
        <div class="flex-1 ">
            <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
        </div>
        
    </div>

    <div wire:poll.keep-alive.100ms>
        <div>
            <div class="p-4 navbar">
                <div class="flex-1">
                    <h1 class="text-xl font-bold" style="font-size: 30px">Module Admin</h1>
                </div>
            </div>

            <div class="p-20">
                <div class="flex items-center justify-between px-4 py-2 navbar">
                    <div class="flex items-center">
                        <b class="text-xl">Account List</b>
                    </div>
                    <div class="flex items-center justify-center">
                        <div>
                            <select wire:model="moduleName" class="text-black bg-white w-96 select select-bordered">
                                <option selected></option>
                                @php
                                    $temp = 0;
                                    foreach($this->describeRoles() as $roleColumn){
                                    if($temp > 1){
                                        echo '<option value="'.$roleColumn->Field.'">'.$roleColumn->Field.'</option>';
                                    }
                                    $temp++;
                                    }
                                @endphp
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <p>Search Account ID:</p>
                        <div class="ml-4 form-control">
                            <input type="text" placeholder="Ex. 023191283" class="bg-white input input-bordered">
                        </div>
                            <svg class="w-8 h-8 ml-4 text-neutral-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <line x1="21" y1="21" x2="16.65" y2="16.65" />
                            </svg>
                    </div>
                </div>

                <div class="p-4 bg-white shadow-lg card">
                    <div class="overflow-x-auto">
                        <table class="table table-lg">
                            <thead>
                                <tr style="color:black">
                                    <th>Accounts ID</th>
                                    <th>Role</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($this->getAllFilteredAcc("") as $account)<tr>
                                    <?php
                                        $this->userId = $account->user_id;
                                        $this->roleId = $account->role_id;
                                    ?>
                                    <td>{{ $account->user_id }}</td>
                                    <td>{{ $account->role_name }}</td>
                                    <td>
                                        <div>
                                            <a wire:click="update('{{$account->user_id}}','{{$account->role_id}}')" href="/moduleManage">
                                                <button  class="btn btn-outline btn-success" style="color: black; ">Update</button>
                                            </a>
                                            <button wire:click="remove('{{$account->user_id}}','{{$account->role_id}}')" class="btn btn-outline btn-error" style="color: black; ">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
