<div style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh; color: black;">  <div class="bg-white navbar bg-base-100">
    <div class="flex-1">
    <div class="flex-1 ">
        <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="300" height="200">
    </div>
    </div>
    <div class="flex-none gap-2">
    <div class="flex-1">
        <a>Search Account ID: </a>
    </div>
    <div class="form-control">
        <input type="text" placeholder="Ex. 023191283" class="bg-transparent input input-bordered" />
    </div>
    <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
            <svg class="w-8 h-8 text-neutral-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">  <circle cx="11" cy="11" r="8"></circle>  <line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="flex items-center justify-between px-4 py-2 mt-16 space-x-4">
    <div class="flex-grow">
    <div>
        <b class="text-xl" style="font-size: 30px">All Roles</b>
    </div>
    </div>
    <button class="btn btn-square btn-ghost" onclick="history.back();">
        <svg class="w-8 h-8 text-neutral-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>
    </button>
</div>

<div class="p-20 card">
    <b class="text-lg">Roles List</b>
    <br>
    <div class="p-4 bg-white shadow-xl card" >
      <table class="table table-lg" >
        <thead style="color: black">
          <tr>
            <th></th>
            <th>Role Id</th>
            <th>Role Name</th>
            <th>Role Permission</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>AAT_ADMIN</td>
            <td>AAT Admin</td>
            <td>ALL</td>
          </tr>
          <tr>
            <th>2</th>
            <td>AccPay_ADMIN</td>
            <td>Accounts Payable Admin</td>
            <td>ALL</td>
          </tr>
          <tr>
            <th>3</th>
            <td>AccRec_ADMIN</td>
            <td>Accounts Receivables Admin</td>
            <td>ALL</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>