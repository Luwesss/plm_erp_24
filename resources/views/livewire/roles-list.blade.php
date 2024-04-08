<div style="background-image: url('bg.png'); background-size: cover; height: 100vh; color: black;">

    <div class="navbar bg-base-100 bg-white">
        <div class="flex-1">
            <div class="h-full w-20">
                <img src="plm_logo.png" alt="PLM Logo" class="object-contain h-full w-full">
            </div>
        </div>
        <div class="flex-none gap-2">
            <div class="dropdown">
                <button tabindex="0" class="btn btn-ghost dropdown-toggle">John Cruz</button>
                <ul tabindex="0" class="dropdown-content menu shadow bg-base-100 rounded-box mt-3, bg-white">
                    <li><a href="#">Option 1</a></li>
                    <li><a href="#">Option 2</a></li>
                    <li><a href="#">Option 3</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-16 flex justify-between items-center px-4 py-2 space-x-4">
        <div class="flex-grow">  <div class="text-xl font-bold mr-4 justify-center">  <strong>All Roles</strong>
            </div>
        </div>
        <div class="flex items-center"> <button class="btn btn-sm font-size: 12px; text-black bg-white ml-auto">Back</button> </div>
    </div>

    <div class="flex mt-4 justify-end"> <div class="mr-4"> <input type="text" placeholder="Search Role" class="w-20 input input-bordered bg-white md:w-40" />
        </div>
    </div>

    <div class="overflow-x-auto mt-10 px-4">
        <h2 class="text-lg font-bold mr-auto ml-20">Roles List</h2>
        <div class="card bg-white shadow-md rounded mb-4">
            <table class="table rounded">  <thead>
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

    <style>
        table.table {
            background-color: white; /* Set table background to white */
            border-collapse: collapse; /* Remove gaps between cells */
        }

        table.table tr td,
        table.table tr th {
            border: 1px solid #ddd; /* Add a light gray border */
            padding: 8px; /* Add some padding for better readability */
        }

        /* Apply rounded corners using daisyUI utility classes */
        table.table {
            border-radius: rounded-lg; /* Use rounded-lg for a larger radius */
        }

        table.table thead th {
            border-top-left-radius: inherit; /* Inherit border radius from table */
            border-top-right-radius: inherit; /* Inherit border radius from table */
        }

        table.table tbody tr:first-child td:first-child {
            border-top-left-radius: rounded-lg;
        }
    </style>
</div>
