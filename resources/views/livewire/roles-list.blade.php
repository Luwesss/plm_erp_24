<div style="background-image: url('{{ asset('img/bg.png') }}'); width: 100%; height: 100vh; color: black;">
    <div class="navbar bg-base-100, bg-white">
      <div class="flex-1 ">
        <img src="{{ asset('img/PLM1.png') }}" alt="PLM" width="200" height="200">
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
              <svg class="w-8 h-8 text-neutral-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="11" cy="11" r="8" />  <line x1="21" y1="21" x2="16.65" y2="16.65" /></svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="display: grid; place-items: center center; height: 100vh;">
      <div class="card w-96 bg-white shadow-xl p-20">
        <div class="card-body">
          <label class="input input-bordered flex items-center gap-2">
            <input type="text" class="grow" placeholder="Search" />
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" /></svg>
          </label>
          <button class="btn btn-white">Button 1</button>
          <button class="btn btn-white">Button 2</button>
          <button class="btn btn-white">Button 3</button>
        </div>
      </div>
    </div>
  </div>
