<div>
    <div class="navbar bg-base-100">
        <div class="flex-1">
          <a class="text-xl font-bold">SUPER ADMIN : ROLE MANAGEMENT</a>
        </div>
        <button class="btn btn-square btn-ghost" onclick="history.back();">
            BACK
        </button>
      </div>

      <div class="flex flex-col items-center justify-center space-y-2">
        <a class="text-center">EDIT ACCOUNT ROLES</a>
        <a class="text-center">USER ID</a>
        <input type="text" class="w-full max-w-xs input input-bordered" />
    </div>

    <div class="overflow-x-auto">
        <table class="table table-lg">
          <thead>
            <tr>
              <th>ROLE</th>
              <th>ADD</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>Accounts Payable Admin</td>
                <td><input type="checkbox" class="toggle" checked /></td>
            </tr>
            <tr>
                <td>Accounts Receivable Admin</td>
                <td><input type="checkbox" class="toggle" checked /></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="display: flex; justify-content: center;">
        <button class="btn">Modify Roles</button>
      </div>


</div>
