<div>
    <div class="navbar bg-base-100">
        <div class="flex-1">
          <a class="text-xl font-bold">SUPER ADMIN : ROLE MANAGEMENT</a>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost" onclick="history.back();">
                BACK
            </button>
        </div>
      </div>

      <div class="flex w-full space-x-4">
        <div class="flex-grow shadow-xl card w-96 bg-base-200">
          <div class="card-body">
            <h2 class="card-title">MODIFY ROLE</h2>
            <h1>ROLE ID EXTENSION</h1>
            <input type="text" placeholder="Ex: StdMOD_'Manager'" class="w-full max-w-xs input input-bordered" />
            <h1>ROLE NAME</h1>
            <input type="text" placeholder="Ex: Student Module Manager" class="w-full max-w-xs input input-bordered" />
            <h1>ACCESS TO TABLES</h1>
            <select class="w-full max-w-xs select select-bordered">
                <option disabled selected></option>
                <option>Budgeting</option>
                <option>DRS</option>
              </select>
            <h1>TYPE OF ACCESS</h1>
            <select class="w-full max-w-xs select select-bordered">
                <option disabled selected></option>
                <option>ALL</option>
                <option>MODIFY</option>
              </select>
              <button class="btn">Add Role</button>
          </div>
        </div>
        <div class="flex-grow shadow-xl card w-96 bg-base-200">
            <div class="card-body">
              <h2 class="card-title">MODIFY ROLE</h2>
              <h1>ROLE ID</h1>
              <select class="w-full max-w-xs select select-bordered">
                <option disabled selected></option>
                <option>Budgeting_ADMIN</option>
                <option>DRS_ADMIN</option>
              </select>
              <h1>ROLE NAME</h1>
              <input type="text" placeholder="Ex: Student Module Manager" class="w-full max-w-xs input input-bordered" />
              <h1>ACCESS TO TABLES</h1>
              <select class="w-full max-w-xs select select-bordered">
                  <option disabled selected></option>
                  <option>Budgeting</option>
                  <option>DRS</option>
                </select>
              <h1>TYPE OF ACCESS</h1>
              <select class="w-full max-w-xs select select-bordered">
                  <option disabled selected></option>
                  <option>ALL</option>
                  <option>MODIFY</option>
                </select>
                <button class="btn">Modify Role</button>
            </div>
          </div>
        <div class="flex-grow shadow-xl h-60 card w-96 bg-base-200">
          <div class="card-body">
            <h2 class="card-title">DELETE ROLE</h2>
            <h1>ROLE ID</h1>
              <select class="w-full max-w-xs select select-bordered">
                <option disabled selected></option>
                <option>Budgeting_ADMIN</option>
                <option>DRS_ADMIN</option>
              </select>
              <button class="btn">Remove Role</button>
          </div>
        </div>
      </div>

      </div>
</div>
